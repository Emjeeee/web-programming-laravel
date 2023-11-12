<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movies::paginate(9);
        // dd($movies);
        return view('movies.index',compact(['movies']));
    }

    public function detail(Movies $id){
        return view('detail',['movies.index'=>$id]);
    }
}
