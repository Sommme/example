@extends('layouts.layout')

@section('title', 'Add Exhibition')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <h1>Add Exhibition</h1>
    <form action="{{url('/new_exhibition/create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="ticket_price">Ticket Price:</label><br>
        <input type="number" id="ticket_price" name="ticket_price"><br>

        <label for="max_tickets">Max Tickets:</label><br>
        <input type="number" id="max_tickets" name="max_tickets"><br>

        <label for="photo">Photo:</label><br>
        <input type="file" id="photo" name="photo"><br>

        <label for="direction">Direction</label><br>
        <select name="direction" id="direction">
            @foreach ($directions as $direction)
                <option value="{{$direction['id']}}">{{$direction['name']}}</option>
            @endforeach
        </select><br><br>

        <label for="exhibits">Exhibits</label><br>
        <select name="exhibits[]" id="exhibits" multiple>
            @foreach ($exhibits as $exhbit)
                <option value="{{$exhbit['id']}}">{{$exhbit['name']}}</option>
            @endforeach
        </select><br><br>

        <div id="dates">
            <div class="date">
                <label for="start_date">Start Date and Time:</label><br>
                <input type="datetime-local" id="start_date" name="start_date[]"><br>

                <label for="end_date">End Date and Time:</label><br>
                <input type="datetime-local" id="end_date" name="end_date[]"><br>
            </div>
        </div>

        <button type="submit">Add</button>
    </form>
@endsection
