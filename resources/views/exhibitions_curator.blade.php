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

        @isset($exhibitions)
            <div class="exhibitions">
                @foreach ($exhibitions as $exhibition)
                    <div class="exhibition">
                        <div class="cover">
                            <img src="{{ Storage::url($exhibition->photo) }}" alt="Exhibition photo">
                        </div>
                        <h3>{{ $exhibition->name }}</h3>
                        <p>Address: {{ $exhibition->address }}</p>
                        <p>Ticket price: {{ $exhibition->ticket_price }} rub.</p>
                        <p>Maximum number of tickets: {{ $exhibition->max_tickets }}</p>
                        <p>Remaining tickets: {{ $exhibition->remaining_tickets }}</p>
                        <p>Organizer: {{ $exhibition->user->name }}</p>
                        <p>Direction: {{ $exhibition->direction->name }}</p>

                        <div>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <form action="{{ route('exhibition.delete', $exhibition->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{ $exhibitions->links() }}
            </div>
        @endisset
    </div>
@endsection
