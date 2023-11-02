@extends('layouts.admin')

@section('page-title', 'edit comic')

@section('content')
    <div class="container">

        <h1 class="py-4">Edit Saber number: {{ $comic->id }}</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Acolyte Eco Battle staff" value="{{ $comic->title }}">
                <small id="titleHelper" class="form-text text-muted">Type the title here</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Acolyte is a action movies with..." value="{{ $comic->description }}">
                <small id="descriptionHelper" class="form-text text-muted">Type the description here</small>
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId" placeholder="name of the series" value="{{ $comic->series }}">
                <small id="seriesHelper" class="form-text text-muted">Type the series here</small>
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" value="{{ $comic->sale_date }}">
                <small id="sale_dateHelper" class="form-text text-muted">Type the sale_date here</small>
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="comic book,graphic novel..." value="{{ $comic->type }}">
                <small id="typeHelper" class="form-text text-muted">Type the type here</small>
            </div>
    
            <div class="mb-3">
                <label for="artists" class="form-label">artists</label>
                <input type="text" class="form-control" name="artists" id="artists" aria-describedby="helpId" placeholder="José Luis García-López, Clay Mann..." value="{{ $comic->artists }}">
                <small id="artistsHelper" class="form-text text-muted">Type the artists here</small>
            </div>
    
            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input type="text" class="form-control" name="writers" id="writers" aria-describedby="helpId" placeholder="Dan Abnett,Scott Snyder..." value="{{ $comic->writers }}">
                <small id="writersHelper" class="form-text text-muted">Type the writers here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price"
                    aria-describedby="helpId" placeholder="99.99" value="{{ $comic->price }}">
                <small id="priceHelper" class="form-text text-muted">Type the price here</small>

            </div>

            <div class="d-flex gap-3">
                <div>
                    <img width="200" src="{{$comic->thumb}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Update Cover Image</label>
                    <input type="file" class="form-control" name="thumb" id="thumb"
                        aria-describedby="thumb_helper">
                    <div id="thumb_helper" class="form-text">Upload an image for the current product</div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary my-4">
                Update
            </button>


        </form>

    </div>
@endsection
