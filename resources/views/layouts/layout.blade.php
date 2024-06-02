<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="{{ asset('css/clear.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/common.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/header.css?v=') . time() }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&family=Unbounded:wght@200..900"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <a class="logo" href="/">
            <img src="{{ asset('assets/logo/logo.svg') }}" alt="logo">
            museum
        </a>

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

        <a class="account-actions" href="/authorization">
            sign in
        </a>

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
