<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Building extends Model
{
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_id',
        'name',
        'number',
        'html',
        'cords',
        'file',
        'file_webp',
        'meta_title',
        'meta_description',
        'meta_robots',
        'active',
        'content',
        'area_range',
        'rooms_range',
        'price_range'
    ];

    public function findNext(int $investment, int $position)
    {
        $query = $this->where('investment_id', $investment)->where('id', '<', $position)->orderByDesc('id');
        return $query->first();
    }

    public function findPrev(int $investment, int $position)
    {
        $query = $this->where('investment_id', $investment)->where('id', '>', $position)->orderBy('id');
        return $query->first();
    }

    /**
     * Get building floors
     * @return HasMany
     */
    public function floors(): HasMany
    {
        return $this->hasMany('App\Models\Floor');
    }

    /**
     * Get building floors with properties count
     * @return Collection
     */
    public function floorsWithCount(): Collection
    {
        return $this->hasMany('App\Models\Floor')->withCount('properties')->get(['id', 'name']);
    }

    /**
     * Get building properties
     * @return HasMany
     */
    public function properties(): HasMany
    {
        return $this->hasMany('App\Models\Property')->orderBy('highlighted', 'DESC')->orderBy('number_order');
    }

    /**
     * The "boot" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::deleting(function ($building) {
            $building->floors()->each(function($floor) {
                $floor->delete();
            });
        });
    }
}
