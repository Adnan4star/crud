@extends("layouts.main")
@push('title')
    <title>Home</title>
@endpush
@section('main-section')

   <!-- Menu Navigation Bar -->
    <nav class="menu">
        <a href="{{url('/')}}">HOME</a>
        <a href="{{url('/courses')}}">COURSES</a>
        <a href="{{url('/about')}}">ABOUT</a>
        <a href="{{url('customer/view')}}">
            VIEW CUSTOMERS
        </a>
        <div class="menu-log">
            <a href="{{URL('/register')}}">REGISTER</a>
        </div>
    </nav>

    <!-- Body section -->
    <main class="body_sec">
        <section id="Content">
            <h3>Welcome to home page</h3>
        </section>
    </main>
@endsection