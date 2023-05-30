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
                @forelse ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td><img style="height: 70px" src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->price }}</td>
                        <td>

                            <button type="submit" class="btn btn-primary"><a href="comics/{{ $comic->id }}"
                                    role="button"> <a href="comics/{{ $comic->id }}"><i class="fa-solid fa-eye"></i>
                                    </a></button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary"><a href="comics/{{ $comic->id }}/edit"><i
                                        class="fa-solid fa-pen-to-square"></i> </a></button>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i></button>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td>No results</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- Modal --}}
        <!-- Modal Body -->

        <div class="modal fade" id="deleteModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Delete Comic</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this comic?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
