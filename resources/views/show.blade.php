@extends('layouts.master')

@section('navbar')

    <div class="single-movie">
        <h2 class="single-movie-title">{{ $movie->title }}</h2>
        <p> <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a> </p> 
        <p> {{ $movie->director }} </p>
        <p> {{ $movie->year }} </p>
        <p> {{ $movie->storyline }} </p>

        <ul>
            <p><b>Comments:</b></p>
            @foreach($movie->comments as $comment)
                <li>
                    <p>{{ $comment->content }}</p>
                    <p>{{ $comment->created_at }}</p>
                </li>
            @endforeach
        </ul>

        <form method="POST" action="{{ url('/movies/'.$movie->id.'/comments/') }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="content">Comment</label>
                <textarea type="text" class="form-control" id="content" name="content"/></textarea>
                @include('partials.error-message', ['fieldTitle' => 'content'])
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add comment</button>
            </div>
        </form>
    </div>

@endsection