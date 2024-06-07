@extends('layouts.layout')

@section('title', 'Notification')
<link href="{{ asset('css/contact.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <div class="left">
        <div class="bot-info">
            <h1>Bot Connection</h1>
            <p>Follow the link and start a dialogue by copying your profile id:</p>
            <h2>@ExampleBot</h2>
            <p>This bot notifies you 20 minutes before the exhibition and performs other useful functions.</p>
            <button onclick="#" class="btn">Go</button>

        </div>
    </div>
    <div class="right image">
        <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="Фото">
    </div>
@endsection
