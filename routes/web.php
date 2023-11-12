<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/movies',[MoviesController::class,'index']);

Route::get('/episodes',[EpisodesController::class,'index']);

Route::get('/genres',[GenresController::class,'index']);

