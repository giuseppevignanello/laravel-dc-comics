@extends('layouts.app')

@section('content')
    <h1 class="text-white mx-5 my-3">All the comics</h1>
    <a class="btn btn-primary mx-5" href="{{ route('comics.create') }}" role="button">Add new Comic</a>
    <div class="container">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif


        <table class="table table-primary my-5">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col" colspan="4" class="text-center">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td><img style="height: 70px" src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a href="comics/{{ $comic->id }}"><i class="fa-solid fa-eye"></i> </a>
                        </td>
                        <td>
                            <a href="comics/{{ $comic->id }}/edit"><i class="fa-solid fa-pen-to-square"></i> </a>
                        </td>
                        <td>
                            <a href="comics/{{ $comic->id }}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
