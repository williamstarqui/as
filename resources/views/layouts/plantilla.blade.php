<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <title>Aslanbol</title>
    <!-- Bootstrap core CSS -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .nav {
            /* background-color: transparent; */

        }
    </style>
    <!-- Custom styles for this template -->
</head>
<body>
    <header>
        <nav id="menu" class="navbar navbar-expand-md navbar-dark fixed-top">
            <a class="navbar-brand" href="#">ASLANBOL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de nosotros</a>
                    </li>
                    
                </ul>

            </div>
        </nav>
    </header>

    <main role="main">

        @yield('carousel')
        @yield('marketing')
        <hr class="featurette-divider">

        <!-- FOOTER -->
        {{-- <footer class="container-fluid">
         
            <div class="" style="background-color: rgba(0, 0, 0, 0.938)">
                <div class="row">
                  <div class="col justify-content-start">
                      <center>
                        <h3>Horarios de Atencion</h3>  
                      </center>
                        <p>Lunes a Domingo de 08:00 a 20:00 Hrs.</p>
                  </div>
                  
                  <div class="col justify-content-end">
                    <center>
                        <h3>Contacto</h3> 
                        
                        <ion-icon src="{{ asset('icons/logo-facebook.svg') }}"></ion-icon>
                        <ion-icon name="logo-facebook"></ion-icon>
    
                        <li><i class="fas fa-ambulance"> </i></li>
                      </center>
                  </div>
                </div>
            </div>
            <br>
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer> --}}
        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                    href="https://twitter.com/mdo">@mdo</a>.</p>
            <div class="card-footer text-muted">
                Todos los derechos reserados 2021
            </div>
        </footer>
    </main>
    <script style="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script>
        $(window).scroll(function() {
            if ($("#menu").offset().top > 56) {
                $("#menu").addClass("bg-dark");
            } else {
                $("#menu").removeClass("bg-dark");
            }
        });

    </script>
</body>

</html>
