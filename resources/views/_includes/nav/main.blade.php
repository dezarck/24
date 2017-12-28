<nav class="navbar is-fixed-top">
  <div class="navbar-brand">
    @if (Request::segment(1) == "manage")
      <a class="navbar-item is-hidden-desktop m-r-5" id="admin-slideout-button">
        <span class="icon"><i class="fa fa-bars"></i></span>
      </a>
    @endif
    <a class="navbar-item" href="{{Route('manage.dashboard')}}">
      <img class="p-l-20" src="{{asset('images/site-logos.png')}}" alt="Online24jam">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="#">
        Berita
      </a>
      <a class="navbar-item" href="#">
        Foto
      </a>
      <a class="navbar-item" href="#">
        Video
      </a>
      <a class="navbar-item" href="#">
        Infografis
      </a>
      <a class="navbar-item" href="#">
        Epaper
      </a>
      <a class="navbar-item" href="#">
        Live Report
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="navbar-item has-dropdown is-hoverable">
          @if (Auth::guest())
            <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
          @else
          <a class="navbar-link" href="#">
            Bonjour, {{ Auth::user()->name }}
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item" href="#">
              <span class="icon">
                <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
              </span>Profile
            </a>
            <a class="navbar-item" href="#">
              <span class="icon">
                <i class="fa fa-fw fa-bell m-r-5"></i>
              </span>Notifications
            </a>
            <a class="navbar-item" href="{{route('manage.dashboard')}}">
              <span class="icon">
                <i class="fa fa-fw fa-cog m-r-5"></i>
              </span>Manage
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                  <span class="icon">
                    <i class="fa fa-fw fa-sign-out m-r-5"></i>
                  </span>
                  Logout
                </a>
                @include('_includes.forms.logout')
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>
