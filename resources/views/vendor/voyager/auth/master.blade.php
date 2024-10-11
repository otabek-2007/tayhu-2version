<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="none" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Admin login">
<title>@yield('title', 'Admin - ' . Voyager::setting('admin.title'))</title>

<!-- Stylesheet Links -->
<link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">

@if (__('voyager::generic.is_rtl') == 'true')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
@endif

@yield('pre_css')

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #e1f5fe, #fff);
        font-family: 'Open Sans', sans-serif;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    .login-container p {
        font-size: 1.5rem;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
    }
    .form-group label {
        font-weight: 500;
    }
    .form-control {
        border: 4px solid black;
        border-radius: 4px;
        padding: 10px;
        transition: border-color 0.3s;
    }
    .form-control:focus {
        border-color: #66afe9;
        box-shadow: 0 0 5px rgba(102, 175, 233, .5);
    }
    .login-button {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px;
        font-size: 1.1rem;
        transition: background-color 0.3s;
    }
    .login-button:hover {
        background-color: #0056b3;
    }
    .alert {
        margin-top: 20px;
    }
    body.login .login-container {
        margin-top: -150px;
        padding: 30px;
        position: absolute;
        top: 50%;
        width: 44% !important;
        z-index: 10;
    }
</style>
</head>
<body class="login">
<div class="login-container">

    <p>Войдите ниже:</p>

    <form action="{{ route('voyager.login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Электронная почта</label>
            <input type="text" name="email" value="{{ old('email') }}" placeholder="Электронная почта" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Пароль" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember" id="remember" value="1">
            <label for="remember" class="remember-me-text">Запомнить меня</label>
        </div>

        <button type="submit" class="btn btn-block login-button">
            <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
            <span class="signin">Авторизоваться</span>
        </button>
    </form>

    @if(!$errors->isEmpty())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

@yield('post_js')
</body> 
</html>
