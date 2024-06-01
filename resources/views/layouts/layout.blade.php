<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="{{ asset('css/clear.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/common.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/header.css?v=') . time() }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
            </a>
        </div>

        <div class="menu">
            <a href="/" class="">
                home
            </a>
            <a href="/exhibitions" class="">
                exhibitions
            </a>
            <a href="/exhibits" class="">
                exhibits
            </a>
            <a href="/contacts" class="">
                contacts
            </a>
        </div>

        <div class="account-actions">
            <a href="/authorization" class="">
                sign in
            </a>
        </div>

        {{-- <div class="menu">
            @auth
                @if (auth()->user()->hasRole(''))
                    <a href="/welcome" class="">
                        home
                    </a>
                    <a href="/exhibitions" class="">
                        exhibitions
                    </a>
                @elseif(auth()->user()->hasRole(''))
                    <a href="/exhibits" class="">
                        exhibits
                    </a>
                    <a href="/contacts" class="">
                        contacts
                    </a>
                @endif
            @endauth

            @guest
                <a href="/login" class="">войти</a>
            @endguest
        </div> --}}
    </header>

    @yield('content')

    <footer>
        {{-- <div class="site-data">
            <p>© 2024 Некоммерческий проект «Агрегатор ваканнсий»</p>
            <p>design by <span>Vladislav Melnichuk</span></p>
        </div> --}}
    </footer>

</body>

</html>
