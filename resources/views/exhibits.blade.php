@extends('layouts.layout')

@section('title', 'Exhibits')
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
@section('content')
    <div class="content">
        <div>
            <a href="/exhibits_curator_add" class="btn">Add Exhibit</a>
        </div>
        <div>
            {{-- <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="Photo of the exhibit"> --}}
            <h2>Name of the Exhibit</h2>
            <p>Author: Ivan Ivanov</p>
            <p>Description: Brief description of the exhibit...</p>
            <p>Creation Date: January 1, 1900</p>
        </div>

        <div>
            <a href="#" class="btn">Edit</a>
            <a href="#" class="btn">Delete</a>
        </div>

        <div>
            {{-- <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="Photo of the exhibit"> --}}
            <h2>Name of the Exhibit</h2>
            <p>Author: Ivan Ivanov</p>
            <p>Description: Brief description of the exhibit...</p>
            <p>Creation Date: January 1, 1900</p>
        </div>

        <div>
            <a href="#" class="btn">Edit</a>
            <a href="#" class="btn">Delete</a>
        </div>

    </div>
@endsection
