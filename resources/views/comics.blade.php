@extends('layouts.app')

@section('content')
    <section class="comics_section">
        <div class="bg-primary text-white p-3 mt-4 me-5 ms-2 mt-5">
            <h1 class="d-inline">
                <strong> OUR CLASSIC COMICS </strong>
            </h1>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-5">
                @forelse ($comics as $comic)
                    <div class="col">
                        <div class="card my-3 shadow">
                            <a style="color: black" href="admin\comics\{{ $comic->id }}">
                                <img src="{{ $comic->thumb }}" alt="Title">
                                <div class="card-body">
                                    <h2 class="card-title"><strong> {{ $comic->title }} </strong></h2>
                                    <p class="card-text">{{ $comic->series }}</p>
                                    <p class="card-text"><strong> {{ $comic->price }} </strong></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div>
                        <p>No Comics</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
