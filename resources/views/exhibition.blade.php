@extends('layouts.layout')

@section('title', 'exhibitions')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/exhibition.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <div class="content">
        <div class="ex-main">
            <img src="{{ Storage::url($schedule->exhibition->photo) }}" alt="Photo of the exhibit">
            <div class="text">
                <h2>{{ $schedule->exhibition->name }}</h2>
                <p>Address: {{ $schedule->exhibition->address }}</p>
                <p>Ticket price: {{ $schedule->exhibition->ticket_price }} rub.</p>
                <p>Maximum number of tickets: {{ $schedule->exhibition->max_tickets }}</p>
                <p>Organizer: {{ $schedule->exhibition->user->name }}</p>
                <p>Direction: {{ $schedule->exhibition->direction->name }}</p>
                <p>Date added: {{ $schedule->exhibition->created_at }}</p>
                <p>Last update: {{ $schedule->exhibition->updated_at }}</p>
            </div>
        </div>

        <div>
            <a href="#" class="btn">Edit</a>
            <a href="#" class="btn">Delete</a>
        </div>

    </div>
@endsection
