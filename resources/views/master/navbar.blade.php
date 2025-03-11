<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="d-none d-md-flex align-items-center">
          <i class="bi bi-clock me-1"></i> Monday - Saturday, 8AM to 10PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone me-1"></i> Call Center (031) 7509317
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <img src="img/rs.png" alt="">
          <!-- Uncomment the line below if you also wish to use a text logo -->
          <!-- <h1 class="sitename">Medicio</h1>  -->
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('home.index')}}" class="active">Home</a></li>
            <li><a href="{{route('home.index','#about')}}">Tentang Kami</a></li>
            <li><a href="{{route('home.index','#services')}}">Layanan</a></li>
            <li><a href="{{route('home.index','#jadwaldokter')}}">Jadwal Poli</a></li>
            <li><a href="{{route('home.index','#doctors')}}">Dokter</a></li>
            <li><a href="{{route('home.index','#contact')}}">Hubungi Kami</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" href="#appointment">Pendaftaran Online</a>

      </div>

    </div>

</header>
