@extends('layouts.layout')

@section('title', 'exhibitions')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/exhibitions_curator.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <div class="content">
        <div class="title-block">
            <h1>Exhibitions</h1>
            <a href="/exhibitions_curator_add" class="btn">Add Exhibition</a>
        </div>

        @isset($schedules)
            <div class="exhibitions">
                @foreach ($schedules as $schedule)
                    <a href="/exhibition/{{ $schedule->exhibition->id }}" class="exhibition">
                        <div class="cover">
                            <img src="{{ Storage::url($schedule->exhibition->photo) }}" alt="Exhibition photo">
                        </div>

                        <h3>{{ $schedule->exhibition->name }}</h3>
                        <p>Address: {{ $schedule->exhibition->address }}</p>
                        <p>Ticket price: {{ $schedule->exhibition->ticket_price }} rub.</p>
                        <p>Maximum number of tickets: {{ $schedule->exhibition->max_tickets }}</p>
                        <p>Remaining tickets: {{ $schedule->exhibition->remaining_tickets }}</p>
                        <p>Organizer: {{ $schedule->exhibition->user->name }}</p>
                        <p>Direction: {{ $schedule->exhibition->direction->name }}</p>

                        <div>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <form action="{{ route('exhibition.delete', $schedule->exhibition->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </a>
                @endforeach
                {{ $schedules->links() }}
            </div>
        @endisset
    </div>
@endsection
