
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="contact">
    <h2>Get in Touch</h2>
    <p>Based in [Your Location]</p>
    <div class="social-icons">
  <p><a href="https://facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>facebook</p>
  <a href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
  <a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</div>

    <div class="services">
      <h3>Services</h3>
      <ul>
        <li>Full Stack Development</li>
        <li>Web Application Development</li>
        <li>API Development</li>
      </ul>
    </div>
  </section>
@endsection