@include('frontend.layouts.head')

@include('frontend.layouts.menu')

<!-- <section id="home" class="intro intro-bg bg-overlay parallax"> -->
    
    
    @yield('content')

    @include('frontend.layouts.footer')
    
    
</body>
</html>

@yield('add-js')