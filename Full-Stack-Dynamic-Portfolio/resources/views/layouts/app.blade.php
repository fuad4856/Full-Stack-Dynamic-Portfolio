<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Md. Fuad Hossain</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <header>
    <div class="logo">
    <a href="{{ route('home') }}">
        <img src="https://avatars.githubusercontent.com/u/196004051?v=4" alt="Logo" style="height: 100px;">
    </a>
</div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/services') }}">Services</a>
            <a href="{{ url('/portfolio') }}">Portfolio</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>Copyright © Fuad | Md. Fuad Hossain</p>
    </footer>
</body>
</html>
