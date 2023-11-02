@extends('layouts.admin')

@section('page-title', 'create a comic')

@section('content')

<div class="container py-5">

    <form action="{{route('comics.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Acolyte Eco Battle staff">
            <small id="titleHelper" class="form-text text-muted">Type the title here</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="99.99">
            <small id="priceHelper" class="form-text text-muted">Type the price here</small>

        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Choose file</label>
            <input type="file" class="form-control" name="thumb" id="thumb" placeholder="" aria-describedby="thumb_helper">
            <div id="thumb_helper" class="form-text">Upload an image for the current product</div>
        </div>


        <button type="submit" class="btn btn-primary">
            Save
        </button>


    </form>

</div>


@endsection
