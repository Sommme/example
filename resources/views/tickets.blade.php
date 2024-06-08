@extends('layouts.layout')

@section('title', 'tickets')

@section('content')

    <div class="content">
        <h2>Tickets</h2>
        @if ($tickets->isEmpty())
            <p>У вас пока нет билетов.</p>
        @else
            <div class="tickets">
                @foreach ($tickets as $ticket)
                    <div class="ticket">
                        <h2>{{ $ticket->exhibition->name }}</h2>
                        <p>Количество билетов: {{ $ticket->quantity }}</p>
                        <p>Дата покупки: {{ $ticket->created_at }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>


@endsection
