@extends('layouts.admin')

@section('page-title', 'comic info')

@section('content')
    <div class="container text-center py-5">
        <h1>Comic Details</h1>
        <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="text-center"><button id="edit_button"><strong>EDIT</strong></button></a>

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
