@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div>
        <h1>Hello, I am </h1>
        <h2>Fuad</h2>
        <p><b>Full Stack Developer</b></p>
        <p><i class="fas fa-envelope"></i> Email: your.email@example.com</p>
        <p><i class="fas fa-phone"></i> Phone: +1-XXX-XXX-XXXX</p>
        <a href="{{ route('auth.login') }}" class="login-btn">Login</a>
    </div>
    <img src="assets\images\profile.jpg" alt="Profile Picture">
</section>
@endsection
