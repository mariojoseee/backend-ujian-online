<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link text-decoration-none text-center bg-cyan text-white">
    <span class="brand-text text-white">Sistem Ujian Online</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if (Str::length(Auth::guard('admin')->user()) > 0)
          @if (Auth::guard('admin')->user()->level = 'admin')
            <li class="nav-item">
              <a href="/dashboard-admin" class="nav-link">
                <i class="fas fa-tachometer-alt nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin-smansabar" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/guru-smansabar" class="nav-link">
                <i class="fas fa-chalkboard-teacher nav-icon"></i>
                <p>Guru</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/siswa-smansabar" class="nav-link">
                <i class="fas fa-user-graduate nav-icon"></i>
                <p>Siswa</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/jurusan" class="nav-link">
                <i class="fas fa-graduation-cap nav-icon"></i>
                <p>Jurusan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/angkatan" class="nav-link">
                <i class="fas fa-calendar-alt nav-icon"></i>
                <p>Angkatan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/kelaz" class="nav-link">
                <i class="fas fa-door-closed nav-icon"></i>
                <p>Kelas</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/mapel" class="nav-link">
                <i class="fas fa-book nav-icon"></i>
                <p>Mata Pelajaran</p>
              </a>
            </li>
          @endif
        @endif

        @if (Str::length(Auth::guard('guru')->user()) > 0)
          @if (Auth::guard('guru')->user()->level = 'guru')
            <li class="nav-item">
              <a href="/dashboard-guru" class="nav-link">
                <i class="fas fa-tachometer-alt nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/ujian" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Ujian</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/laporan" class="nav-link">
                <i class="fas fa-flag nav-icon"></i>
                <p>Laporan</p>
              </a>
            </li>
          @endif
        @endif

        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
