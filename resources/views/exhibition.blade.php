@extends('layouts.layout')

@section('title', 'exhibition')
<link href="{{ asset('css/image-cover.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/exhibition.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <div class="content">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.buy').click(function(e) {
                    e.preventDefault();
                    $('#ticketForm').show();
                });

                $('#closeForm').click(function() {
                    $('#ticketForm').hide();
                });
            });
        </script>

        <div class="ex-main">
            <div class="cover">
                <img src="{{ Storage::url($schedule->exhibition->photo) }}" alt="Photo of the exhibit">
            </div>
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

        @auth
            <div class="actions">
                <a href="#" class="btn  buy">Buy Ticket {{ $schedule->exhibition->ticket_price }}₽</a>
                @if (auth()->user()->hasRole('visitor'))
                    a href="#" class="btn  buy">Buy Ticket {{ $schedule->exhibition->ticket_price }}₽</a>
                @elseif (auth()->user()->hasRole('curator'))
                    <a href="#" class="btn">Delete</a>
                @endif
            </div>

        @endauth

        <div id="ticketForm" style="display: none;">
            <form action="{{ route('buy_ticket') }}" method="POST">
                @csrf
                <h2>{{ $schedule->exhibition->name }}</h2>
                <input type="hidden" name="exhibition_id" value="{{ $schedule->exhibition->id }}">
                <label for="quantity">Count tickets</label>
                <input type="number" id="quantity" name="quantity" min="1"
                    max="{{ $schedule->exhibition->remaining_tickets }}">
                <button type="submit">Buy</button>
                <button type="button" id="closeForm">Close</button>
            </form>
        </div>

    </div>
@endsection
