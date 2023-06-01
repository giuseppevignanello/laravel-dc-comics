@extends('layouts.app')

@section('content')
    <section class="movies_section">
        <div class="bg-primary text-white p-3 mt-4 me-5 ms-2 mt-5">
            <h1 class="d-inline">
                <strong> OUR MOVIES </strong>
            </h1>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-5">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card my-3 shadow">
                            <a style="color: black" href="admin\movies\{{ $movie->id }}">
                                <img src="{{ $movie->poster }}" alt="Title" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h2 class="card-title"><strong> {{ $movie->title }} </strong></h2>
                                    <p class="card-text">{{ $movie->director }}</p>
                                    <p class="card-text"><strong> {{ $movie->year }} </strong></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div>
                        <p>No movies</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
