@extends('layouts.layout')

@section('title', 'auth')

@section('content')

    <link href="{{ asset('css/form.css?v=') . time() }}" rel="stylesheet">
    <link href="{{ asset('css/authorization.css?v=') . time() }}" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#auth-tab').click(function() {
                $('#auth-form').show();
                $('#reg-form').hide();
                $('#auth-tab').addClass('choice');
                $('#reg-tab').removeClass('choice');
            });

            $('#reg-tab').click(function() {
                $('#auth-form').hide();
                $('#reg-form').show();
                $('#reg-tab').addClass('choice');
                $('#auth-tab').removeClass('choice');
            });
        });
    </script>

    <div class="content">

        <div class="forms-controlls">
            <div class="form-tap choice" id="auth-tab">
                <p>Authorization</p>
            </div>
            <div class="form-tap" id="reg-tab">
                <p>Registration</p>
            </div>
        </div>

        <form id="auth-form" method="POST" action="/login/confirm_login" enctype="multipart/form-data">
            @csrf

            <div class="form-title">
                <h3>Авторизация</h3>
            </div>

            <div class="inputs-block">

                <div class="input-block">
                    <label for="email">Почта</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="введите почту...">

                    @error('email')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-block">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" placeholder="введите пароль...">

                    @error('password')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

            </div>

            @if ($errors->first('some_errors'))
                <p class="error-text">{{ $errors->first('some_errors') }}</p>
            @endif

            <button type="sybmit">Sign In</button>

        </form>

        <form id="reg-form" method="POST" action="/login/confirm_register" enctype="multipart/form-data"
            style="display:none;">
            @csrf

            <div class="form-title">
                <h3>Регистрация</h3>
            </div>

            <div class="inputs-block">

                <div class="input-block">
                    <label for="role">Кто вы?</label>
                    <select name="role" id="role">
                        <option value="visitor" {{ old('role') == 'visitor' ? 'selected' : '' }}>Посетитель</option>
                        <option value="curator" {{ old('role') == 'curator' ? 'selected' : '' }}>Куратор</option>
                    </select>
                </div>

                <div class="input-block">
                    <label for="name">Имя</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="введите имя...">

                    @error('name')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-block">
                    <label for="email">Почта</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="введите почту...">

                    @error('email')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-block">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" placeholder="введите пароль...">

                    @error('password')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-block">
                    <label for="password_confirmation">Подтверждение пароля</label>
                    <input type="password" name="password_confirmation" placeholder="введите пароль...">

                    @error('password_confirmation')
                        <p class="error-text">{{ $message }}</p>
                    @enderror

                </div>

            </div>

            <button type="sybmit">Зарегистрироваться</button>

        </form>



    </div>

@endsection
