  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home.index')}}" class="brand-link">
      <img src="{{ url('/img/rs.png') }}" alt="Gambar RS" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RS Randegan Sari</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/img/rs.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('home.index')}}" class="d-block">RSRH</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('berita.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('jadwal.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Jadwal Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Profil RS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('listpoli.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                List Poli Daftar Online
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('dokter.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                List Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('sliders.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Slide Background
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>