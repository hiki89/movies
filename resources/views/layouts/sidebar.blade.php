<aside>
    <h4>Latest movies:</h4>
    @foreach($last_five_movies as $last_movie)
        <a href="/movies/{{ $last_movie->id }}"><h5>{{ $last_movie->title }}</h5></a>
    @endforeach
</aside>