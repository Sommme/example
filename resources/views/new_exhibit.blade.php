@extends('layouts.layout')

@section('title', 'new exhibit')
<link href="{{ asset('css/form.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
<link href="{{ asset('css/new_exhibit.css?v=') . time() }}" rel="stylesheet">
@section('content')

    <div class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('new_exhibit.create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-title">
                <h3>New Exhibit</h3>
            </div>

            <div class="inputs-block">

                <div class="double-input">
                    <div class="input-block">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">

                        @error('name')
                            <p class="error-text">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="input-block">
                        <label for="author">Author</label>
                        <input type="text" id="author" name="author">

                        @error('author')
                            <p class="error-text">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="input-block">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter the text"></textarea>
                    {{-- <input type="text" id="description" name="description"> --}}

                    @error('description')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-block">
                    <label for="exhibit_date">Exhibit date</label>
                    <input type="date" id="exhibit_date" name="exhibit_date">

                    @error('exhibit_date')
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

            </div>

            @if ($errors->first('some_errors'))
                <p class="error-text">{{ $errors->first('some_errors') }}</p>
            @endif

            <button type="submit">Create Exhibit</button>
        </form>

    </div>

@endsection
