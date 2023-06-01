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
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="col-md-4">
                <label for="title" class="form-label text-white mt-3">Title</label>
                <input type="text" class="form-control @error('title')
                is-invalid
            @enderror"
                    id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <h6 class="alert-heading">{{ $message }}</h6>
                    </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="description" class="form-label text-white">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ old('description') }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Image</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label text-white">Price</label>
                <input type="text" class="form-control @error('price')
                is-invalid
            @enderror"
                    id="price" name="price" value="{{ old('price') }}">
            </div>
            @error('price')
                <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading">{{ $message }}</h6>
                </div>
            @enderror
            <div class="col-md-4">
                <label for="series" class="form-label text-white">Series</label>
                <input type="text" class="form-control @error('series')
                is-invalid
            @enderror"
                    id="series" name="series" value="{{ old('series') }}">
            </div>
            @error('series')
                <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading">{{ $message }}</h6>
                </div>
            @enderror
            <div class="col-md-4">
                <label for="sale_date" class="form-label text-white">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label text-white">Type</label>
                <input type="text" class="form-control @error('type')
                is-invalid
            @enderror"
                    id="type" name="type" value="{{ old('type') }}">
            </div>
            @error('series')
                <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading">{{ $message }}</h6>
                </div>
            @enderror
            <div class="col-12">
                <button class="btn btn-primary my-4" type="submit">Add comic</button>
            </div>
        </form>
    </div>
@endsection
