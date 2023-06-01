@extends('layouts.app')

@section('content')
    <div class="show_section">
        <div class="container pb-3">
            <div class="d-flex justify-content-center my-5">
                <div class="card mt-4" style="width: 28rem">
                    <img class="card-img-top" src="{{ $movie->poster }}" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">{{ $movie->title }}</h4>
                        <p class="card-text">{{ $movie->year }}</p>
                        <p class="card-text">{{ $movie->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
