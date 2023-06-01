@extends('layouts.app')

@section('content')
    <h1 class="text-white mx-5 my-3">All the movies</h1>
    <a class="btn btn-primary mx-5" href="{{ route('movies.create') }}" role="button">Add new movie</a>
    <div class="container mb-5 pb-3">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <table class="table table-primary my-5">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Year</th>
                    <th scope="col" colspan="4" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td><img style="height: 70px" src="{{ $movie->poster }}" alt=""></td>
                        <td>{{ $movie->year }}</td>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                <a href="movies/{{ $movie->id }}" role="button" class="text-white">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                <a class="text-white" href="movies/{{ $movie->id }}/edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $movie->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- Modal --}}
                    <div class="modal fade" id="deleteModal-{{ $movie->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Delete movie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this movie?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <tr>
                        <td>No results</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
