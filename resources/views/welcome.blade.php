@extends('layouts.layout')

@section('title', 'home')

@section('content')

    <link href="{{ asset('css/image-cover.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css?v=') . time() }}" rel="stylesheet">


    <div class="main-exhibition">
        <div class="cover">
            <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="image">
        </div>
        <h1>Название</h1>
        <p>Статус</p>
        <p>Место проведения</p>
        <p>Место проведения</p>
        <a href="#">Купить билет</a>
    </div>

@endsection
