<?php

namespace App\Http\Controllers\Admin\Developro\Property;

use App\Http\Controllers\Controller;

//CMS
use App\Http\Requests\PropertyFormRequest;
use App\Models\PropertyPriceComponent;
use App\Models\PropertyProperty;
use App\Repositories\PropertyRepository;
use App\Services\PropertyService;
use Illuminate\Http\Request;

use App\Models\Floor;
use App\Models\Investment;
use App\Models\Property;

class PropertyController extends Controller
{
    private $repository;
    private $service;

    public function __construct(PropertyRepository $repository, PropertyService $service)
    {
//        $this->middleware('permission:box-list|box-create|box-edit|box-delete', [
//            'only' => ['index','store']
//        ]);
//        $this->middleware('permission:box-create', [
//            'only' => ['create','store']
//        ]);
//        $this->middleware('permission:box-edit', [
//            'only' => ['edit','update']
//        ]);
//        $this->middleware('permission:box-delete', [
//            'only' => ['destroy']
//        ]);

        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(Investment $investment, Floor $floor)
    {
        $list = $investment->load(array(
            'floorRooms' => function($query) use ($floor)
            {
                $query->where('floor_id', $floor->id);
            }
        ));

        return view('admin.developro.investment_property.index', [
            'investment' => $investment,
            'floor' => $floor,
            'list' => $list,
            'count_property_status' => $list->floorRooms->countBy('status')
        ]);
    }

    public function create(Investment $investment, Floor $floor)
    {
        $priceComponents = PropertyPriceComponent::all();

        return view('admin.developro.investment_property.form', [
            'cardTitle' => 'Dodaj powierzchnię',
            'backButton' => route('admin.developro.investment.properties.index', [$investment, $floor]),
            'floor' => $floor,
            'investment' => $investment,
            'related' => collect(),
            'priceComponents' => $priceComponents
        ])->with('entry', Property::make());
    }

    public function store(PropertyFormRequest $request, Investment $investment, Floor $floor)
    {

        $property = $this->repository->create(array_merge($request->validated(), [
            'investment_id' => $investment->id,
            'floor_id' => $floor->id
        ]));

        $types = $request->input('price-component-type', []);
        $categories = $request->input('price-component-category', []);
        $values = $request->input('price-component-value', []);
        $values_m2 = $request->input('price-component-m2-value', []);

        $data = [];

        foreach ($types as $index => $componentId) {
            $data[$componentId] = [
                'category' => $categories[$index],
                'value' => $values[$index],
                'value_m2' => $values_m2[$index],
            ];
        }

        $property->priceComponents()->sync($data);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $property);
        }

        if ($request->hasFile('file_pdf')) {
            $this->service->uploadPdf($request->name, $request->file('file_pdf'), $property);
        }

        if ($request->hasFile('file_3d')) {
            $this->service->upload3d($request->name, $request->file('file_3d'), $property);
        }

        return redirect(route('admin.developro.investment.properties.index', [$investment, $floor]))->with('success', 'Powierzchnia zapisana');
    }

    public function edit(Investment $investment, Floor $floor, Property $property)
    {
        $priceComponents = PropertyPriceComponent::all();

        return view('admin.developro.investment_property.form', [
            'cardTitle' => 'Edytuj powierzchnię',
            'backButton' => route('admin.developro.investment.properties.index', [$investment, $floor]),
            'floor' => $floor,
            'investment' => $investment,
            'entry' => $property,
            'priceComponents' => $priceComponents
        ]);
    }

    public function update(PropertyFormRequest $request, Investment $investment, Floor $floor, Property $property)
    {
        $this->repository->update($request->validated(), $property);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $property, true);
        }

        if ($request->hasFile('file_pdf')) {
            $this->service->uploadPdf($request->name, $request->file('file_pdf'), $property, true);
        }

        if ($request->hasFile('file_3d')) {
            $this->service->upload3d($request->name, $request->file('file_3d'), $property, true);
        }

        return redirect(route('admin.developro.investment.properties.index', [$investment, $floor]))->with('success', 'Powierzchnia zaktualizowana');
    }

    public function destroy(Investment $investment, Floor $floor, int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }

    public function fetchProperties(Investment $investment) {
        $properties = $investment->selectProperties()->get();
        $types = $properties->groupBy('type');
        $result = [];
        foreach ($types as $type => $properties) {
            $result[$type] = $properties;
        }
        return response()->json($result);
    }

    public function storerelated(Request $request, $investmentId, $floorId, $propertyId)
    {
        $request->validate([
            'related_property_id' => 'required|exists:properties,id',
        ]);

        $related_id = $request->input('related_property_id');

        $isRelated = PropertyProperty::where('related_property_id', $related_id)->exists();
        $related_property = Property::findOrFail($related_id);

        if ($isRelated) {
            return getRelatedType($related_property->type);
        }

        $property = Property::findOrFail($propertyId);
        $property->relatedProperties()->attach($related_id);

        // Return a response
        return view('admin.developro.investment_shared.related', ['property' => $related_property]);
    }

    public function removerelated(Request $request, $investmentId, $floorId, $propertyId)
    {
        // Validate the input
        $request->validate([
            'related_id' => 'required|exists:properties,id',
        ]);

        $relatedId = $request->input('related_id');

        $property = Property::findOrFail($propertyId);
        $isRelated = $property->relatedProperties()->where('related_property_id', $relatedId)->exists();

        if ($isRelated) {
            $property->relatedProperties()->detach($relatedId, ['client_id' => null]);

            return response()->json([
                'status' => 'removed'
            ]);
        }
    }
}
