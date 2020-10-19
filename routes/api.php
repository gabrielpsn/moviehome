<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GenreController;
use \App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('genre', [GenreController::class, 'index'])->name('genre');
Route::get('movies', [MovieController::class, 'index'])->name('movies');
Route::get('movies/genre/{id}', [MovieController::class, 'getMoviesByGenre'])->name('movies');
Route::get('movies/filter', [MovieController::class, 'getMoviesByTitle'])->name('movies');
Route::get('movies/next', [MovieController::class, 'getMovieNext'])->name('movies');

