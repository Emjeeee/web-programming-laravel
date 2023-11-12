<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::all();
        // dd($movie);
        return view('movie.index',compact(['movie']));
    }
}
