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
                    placeholder="Acolyte Eco Battle staff" value="{{ old('title', $comic->title) }}">
                <small id="titleHelper" class="form-text text-muted">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Type the title here

                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                    placeholder="Acolyte is a action movies with..." value="{{ old('description', $comic->description) }}">
                <small id="descriptionHelper" class="form-text text-muted">Type the description here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price"
                    aria-describedby="helpId" placeholder="99.99" value="{{ old('price', $comic->price) }}">
                <small id="priceHelper" class="form-text text-muted">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Type the price here

                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </small>

            </div>

            <div class="d-flex gap-3">
                <div>
                    <img width="200" src="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Update Cover Image</label>
                    <input type="file" class="form-control" name="thumb" id="thumb"
                        aria-describedby="thumb_helper">
                    <div id="thumb_helper" class="form-text">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        Upload an image for the current product

                        @error('thumb')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary my-4">
                Update
            </button>
        </form>

        <div style="margin: 3rem 0" class="form-text">
            <i class="fa-solid fa-circle-exclamation"></i>=required field
        </div>

    </div>
@endsection
