<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(){
        $genres = Genres::all();

        return view('genres.index',compact(['genres']));
    }
}
