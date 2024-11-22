<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to us an image logo -->
            {{--        <img src="assets/img/logo.png" alt="">--}}
            <h1 class="sitename text-success">DigiWeb Solution.</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active':''}}">Inicio</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active':''}}">Sobre Nosotros</a></li>
                <li><a href="{{ route('services') }}"class="{{ request()->routeIs('services') ? 'active':''}}">Servicios</a></li>
                <li><a href="{{ route('project') }}" class="{{ request()->routeIs('project') ? 'active':''}}">Proyectos</a></li>

                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active':''}}">Contactanos</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
