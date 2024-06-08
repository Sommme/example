@extends('layouts.layout')

@section('title', 'welcome')

<link href="{{ asset('css/image-cover.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/welcome.css?v=') . time() }}" rel="stylesheet">


@section('content')

    <div class="content">
        @isset($exhibitions && $exhibitions->count() > 0)
            @php
                $mainExhibition = $exhibitions->shift();
            @endphp

            <div class="main-exhibition">
                <div class="cover">
                    <img src="{{ Storage::url($mainExhibition->photo) }}" alt="Exhibition photo">
                    <div class="overlay"></div>
                    <div class="main-exhibition-text">
                        <h2>{{ $mainExhibition->name }}</h2>
                        <div class="details">
                            <p>{{ $mainExhibition->schedules->first()->status->name }}</p>
                            <p>{{ $mainExhibition->schedules->first()->start_datetime }} ·
                                {{ $mainExhibition->schedules->first()->end_datetime }}</p>
                            <p>{{ $mainExhibition->address }}</p>
                        </div>
                        <a href="/exhibition/{{ $mainExhibition->id }}" class="btn">Buy a Ticket</a>
                    </div>
                </div>
            </div>
        @endisset
        {{-- <div class="main-exhibition">
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
        </div> --}}

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
        </div>
    </div>

@endsection
