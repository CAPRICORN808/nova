<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '')</title>
    {{-- ЛОКАЛЬНЫЙ BOOTSTRAP (скачайте и положите в public/css и public/js) --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Логотип" style="height:40px; margin-right:10px;">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <p>анимация а не зависло --></p>
                <div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Вход</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Регистрация</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Кабинет</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('records.create') }}">Создать запись</a></li>
                        @if(auth()->user()->isAdmin())
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Админка</a></li>
                        @endif
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="btn nav-link" type="submit">Выйти</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>