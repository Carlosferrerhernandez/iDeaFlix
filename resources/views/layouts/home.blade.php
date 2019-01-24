<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Carlos ferrer" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/favicon.ico')}}">

    <title>{{ config('app.name', 'iDeaFlix - Series y peliculas') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/product.css')}}" rel="stylesheet">
</head>

<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="{{ url('/')}}">Inicio</a>
            <a class="py-2 d-none d-md-inline-block" href="{{ route('series.index')}}">Series</a>
            <a class="py-2 d-none d-md-inline-block" href="{{ route('peliculas.index')}}">Peliculas</a>
            <a class="py-2 d-none d-md-inline-block" href="{{ route('documentales.index')}}">Documentales</a>
            <a class="py-2" href="{{ url('/')}}">
                <img src="{{ asset('img/logo/Logo.png')}}" alt="ideaflix" height="22px" width="">
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Favoritos</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Contacto</a>
            @if (Route::has('login'))
            @auth
            <a class="py-2 d-none d-md-inline-block" href="{{ url('/home') }}">Mi perfil</a>
            @else
            <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">Login</a>
            @endauth
            @endif
        </div>
    </nav>
    @include('sweetalert::alert')
    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="container py-5">
        <div class="row text-center">
            <div class="col-12 col-md">
                <img src="{{ asset('img/logo/Logo1.png')}}" alt="ideaflix" height="22px" width="">
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md text-center">
                <h5>Inicio</h5>
            </div>
            <div class="col-3 col-md text-center">
                <h5>Series</h5>
            </div>
            <div class="col-3 col-md text-center">
                <h5>Películas</h5>
            </div>
            <div class="col-3 col-md text-center">
                <h5>Documentales</h5>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 text-center">
                    <a href="https://facebook.com" style="color: black; margin-right: 10px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" style="color: black; margin-right: 10px;"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" style="color: black; margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->

    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/holder.min.js')}}"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>
</html>