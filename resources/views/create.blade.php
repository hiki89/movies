@extends('layouts.master')

@section('navbar')

<form method="POST" action="{{ route('create') }}">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title"/>
        @include('partials.error-message', ['fieldTitle' => 'title'])
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre"/>
        @include('partials.error-message', ['fieldTitle' => 'genre'])
    </div>

    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director" name="director"/>
        @include('partials.error-message', ['fieldTitle' => 'director'])
    </div>

    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" class="form-control" id="year" name="year"/>
        @include('partials.error-message', ['fieldTitle' => 'year'])
    </div>

    <div class="form-group">
        <label for="storyline">Storyline</label>
        <input type="text" class="form-control" id="storyline" name="storyline"/>
        @include('partials.error-message', ['fieldTitle' => 'storyline'])
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Add movie</button>
    </div>

</form>

@endsection