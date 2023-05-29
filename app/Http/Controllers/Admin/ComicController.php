<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        return view('admin.comics.index');
    }

    public function create()
    {
        return view('admin.comics.create');
    }
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }
}
