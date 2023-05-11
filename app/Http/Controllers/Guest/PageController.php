<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    { // first method call
        $trains = Train::all();

        // second method call
        // visualize all movies
        //$movies = Movie::select('*')->get();

        return view('index', compact('movies'));
    }
}
