<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\Map;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function lokalizacja()
    {
        $page = Page::find(4);
        return view('front.static.lokalizacja', compact('page'));
    }

    public function investment()
    {
        $page = Page::find(2);
        return view('front.static.investment', compact('page'));
    }

    public function amenities()
    {
        $page = Page::find(3);
        return view('front.static.amenities', compact('page'));
    }

    public function packages()
    {
        $page = Page::find(4);
        return view('front.static.packages', compact('page'));
    }

    public function gallery()
    {
        $page = Page::find(5);
        return view('front.static.gallery', compact('page'));
    }
    public function komorki()
    {
        $page = Page::find(1);
        $properties = Property::where('type', 2)->get();
        return view('front.static.komorki', compact('page', 'properties'));
    }
    public function postojowe()
    {
        $page = Page::find(1);
        $properties = Property::where('type', 3)->get();
        return view('front.static.postojowe', compact('page', 'properties'));
    }
}
