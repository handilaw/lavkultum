  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{{ url('/') }}}">Kultum Santri</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/kultum') }}"><i class="fas fa-home"></i>&nbsp;Kultum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-users"></i>&nbsp;Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-address-book"></i>&nbsp;Kontak</a>
          </li>
          <div class="topbar-divider d-none d-sm-block"></div>
          @if (Auth::check())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;
              {{ Auth::user()->name }}
              <img class="img-profile rounded-circle" src="{{ asset('img/avatar/'.Auth::user()->avatar) }}"> 
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ route('kultum.create') }}"><i class="fas fa-plus-circle"></i>&nbsp;Buat Kultum</a>
              <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>&nbsp;{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;Account 
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>&nbsp;{{ __('Login') }}</a>
            <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-edit fa-regular"></i>&nbsp;{{ __('Register') }}</a>
          </div>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>