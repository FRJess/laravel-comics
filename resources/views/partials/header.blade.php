<header>
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC">
    </div>

    <nav>
        <ul>
            <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}"
                    href="{{ route('characters') }}" href="{{ route('home') }}">characters</a></li>
            <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}"
                    href="{{ route('home') }}">comics</a></li>
            <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}"
                    href="{{ route('home') }}">movies</a></li>
            <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}"
                    href="{{ route('home') }}">tv</a></li>
            <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}"
                    href="{{ route('home') }}">games</a></li>
            <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}"
                    href="{{ route('collectibles') }}" href="{{ route('home') }}">collectibles</a></li>
            <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}"
                    href="{{ route('home') }}">videos</a></li>
            <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}"
                    href="{{ route('home') }}">fans</a></li>
            <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}"
                    href="{{ route('home') }}">news</a></li>
            <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}"
                    href="{{ route('home') }}">shop</a></li>
        </ul>
    </nav>
</header>
