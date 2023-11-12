<?php

namespace App\Http\Controllers;

use App\Models\Episodes;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index(){
        $episodes = Episodes::all();
        // dd($episodes);
        return view('episodes.index',compact(['episodes']));
    }
}
