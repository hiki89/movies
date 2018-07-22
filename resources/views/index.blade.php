@extends('layouts.master')

@section('navbar')

@foreach($movies as $movie)
    <div class="movie-title">
        <h2 class="movie-title"><a href=" {{route('show', ['id' => $movie->id])}} ">{{$movie->title}}</a></h2>
        <p> {{ $movie->storyline }} </p>
    </div>
@endforeach

@endsection