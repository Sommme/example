@extends('layouts.layout')

@section('title', 'Add Exhibition')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <h1>Add Exhibition</h1>
    <form action="/exhibitions_curator_add" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        
        <label for="ticket_price">Ticket Price:</label><br>
        <input type="number" id="ticket_price" name="ticket_price"><br>
        
        <label for="max_tickets">Max Tickets:</label><br>
        <input type="number" id="max_tickets" name="max_tickets"><br>
        
        <label for="photo">Photo URL:</label><br>
        <input type="text" id="photo" name="photo"><br>
    
        <div id="dates">
            <div class="date">
                <label for="start_date">Start Date and Time:</label><br>
                <input type="datetime-local" id="start_date" name="start_date[]"><br>
        
                <label for="end_date">End Date and Time:</label><br>
                <input type="datetime-local" id="end_date" name="end_date[]"><br>
            </div>
        </div>
    
        <button type="button" id="add_date">Add Another Date</button>
        <br>
        
        <button type="submit">Add</button>
    </form>
    
    <script>
        document.getElementById("add_date").addEventListener("click", function() {
            var datesDiv = document.getElementById("dates");
            var newDateDiv = document.createElement("div");
            newDateDiv.classList.add("date");
            newDateDiv.innerHTML = '<label for="start_date">Start Date and Time:</label><br>' +
                                   '<input type="datetime-local" name="start_date[]"><br>' +
                                   '<label for="end_date">End Date and Time:</label><br>' +
                                   '<input type="datetime-local" name="end_date[]"><br>';
            datesDiv.appendChild(newDateDiv);
        });
    </script>
@endsection
