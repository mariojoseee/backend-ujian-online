<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-cyan">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-slide="true" href="#" role="button">
        <p class="text-white">SMAN 1 BANJAR &nbsp;—&nbsp;
          @if (Str::length(Auth::guard('admin')->user()) > 0)
            @if (Str::length(Auth::guard('admin')->user()->nama) > 0)
              {{ Auth::guard('admin')->user()->nama }}
            @else
              Lengkapi data diri anda !
            @endif
          @elseif (Str::length(Auth::guard('guru')->user()) > 0)
            @if (Str::length(Auth::guard('guru')->user()->nama) > 0)
              {{ Auth::guard('guru')->user()->nama }}
            @else
              Lengkapi data diri anda !
            @endif
          @endif
        </p>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
