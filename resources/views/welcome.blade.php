@extends('layouts.layout')

@section('title', 'welcome')

<link href="{{ asset('css/image-cover.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/welcome.css?v=') . time() }}" rel="stylesheet">


@section('content')

    <div class="content">
        @isset($schedules)
            @php
                $mainSchedule = $schedules->shift();
            @endphp

            @if ($mainSchedule)
                <div class="main-exhibition">
                    <div class="cover">
                        <img src="{{ Storage::url($mainSchedule->exhibition->photo) }}" alt="Exhibition photo">
                        <div class="overlay"></div>
                        <div class="main-exhibition-text">
                            <h2>{{ $mainSchedule->exhibition->name }}</h2>
                            <div class="details">
                                <p>{{ $mainSchedule->status->name }}</p>
                                <p>{{ $mainSchedule->start_datetime }} ·
                                    {{ $mainSchedule->end_datetime }}</p>
                                <p>{{ $mainSchedule->exhibition->address }}</p>
                            </div>
                            <a href="/exhibition/{{ $mainSchedule->exhibition->id }}" class="btn">Buy a Ticket</a>
                        </div>

                    </div>
                </div>
            @endif

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

            @if ($schedules && $schedules->count() > 0)

                <div class="controlls">
                    @foreach ($directions as $direction)
                        <div class="filter">
                            {{ $direction->name }}
                        </div>
                    @endforeach

                    <a href="/exhibitions" class="btn">see all</a>
                </div>

                <div class="grid">
                    @foreach ($schedules as $schedule)
                        <a href="/exhibition/{{ $schedule->exhibition->id }}" class="exhibition-card">
                            <div class="cover">
                                <img src="{{ Storage::url($schedule->exhibition->photo) }}" alt="Exhibition photo">
                                <div class="overlay">
                                    <div class="tags">{{ $schedule->status->name }}</div>
                                    <h3>{{ $schedule->exhibition->name }}</h3>
                                    <div class="details">
                                        <p>{{ $schedule->start_datetime }} · {{ $schedule->end_datetime }}</p>
                                        <p>{{ $schedule->exhibition->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p>Not founded</p>

            @endif

            {{-- <div class="grid">
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

            </div> --}}

        </div>
    </div>

@endsection
