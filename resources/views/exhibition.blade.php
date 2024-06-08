@extends('layouts.layout')

@section('title', 'exhibitions')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
@section('content')
<div>
    <div>
        <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="Photo of the exhibit">
        <h2>Exhibition Name 2</h2>
        <p>Address: Example Street, 124</p>
        <p>Ticket price: 500 rub.</p>
        <p>Maximum number of tickets: 100</p>
        <p>Organizer: Ivan Ivanov</p>
        <p>Direction: Contemporary Art</p>
        <p>Date added: 02.01.2024</p>
        <p>Last update: 06.01.2024</p>
    </div>

    <div>
        <a href="#" class="btn">Edit</a>
        <a href="#" class="btn">Delete</a>
    </div>
    
</div>
@endsection
