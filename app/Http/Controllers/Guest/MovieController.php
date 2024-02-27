<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        // SELECT * FROM movies
        $movies = Movie::get();
        // OPPURE
        // $movies = Movie::all();

        // resources/views/movies/index.blade.php
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        //                             ------- Cioè, chiave primaria
        //                             |
        //                             V
        // SELECT * FROM movies WHERE id = $id
        $movie = Movie::where('id', $id)->first();
        // OPPURE
        // $movie = Movie::find($id);

        // resources/views/movies/show.blade.php
        return view('movies.show', compact('movie'));
    }
}
