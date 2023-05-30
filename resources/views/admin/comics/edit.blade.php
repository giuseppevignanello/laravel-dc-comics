@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="my-5" action="{{ route('comics.update', $comic->id) }}" method="post">

            @method('PUT')
            @csrf
            <div class="col-md-4">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="col-md-4">
                <label for="description" class="form-label text-white">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $comic->description }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Image</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label text-white">Price</label>
                <input type="text" class="form-control " id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="col-md-4">
                <label for="series" class="form-label text-white">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="col-md-4">
                <label for="sale_date" class="form-label text-white">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label text-white">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="col-12 my-4">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
