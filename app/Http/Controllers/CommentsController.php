<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Movie $movie)
    {
        $this->validate(request(), [
            'content' => 'required'
        ]);

        Comment::create([
            'content' => request('content'),
            'movie_id' => $movie->id
        ]);

        return redirect('/movies/' . $movie->id);
    }
}
