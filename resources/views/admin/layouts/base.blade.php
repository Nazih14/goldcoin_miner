@include('admin.layouts.meta')
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    
    
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="../index.html">
            <img class="navbar-brand-dark" src="{{url('adminvolt/assets/img/brand/light.svg')}}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{url('adminvolt/assets/img/brand/dark.svg')}}" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    @if (request()->user()->role=='admin')
        @include('admin.layouts.sidebar-menu-admin')
    @else
        @include('admin.layouts.sidebar-menu-member')
    @endif
    
    <main class="content">
        @include('admin.layouts.navbar')
            
        @yield('content')

        @include('admin.layouts.footer-content')
    </main>

@include('admin.layouts.footer-js')
