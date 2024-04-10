@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Lista dei film</h1>

    
    <div class="row row-cols-4">

        {{-- @dump($movies) --}}

        @foreach($movies as $movie)
        <div class="col p-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">({{$movie->original_title}})</p>
                </div>
            </div>
                      
        </div>
        @endforeach

    </div>
</div>

@endsection