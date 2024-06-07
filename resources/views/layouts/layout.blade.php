<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="{{ asset('css/clear.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
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
            <a href="/my_tickets" class="">
                tickets
            </a>
            <a href="/bot_settings" class="">
                bot
            </a>

        </div>

        <div class="account-actions">
            @auth
                <div class="user-profile">
                    <p class="pill">ID {{ Auth::user()->id }}</p>
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <a href="/logout" class="o-btn">Sign Out</a>
            @endauth

            @guest
                <a href="/login" class="o-btn">Sign In</a>
            @endguest
        </div>

    </header>

    @yield('content')

    <footer>
        <p>Footer</p>
    </footer>

</body>

</html>
