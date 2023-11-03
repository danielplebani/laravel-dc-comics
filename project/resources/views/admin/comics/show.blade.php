@extends('layouts.admin')

@section('page-title', 'comic info')

@section('content')
    <div class="container text-center py-5">

        <div style="width: 20%; margin:auto;" class="card text-center shadow">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $comic->title }}</h5>
                <p class="card-text">Price: {{ $comic->price }}$</p>
                @if ($comic->thumb)
                    <img src="{{ $comic->thumb }}" class="img-fluid">
                @else
                    <p>No thumbnail available</p>
                @endif
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="text-center">
                <button class="edit_button">EDIT</button>
            </a>

            <!-- Button trigger modal -->
            <button class="delete_button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                DELETE
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">are you sure you want to delete this Comic?</h1>
                    </div>
                    <div class="d-flex justify-content-center gap-2 py-4">
                        <button class="edit_button" data-bs-dismiss="modal">CANCEL</button>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="padding: 9px 40px" class="delete_button">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
