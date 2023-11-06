@extends('layouts.admin')

@section('page-title', 'create a comic')

@section('content')

    <div class="container py-5">

        <form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            {{-- @if ($errors->any())
                <div class="alert alert-danger p-0">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Acolyte Eco Battle staff" value="{{ old('title') }}">
                <small id="titleHelper" class="form-text text-muted">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Type the title here

                    @error('title')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                    placeholder="Acolyte is a action movies with..." value="{{ old('description') }}">
                <small id="descriptionHelper" class="form-text text-muted">Type the description here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price"
                    aria-describedby="helpId" placeholder="99.99" value="{{ old('price') }}">
                <small id="priceHelper" class="form-text text-muted">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Type the price here

                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Choose file</label>
                <input type="file" class="form-control" name="thumb" id="thumb" placeholder=""
                    aria-describedby="thumb_helper">
                <div id="thumb_helper" class="form-text">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Upload an image for the current product

                    @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </form>

        <div style="margin-top: 3rem" class="form-text">
            <i class="fa-solid fa-circle-exclamation"></i>=required field
        </div>

    </div>


@endsection
