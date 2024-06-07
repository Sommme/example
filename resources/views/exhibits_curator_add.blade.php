@extends('layouts.layout')

@section('title', 'Add Exhibit')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <h1>Add Exhibit</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('exhibits_curator_add.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description"><br>
        
        <label for="creation_date">Creation Date:</label><br>
        <input type="date" id="creation_date" name="creation_date"><br>
        
        <label for="photo">Photo URL:</label><br>
        <input type="text" id="photo" name="photo"><br> 

        <button type="submit">Add</button>
    </form>
    
@endsection
