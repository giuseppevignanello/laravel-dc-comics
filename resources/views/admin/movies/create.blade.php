@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form class="my-5" action="{{ route('movies.store') }}" method="post">
            @csrf
            <div class="col-md-4">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control @error('title')
                is-invalid
            @enderror"
                    id="title" name="title">
            </div>
            @error('title')
                <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading">{{ $message }}</h6>
                </div>
            @enderror
            <div class="col-md-4">
                <label for="description" class="form-label text-white">Description</label>
                <input type="text" class="form-control " id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="poster" class="form-label text-white">Image</label>
                <input class="form-control" type="text" id="poster" name="poster">
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label text-white">Year</label>
                <input type="text" class="form-control @error('year')
                is-invalid
            @enderror"
                    id="year" name="year">
            </div>
            @error('year')
                <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading">{{ $message }}</h6>
                </div>
            @enderror
            <div class="col-md-4">
                <label for="director" class="form-label text-white">director</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="col-md-4">
                <label for="rating" class="form-label text-white">rating</label>
                <input type="number" step="0.1" class="form-control" id="rating" name="rating">
            </div>
            @error('type')
                <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading">{{ $message }}</h6>
                </div>
            @enderror
            <div class="col-12 my-4">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
