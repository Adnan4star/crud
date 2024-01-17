@include('layouts.header')

<div class="container">
    {{--yield is used to display content section--}}
    @yield('main-section') 
</div>

@include('layouts.footer')