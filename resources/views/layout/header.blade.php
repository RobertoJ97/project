<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to us an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename text-success">Conect360.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Inicio</a></li>
          <li><a href="{{ route('about') }}">Sobre Nosotros</a></li>
          <li><a href="{{ route('services') }}">Servicios</a></li>
          <li><a href="{{ route('project') }}">Proyectos</a></li>
          <li><a href="portfolio.html">Marketing Digital</a></li>
          <li><a href="{{ route('contact') }}">Contactanos</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
