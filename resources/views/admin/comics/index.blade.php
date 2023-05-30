@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <div class="container">
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
                                <a href="comics/{{ $comic->id }}"><i class="fa-solid fa-pen-to-square"></i> </a>
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
