@extends('layouts.layout')

@section('title', 'bot settings')

@section('content')
    <link href="{{ asset('css/image-cover.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/custom-btn.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/bot_settings.css?v=') . time() }}" rel="stylesheet">

    <div class="content">
        <div class="double-block">
            <div class="bot-info">
                <h2>Bot Connection</h2>
                <h3>🤖 Notifications</h3>
                <p>Follow the link and start a dialogue by copying your profile id <br>This bot notifies you 20 minutes
                    before the exhibition and performs other useful functions.</p>
                @if (auth()->user()->chat_id)
                    <div class="connected">
                        You have already enabled bot notifications
                    </div>
                @else
                    <div class="actions">
                        <a href="https://t.me/museum_notice_bot" class="main-link"
                            target="_blank">https://t.me/museum_notice_bot</a>
                        <a href="https://t.me/museum_notice_bot" class="btn" target="_blank">Connect</a>
                    </div>
                @endif
            </div>

            <div class="cover">
                <img src="{{ asset('assets/images/exhibition1.jpg') }}" alt="Фото">
            </div>
        </div>
    </div>

@endsection
