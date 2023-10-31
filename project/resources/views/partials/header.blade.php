<div id="banner">
    <div class="container d-flex justify-content-end py-1">
        <span class="mx-3">
            DC POWER VISA
            <i class="fa-regular fa-registered fa-xs"></i>
        </span>
        <span class="mx-3">
            Additional DC sites
            <i class="fa-solid fa-sort-down"></i>
        </span>
    </div>
</div>

<header id="app_header">
    <div class="d-flex justify-content-between align-items-center py-2">
        <div class="col-3">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
        </div>

        <div style="height: 100%;" class="col d-flex justify-content-end">
            <a class="nav-item nav-link {{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{route('characters')}}">CHARACTERS</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{route('comics')}}">COMICS</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">MOVIES</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{route('tv')}}">TV</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{route('games')}}">GAMES</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{route('collectibles')}}">COLLECTIBLES</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{route('videos')}}">VIDEOS</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{route('fans')}}">FANS</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{route('news')}}">NEWS</a>

            <a class="nav-item nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{route('shop')}}">SHOP</a>
        </div>
    </div>
</header>