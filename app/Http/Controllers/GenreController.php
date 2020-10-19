<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $gener = genre::all();

        return response()->json($gener);
    }
}
