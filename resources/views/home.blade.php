@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Lista dei film</h1>

    
    <div class="row row-cols-4">

        {{-- @dump($movies) --}}

        @foreach($movies as $movie)
        <div class="col p-2">

            <div class="movie">
                <div class="movie-body">
                    <h5 class="movie-title">{{$movie->title}}</h5>
                    <p class="movie-text">({{$movie->original_title}})</p>
                </div>
            </div>
                      
        </div>
        @endforeach

    </div>
</div>

@endsection