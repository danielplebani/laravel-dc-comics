@extends('layouts.app')

@section('content')
    <main id="app_main">

        <section id="slider">
            <div class="current_series">
                <button><strong>CURRENT SERIES</strong></button>
            </div>

            <div class="films pt-5 pb-3 d-flex flex-column">
                <div class="container d-flex flex-wrap justify-content-around">

                    @foreach ($comics as $comic)
                        <div class="product">
                            <a href="{{Route('comic')}}"><img src="{{$comic->thumb}}"></a>
                            <a>
                                <p>{{$comic->title}}</p>
                            </a>
                        </div>
                    @endforeach


                    <button><strong>LOAD MORE</strong></button>
                </div>
            </div>
        </section>

        <section id="main_card" class="py-4">
            <div class="d-flex align-items-center">
                <div class="col d-flex justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="me-2">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="me-2">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="me-2">
                    <span>SUBSCRIPTION</span>
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="me-2">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="me-2">
                    <span>DC POWER VISA</span>
                </div>
            </div>


        </section>
    </main>
@endsection
