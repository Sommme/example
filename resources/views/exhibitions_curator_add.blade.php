@extends('layouts.layout')

@section('title', 'Add Exhibition')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/form.css?v=') . time() }}" rel="stylesheet">

@section('content')

    <div class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <form action="/exhibitions_curator_add" method="POST" style="display:inline;">
        @csrf

        <div class = "form-title">
            <h3>New Exhibition</h3>
        </div>

        <br>
         <div class = "input-block">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            @error('name')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>


        <div class="input-block">
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address"><br>
            @error('address')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="input-block">
            <label for="ticket_price">Ticket Price:</label><br>
            <input type="number" id="ticket_price" name="ticket_price"><br>
            @error('ticket_price')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>
        

        <div class="input-block">
            <label for="max_tickets">Max Tickets:</label><br>
            <input type="number" id="max_tickets" name="max_tickets"><br>
            @error('max_tickets')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="input-block">
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo" accept=".png, .jpg, .jpeg" required>
            @error('photo')
                <p class="error-text">{{ $message }}</p>
            @enderror

        </div>
    
        <div id="dates">
            <div class="date"><br>
                <label for="start_date">Start Date and Time:</label><br>
                <input type="datetime-local" id="start_date" name="start_date[]"><br>
        
                <br><label for="end_date">End Date and Time:</label><br>
                <input type="datetime-local" id="end_date" name="end_date[]"><br>
            </div>
        </div>
        <br>
        <button type="button" id="add_date">Add Another Date</button><br>
        @if ($errors->first('some_errors'))
                <p class="error-text">{{ $errors->first('some_errors') }}</p>
        @endif
        <br>
        <button type="submit">Create Exhibition</button>
    </form>
    </div>




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
