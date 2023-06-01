<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }


    public function store(StoreMovieRequest $request)
    {
        $val_data = $request->validated();

        Movie::create($val_data);

        return to_route('movies.index')->with('message', 'movie created successfully');
    }
    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }


    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $val_data = $request->validated();

        $movie->store($val_data);
        return to_route('movies.index')->with('message', 'movie update successfully ');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return to_route('movies.index')->with('message', 'movie deleted ');;
    }
}
