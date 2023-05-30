@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="col-md-4">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="col-md-4">
                <label for="description" class="form-label text-white">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Image</label>
                <input class="form-control" type="text" id="thumb" name="thumb">
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label text-white">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="col-md-4">
                <label for="series" class="form-label text-white">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="col-md-4">
                <label for="sale_date" class="form-label text-white">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label text-white">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection
