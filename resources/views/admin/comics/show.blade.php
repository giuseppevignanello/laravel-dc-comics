@extends('layouts.app')

@section('content')
    <div class="container pb-3">
        <div class="d-flex justify-content-center my-5">
            <div class="card" style="width: 18rem">
                <img class="card-img-top" src="{{ $comic->thumb }}" alt="Title">
                <div class="card-body">
                    <h4 class="card-title">{{ $comic->title }}</h4>
                    <p class="card-text">{{ $comic->price }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
