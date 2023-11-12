<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movie = Movie::paginate(6);
        dd($movie);
        return view('movie.index', compact(['movie']));
    }

    public function detail(Movie $id){
        return view('movie.detail',['movie'=>$id]);
    }
}
