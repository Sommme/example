@extends('layouts.layout')

@section('title', 'contacts')

@section('content')
    <link href="{{ asset('css/contact.css?v=') . time() }}" rel="stylesheet">

    <div class="contacts">
        <div class="contact-section">
            <h2>CONTACTS</h2>
            <div class="contact-details">
                <span>+7 (495) 957 07 27</span>
                <span>Tue, Wed, Sun: 10:00 AM — 6:00 PM</span>
            </div>
            <div class="contact-details">
                <span>+7 (495) 957 07 00</span>
                <span>Thu, Fri, Sat: 10:00 AM — 9:00 PM</span>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <h2>FEEDBACK</h2>
        <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Question:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">SUBMIT</button>
            </form>
    </div>
@endsection
