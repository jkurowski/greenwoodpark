<?php

namespace App\Models;

use App\Helpers\PropertyAreaTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Notifications\Notifiable;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
class Property extends Model
{
    use LogsActivity, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_id',
        'building_id',
        'floor_id',
        'vox_id',
        'status',
        'name',
        'name_list',
        'number',
        'number_order',
        'type',
        'rooms',
        'area',
        'price',
        'price_brutto',
        'price_30',
        'vat',
        'additional',
        'garden_area',
        'garden_area_2',
        'balcony_area',
        'balcony_area_2',
        'terrace_area',
        'loggia_area',
        'parking_space',
        'garage',
        'storeroom',
        'deadline',
        'kitchen_type',
        'type',
        'html',
        'cords',
        'file',
        'file_3d',
        'file_pdf',
        'file_webp',
        'meta_title',
        'meta_description',
        'views',
        'active',
        'visitor_related_type',

        // Historia ceny
        'highlighted',
        'promotion_price',
    ];

    // Historia ceny
    public function priceHistory(): HasMany
    {
        return $this->hasMany(PropertyPrice::class)->orderBy('changed_at', 'desc');
    }
    public function getHasPriceHistoryAttribute(): bool
    {
        return $this->priceHistory()->exists();
    }

    public function getCurrentPriceDateAttribute()
    {
        // Jeśli typ nieruchomości nie jest 1 → X
        if ($this->type != 1) {
            return 'X';
        }

        // Pobranie najnowszej ceny (bez wywoływania relacji jako metody)
        $latestPrice = $this->priceHistory()->first();

        if (!$latestPrice || !$latestPrice->changed_at) {
            return 'X';
        }

        return $latestPrice->changed_at->toDateString();
    }

    /**
     * Get next property
     * @param int $investment
     * @param int $id
     * @return Property
     */
    public function findNext(int $investment, int $id, ?int $floor_id = null)
    {

        $query = $this->where('investment_id', $investment)->where('number_order', '=', $id + 1);

        if (!is_null($floor_id)) {
            $query->where('floor_id', $floor_id);
        }

        return $query->first();
    }

    /**
     * Get previous property
     * @param int $investment
     * @param int $id
     * @return Property
     */
    public function findPrev(int $investment, int $id, ?int $floor_id = null)
    {
        $query = $this->where('investment_id', $investment)->where('number_order', '=', $id -1)->orderByDesc('number_order');

        if (!is_null($floor_id)) {
            $query->where('floor_id', $floor_id);
        }

        return $query->first();
    }

    /**
     * Get notifications for room
     * @return HasMany
     */
    public function roomsNotifications(): HasMany
    {
        return $this->hasMany(
            'App\Models\Notification',
            'notifiable_id',
            'id'
        )->where('notifiable_type', 'App\Models\Property')->latest();
    }

    public function getActivitylogOptions(): LogOptions
    {
        $logOptions = new LogOptions();
        $logOptions->useLogName('Powierzchnia');
        $logOptions->logFillable();

        return $logOptions;
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function investment()
    {
        return $this->belongsTo(Investment::class);
    }

    // Define an accessor for the URL
    public function getUrlAttribute()
    {
        $investmentSlug = $this->investment->slug ?? '';
        return "/inwestycje/i/{$investmentSlug}/pietro/{$this->floor_id}/m/{$this->id}";
    }

    public function visitorRelatedProperties()
    {
        return $this->belongsToMany(Property::class, 'property_visitor_related', 'property_id', 'related_property_id');
    }

    public function relatedProperties()
    {
        return $this->belongsToMany(Property::class, 'property_property', 'property_id', 'related_property_id');
    }

    public function getLocation(): string
    {
        $buildingName = $this->building ? $this->building->name : null;
        $floorName = $this->floor ? $this->floor->name : null;

        if ($buildingName && $floorName) {
            return "{$buildingName} - {$floorName}";
        } elseif ($floorName) {
            return "{$floorName}";
        }

        return 'Brak lokalizacji'; // Fallback if no building or floor is set
    }

    public function priceComponents()
    {
        return $this->belongsToMany(PropertyPriceComponent::class, 'property_price_component_property')
            ->withPivot('value', 'value_m2', 'category')
            ->withTimestamps();
    }

    // API

    public function getRelatedTypesAttribute()
    {
        $types = $this->relatedProperties
            ->pluck('type')
            ->map(fn ($type) => PropertyAreaTypes::getStatusText($type) ?? 'X')
            ->unique()
            ->values();

        return $types->isNotEmpty()
            ? $types->implode(', ')
            : 'X';
    }

    public function getRelatedNumbersAttribute()
    {
        $numbers = $this->relatedProperties
            ->pluck('number')
            ->filter()
            ->values();

        return $numbers->isNotEmpty()
            ? $numbers->implode(', ')
            : 'X';
    }

    public function getRelatedPricesAttribute()
    {
        $prices = $this->relatedProperties->map(function ($property) {
            return ($property->type == 1 && $property->price_brutto)
                ? $property->price_brutto
                : null;
        })->filter()->values();

        return $prices->isNotEmpty()
            ? $prices->implode(', ')
            : 'X';
    }

    public function getTotalWithRelatedPriceAttribute()
    {
        if ($this->type != 1) {
            return 'X';
        }

        // Cena głównej nieruchomości (uwzględnia promocję)
        $mainPrice = ($this->highlighted == 1 && $this->promotion_price)
            ? (float)$this->promotion_price
            : (float)$this->price_brutto;

        // Suma cen powiązanych nieruchomości (uwzględnia promocję)
        $relatedTotal = $this->relatedProperties->sum(function ($prop) {
            return ($prop->highlighted == 1 && $prop->promotion_price)
                ? (float)$prop->promotion_price
                : (float)$prop->price_brutto;
        });

        return $mainPrice + $relatedTotal;
    }

    public function getDisplayPriceAttribute()
    {
        if ($this->type != 1) {
            return 'X';
        }

        if ($this->highlighted == 1 && $this->promotion_price) {
            return $this->promotion_price;
        }

        return $this->price_brutto ?? 'X';
    }
}
