<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <style>
        /* .navbar {
            background: none;
        } */
        /* .header .navbar {
            background-color: transparent !important;
        } */

        figure {
            width: 100%;
            height: auto;
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
        }

        figure:hover+span {
            bottom: -36px;
            opacity: 1;
        }

        .hover figure img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .hover figure:hover img {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .carousel-item {
            position: relative;
        }

        .carousel-item::before {
            content: '';
            background-color: rgba(0, 0, 0, .5);
            z-index: 3;
            display: block;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            position: absolute;
        }

        .section-padding {
            padding: 60px 0;
        }

        .brand-carousel {
            background-color: transparent !important;
            margin-top: 1%;
        }

        .owl-dots {
            text-align: center;
            margin-top: 4%;
        }

        .owl-dot {
            display: inline-block;
            height: 15px !important;
            width: 15px !important;
            background-color: #a70606 !important;
            opacity: 0.8;
            border-radius: 50%;
            margin: 0 5px;
        }

        .owl-dot.active {
            background-color: rgb(250, 250, 250) !important;
        }

        .jumbotron {
            /* background-image: url({{ 'img/c.jpg' }}); */
            /* background-image: url() */
            padding: 400px 100px;
            text-align: center;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .jumbotron:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }

    </style>
    <title>Aslanbol</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg py-2 navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="{{ route('inicio') }}">
                    <img src="{{ asset('img/aslan.png') }}" class="d-inline-block align-middle mr-9 img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample07">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="navbar-brand" href="{{ route('inicio') }}">INICIO</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('service') }}">SERVICIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('about') }}">SOBRE NOSOTROS</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main role="main">
        @yield('contenido')
    </main>
    <!-- <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting
          started guide</a>.</p>
    </div>
  </footer> -->

    <footer class="footer-distributed">

        <div class="footer-center">
            <!-- <img src="img/logo.png">
        <h3><span>Aslanbol</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">Blog</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">© 2019 Eduonix Learning Solutions Pvt. Ltd.</p> -->
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Zona Villa Tunari Calle Candelaria N° 2404</span>
                    El Alto - Bolivia</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>69828085 - 69776463</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="angelmiguelfigueredobernal@gmail.com">angelmiguelfigueredobernal@gmail.com</a></p>
            </div>
        </div>

        <!-- <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
              <p><span>309 - Rupa Solitaire,
                 Bldg. No. A - 1, Sector - 1</span>
                Mahape, Navi Mumbai - 400710</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+91 22-27782183</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@eduonix.com">support@eduonix.com</a></p>
        </div>
    </div> -->
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Horarios de Atención</span>
                Lunes a Viernes 8:00 - 17:00
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/ASLAN-CARS-2066378266929884"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>

        </div>
        <div class="card-footer">
            <small class="text-muted">Todos los derechos reservado 2021</small>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script style="text/javascript" src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="../../../../dist/js/bootstrap.min.js"></script> --}}
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
</body>

</html>
