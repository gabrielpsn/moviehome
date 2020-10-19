<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = movies::all();
        return response()->json($movies);
    }

    public function getMoviesByTitle(Request $request)
    {
        $movies = movies::where('title', 'LIKE', '%' . $request->search . '%')->get();
        return response()->json($movies);
    }

    public function getMoviesByGenre($id)
    {
        $moviesGenre = movies::where('genre_id', $id)
            ->orderBy('description', 'desc')
            ->take(10)
            ->get();

        return response()->json($moviesGenre->paginate());
    }

    public function getMovieNext()
    {
        $moviesGenre = movies::where('next_movies', true)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return response()->json($moviesGenre);
    }
}
