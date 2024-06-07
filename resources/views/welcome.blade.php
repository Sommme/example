@extends('layouts.layout')

@section('title', 'welcome')

<link href="{{ asset('css/image-cover.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/welcome.css?v=') . time() }}" rel="stylesheet">


@section('content')

    <div class="content">
        <div class="main-exhibition">
            <div class="cover">
                <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="image">

                <div class="overlay"></div>

                <div class="main-exhibition-text">
                    <h2>Wild mint</h2>

                    <div class="details">
                        <p>now</p>
                        <p>06/06 · 4 PM</p>
                        <p>Sevastopol · SevSu</p>
                    </div>

                    <a href="#" class="btn">Buy a Ticket</a>
                </div>
            </div>
        </div>

        <div class="exhibitions">
            <h3>future exhibitions</h3>

            <div class="controlls">
                <div class="filters">
                    <div class="filter">
                        Art
                    </div>
                    <div class="filter">
                        Photography
                    </div>
                    <div class="filter">
                        Science
                    </div>
                    <div class="filter">
                        Technology
                    </div>
                    <div class="filter">
                        Historical
                    </div>
                </div>

                <a href="/exhibitions" class="btn">see all</a>
            </div>

            <div class="grid">
                <a href="#" class="exhibition-card">
                    <div class="cover">
                        <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="tags">soon</div>
                            <h3>Wild mint</h3>
                            <div class="details">
                                <p>06/06 · 4 PM</p>
                                <p>Sevastopol · SevSu</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="exhibition-card">
                    <div class="cover">
                        <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="tags">soon</div>
                            <h3>Wild mint</h3>
                            <div class="details">
                                <p>06/06 · 4 PM</p>
                                <p>Sevastopol · SevSu</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="exhibition-card">
                    <div class="cover">
                        <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="tags">soon</div>
                            <h3>Wild mint</h3>
                            <div class="details">
                                <p>06/06 · 4 PM</p>
                                <p>Sevastopol · SevSu</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="pagination">
                <div class="page swipe">назад</div>
                <div class="page">1</div>
                <div class="page">2</div>
                <div class="page">...</div>
                <div class="page">10</div>
                <div class="page swipe">вперед</div>
            </div>
        </div>
    </div>

@endsection
