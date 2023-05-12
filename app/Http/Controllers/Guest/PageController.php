<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Carbon is a popular PHP library used for working with dates and times. It provides an expressive and convenient API to manipulate, format, and compare dates and times. Carbon extends the core PHP DateTime class and provides additional functionality and a more intuitive syntax.
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        //$today = Carbon::today();
        //$trains = Train::where('departure_day', '>=', $today)->get();
        $trains = Train::all();

        return view('index', compact('trains'));
    }
}
