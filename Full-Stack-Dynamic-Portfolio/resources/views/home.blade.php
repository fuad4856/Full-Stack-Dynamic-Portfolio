@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div>
        <h1>Hello, I am </h1>
        <h2>Md. Fuad Hossain</h2>
        <p><b>Full Stack Developer</b></p>
        <p><i class="fas fa-envelope"></i> Email: fuad15-4856@email.com</p>
        <p><i class="fas fa-phone"></i> Phone: 01531349694</p>
        <a href="{{ route('auth.login') }}" class="login-btn">Login</a>
    </div>
    <img src="https://avatars.githubusercontent.com/u/196004051?v=4" alt="Profile Picture">
</section>
@endsection
