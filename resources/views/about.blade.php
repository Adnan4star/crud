@extends('layouts.main')
@push('title')
    <title>About</title>
@endpush
@section('main-section')

   <!-- Menu Navigation Bar -->
   <nav class="menu">
    <a href="#home">HOME</a>
    <a href="#news">NEWS</a>
    <a href="#notification">
        NOTIFICATIONS
    </a>
    <div class="menu-log">
        <a href="#login">LOGIN</a>
    </div>
    </nav>

    <!-- Body section -->
    <main class="body_sec">
        <section id="Content">
            <h3>Welcome to about page</h3>
        </section>
    </main>
@endsection
