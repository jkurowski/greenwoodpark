<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;

use App\Models\Investment;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Page;
use App\Repositories\InvestmentRepository;
use Illuminate\Http\Request;

class InvestmentFloorController extends Controller
{
    private InvestmentRepository $repository;
    private int $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 1;
    }

    public function index($buildingSlug, Floor $floor, $floorSlug, Request $request)
    {
        $investment = Investment::find(1);
        $building = Building::whereSlug($buildingSlug)->first();

        $investment_room = $investment->load(array(
            'floorRooms' => function($query) use ($floor, $request)
            {
                $query->where('properties.floor_id', $floor->id);
                $query->orderBy('properties.highlighted', 'DESC')->orderBy('properties.number_order');

                if ($request->input('s_pokoje')) {
                    $query->where('rooms', $request->input('s_pokoje'));
                }
                if ($request->input('status')) {
                    $query->where('status', $request->input('status'));
                }
                if ($request->input('s_metry')) {
                    $area_param = explode('-', $request->input('s_metry'));
                    $min = $area_param[0];
                    $max = $area_param[1];
                    $query->whereBetween('area_search', [$min, $max]);
                }
//                if ($request->input('sort')) {
//                    $order_param = explode(':', $request->input('sort'));
//                    $column = $order_param[0];
//                    $direction = $order_param[1];
//                    $query->orderBy($column, $direction);
//                }
//                if ($request->input('s_dodatkowe')) {
//                    $amenities = explode(',', $request->input('s_dodatkowe'));
//                    $query->where(function ($subQuery) use ($amenities) {
//                        foreach ($amenities as $amenity) {
//                            switch ($amenity) {
//                                case '1':
//                                    $subQuery->whereNotNull('balcony_area');
//                                    break;
//                                case '2':
//                                    $subQuery->whereNotNull('garden_area');
//                                    break;
//                                case '3':
//                                    $subQuery->whereNotNull('loggia_area');
//                                    break;
//                                case '4':
//                                    $subQuery->whereNotNull('terrace_area');
//                                    break;
//                            }
//                        }
//                    });
//                }
            },
            'floor' => function($query) use ($floor)
            {
                $query->where('id', $floor->id);
            }
        ));

        $page = Page::where('id', $this->pageId)->first();

        return view('front.investment_building_floor.index', [
            'investment' => $investment_room,
            'properties' => $investment->floorRooms,
            'next_floor' => $floor->findNext($investment->id, $building->id, $floor->position),
            'prev_floor' => $floor->findPrev($investment->id, $building->id, $floor->position),
            'uniqueRooms' => $this->repository->getUniqueRooms($investment_room->properties),
            'building' => $building,
            'page' => $page
        ]);
    }

}
