@extends('layouts.main')

@section('title', 'MyMovies | Movies List')

@section('content')
    <section id="movies">
        <div class="container my-5">
            @forelse ($movies as $movie)
                <div class="card my-3" ©>
                    <div class="card-body">
                        <h2 class="card-title">{{ $movie['title'] }}</h2>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie['original_title'] }}</h6>
                        <div class="card-text">
                            <h3>{{ $movie['nationality'] }}</h3>
                            <h4>{{ $movie['h4'] }}</h4>
                            <h2>{{ $movie['vote'] }}</h2>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="text-center">Nessun film disponibile</h2>
            @endforelse
        </div>
    </section>
@endsection
