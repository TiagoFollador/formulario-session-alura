<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Series;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {
        /*
        $seasons = Season::query()
            ->with('episodes')
            ->where('series_id', $series)
            ->get(); */
        $seasons = $series->seasons()->with('episodes')->get();

        return view('seasons.index')->with('seasons', $seasons)->with("series", $series);
    }
}
