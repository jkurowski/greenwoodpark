<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Repositories\InvestmentRepository;
use Illuminate\Http\Request;

use App\Models\Building;
use App\Models\Investment;

class InvestmentBuildingController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 1;
    }

    public function index($building, $buildingSlug, Request $request)
    {
        $investment = $this->repository->find(1);
        $building = Building::find($building);

        $investment_room = $investment->load(array(
            'buildingRooms' => function($query) use ($building, $request)
            {
                $query->where('properties.building_id', $building->id);
                if ($request->input('s_pokoje')) {
                    $query->where('rooms', $request->input('s_pokoje'));
                }

                $floorNumber = $request->input('s_pietro');

                if ($floorNumber !== null && $floorNumber !== '') {
                    $query->whereHas('floor', function ($q) use ($floorNumber) {
                        $q->where('number', $floorNumber);
                    });
                }

                if ($request->input('s_metry')) {
                    $area_param = explode('-', $request->input('s_metry'));
                    $min = $area_param[0];
                    $max = $area_param[1];
                    $query->whereBetween('area', [$min, $max]);
                }

                $query->where('properties.type', 1);
            },
            'buildingFloors' => function($query) use ($building)
            {
                $query->where('building_id', $building->id);
            }
        ));

        $page = Page::where('id', $this->pageId)->first();
        return view('front.investment_building.index', [
            'investment' => $investment_room,
            'building' => $building,
            'page' => $page,
            'properties' => $investment->buildingRooms,
            'next_floor' => $building->findNext($investment->id, $building->id),
            'prev_floor' => $building->findPrev($investment->id, $building->id),
        ]);
    }

    public function show($id)
    {
        //
    }
}
