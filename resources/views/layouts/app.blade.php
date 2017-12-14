<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online24jam | Always Be First</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar is-fixed-top" role="navigation" aria-label="dropdown navigation">
        <div class="container">
          <div class="column is-1">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                <img class="p-t-5" src="{{asset('images/icon24.png')}}" alt="24 Network">
                </a>
                <div class="navbar-dropdown is-active is-hidden-mobile">
                    <a class="navbar-item"><span class="m-r-10"><i class="fa fa-feed"></i></span> News 24</a>
                    <a class="navbar-item"><span class="m-r-10"><i class="fa fa-video-camera"></i></span> 24 TV</a>
                    <a class="navbar-item"><span class="m-r-10"><i class="fa fa-id-badge"></i></span> Infografis24</a>
                    <a class="navbar-item"><span class="m-r-10"><i class="fa fa-newspaper-o"></i></span> e-paper24</a>
                    <a class="navbar-item"><span class="m-r-10"><i class="fa fa-picture-o"></i></span> 24 Photo</a>
                </div>
            </div>
          </div>
          <div class="column">
            <div class="columns is-centered m-t-5">
              <div class="navbar-item">
                <div class="field is-grouped">
                  <p class="control is-expanded">
                    <input class="input is-info is-small" style="width:350px;" type="text" placeholder="cari berita">
                  </p>
                  <p class="control">
                    <a class="button is-info is-small is-outlined">
                      <i class="fa fa-search"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-one-fifth">
            <div class="navbar-item is-pulled-right">
                <span class="date m-t-5">kamis, 12 Desember 2017</span>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="columns is-centered m-t-60">
            <a href="#">
              <img class="p-t-5" src="{{asset('images/site-logos.png')}}" alt="24 Network">
            </a>
        </div>
      </div>
      <div class="container m-t-15">
        <div class="columns is-gapless is-multiline">
            <div class="column">
              <nav class="navbar main-nav ">
                <a href="#" class="navbar-item"><i class="fa fa-home"></i></a>
                <a href="#" class="navbar-item">NEWS</a>
                <a href="#" class="navbar-item">EKBIS</a>
                <a href="#" class="navbar-item">PENDIDIKAN</a>
                <a href="#" class="navbar-item">OLAHRAGA</a>
                <a href="#" class="navbar-item">KESEHATAN</a>
                <a href="#" class="navbar-item">TEKNO</a>
                <a href="#" class="navbar-item">OTOMOTIF</a>
                <a href="#" class="navbar-item">HIBURAN</a>
                <a href="#" class="navbar-item">MILENIAL</a>
                <a href="#" class="navbar-item">INDEKS</a>
              </nav>
            </div>
            <div class="column">
              <div class="tags m-t-5 is-centered">
                <a href="#" class="tag is-link">Nasional</a>
                <a href="#" class="tag is-link">Internasional</a>
                <a href="#" class="tag is-link">Regional</a>
                <a href="#" class="tag is-link">Politik</a>
                <a href="#" class="tag is-link">Hukum & Kriminal</a>
                <a href="#" class="tag is-link">Peristiwa</a>
              </div>
            </div>
            {{-- <div class="column is-12 is-offset-1 has-text-centered">
                <div class="has-addons is-centered">
                    <a href="#" onclick="iklan_show()" class="button is-small is-delete is-danger iklan-1">show/hide</a>
                    <img id="iklan1" class="m-t-15" src="https://newrevive.detik.com/images/3d1cbc7f1943aa8427dda30614190abb.jpg" alt="iklan">
                </div>
            </div> --}}
        </div>
      </div>


      <br />
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
