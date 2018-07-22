<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class MoviesController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();
        return view('index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('show', compact('movie'));

        $comment = Comment::find($id);
        return view('show', compact('comment'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')),
            'storyline' => 'required|max:1000'
        ]);

        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => (integer) request('year'),
            'storyline' => request('storyline')

        ]);

        return redirect('/movies');
    }
}
