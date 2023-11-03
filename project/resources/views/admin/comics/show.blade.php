@extends('layouts.admin')

@section('page-title', 'comic info')

@section('content')
    <div class="container text-center py-5">
        <h1>Comic Info</h1>

        <div class="d-flex justify-content-center gap-1">
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="text-center">
                <button class="edit_button"><strong>EDIT</strong></button>
            </a>

            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete_button" class="text-center"><strong>DELETE</strong></button>
            </form>
        </div>


        <div style="width: 30%; margin:auto;" class="card text-center shadow">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $comic->title }}</h5>
                <p class="card-text">Price: {{ $comic->price }}</p>
                @if ($comic->thumb)
                    <img src="{{ $comic->thumb }}" class="img-fluid">
                @else
                    <p>No thumbnail available</p>
                @endif
            </div>
        </div>

    </div>
@endsection
