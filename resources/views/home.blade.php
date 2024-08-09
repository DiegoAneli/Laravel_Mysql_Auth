<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Ciao, {{ Auth::user()->name }}!</h1>
    <p>Benvenuto nella tua area personale.</p>
    <div id="app">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <a href="{{ route('dashboard.overview') }}">Panoramica</a>
            <a href="{{ route('dashboard.profile') }}">Profilo</a>
            <a href="{{ route('dashboard.settings') }}">Impostazioni</a>
            <a href="{{ route('dashboard.support') }}">Supporto</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>
    <p><a href="{{ route('private') }}">Vai alla tua area privata</a></p>
    <p><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></p>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
