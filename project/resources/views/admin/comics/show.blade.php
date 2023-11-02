@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Comic Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $comic->name }}</h5>
                <p class="card-text">Price: ${{ $comic->price }}</p>
                @if ($comic->thumb)
                    <img src="{{ asset('storage/' . $comic->thumb) }}" class="img-fluid">
                @else
                    <p>No thumbnail available</p>
                @endif
            </div>
        </div>
    </div>
@endsection
