@include('frontend.layouts.head')

@include('frontend.layouts.menu')

<!-- <section id="home" class="intro intro-bg bg-overlay parallax"> -->
    
    
    @yield('content')

    {{-- {{ (request()->is('admin/cities')) ? 'active' : '' }} --}}
    @if (!request()->is('login') && !request()->is('register'))
        @include('frontend.layouts.footer')
    @endif
    
    
</body>
</html>

@yield('add-js')