<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        .card img {
            width: 300px;
            height: 300px;
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
        }

        .card:hover+span {
            bottom: -36px;
            opacity: 1;
        }

        .card img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .card:hover img {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

    </style>
    <title>Aslanbol | HOME</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg py-2 navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/aslan.png') }}" width="85" alt=""
                        class="d-inline-block align-middle mr-9 img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample07">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">INICIO<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ACERCA DE NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICIOS</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        {{-- <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <!-- <label class="logo">WEB</label> -->
            <div class="logo">
                <a href="" class="home">
                    <img width="120px" height="70px" src="aslan.png" alt="">
                </a>
            </div>

            <div class="menu">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
            </div>

        </nav> --}}
    </header>


    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="{{ asset('img/a.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('img/b.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('img/c.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container marketing">
        <h2 class="text-center">Nuestros Productos</h2>
        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <img class="" width="300px" height="300px" src="{{ asset('img/em.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Bs. 1000</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="" width="300px" height="300px" src="{{ asset('img/pro.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/pro.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container marketing">
        <hr class="featurette-divider">
        <h2 class="text-center">Nuestros Servicios</h2>
        <br><br>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/ser.png') }}" alt="Generic placeholder image"
                    width="100" height="100">
                <h3>Taller Mecánico</h3>
                {{-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                    vehicula ut id elit. Morbi leo risus.</p> --}}

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="" src="{{ asset('img/car-sale.png') }}" alt="Generic placeholder image" width="100"
                    height="100">
                <h3>Venta de Autos</h2>
                    {{-- <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. </p> --}}

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/world.png') }}" alt="Generic placeholder image"
                    width="100" height="100">
                <h3>Importacion de Vehículos y Accesorios</h2>
                    {{-- <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus.</p> --}}

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        {{-- <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider"> --}}

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <footer class="footer-distributed">

        <div class="footer-center">
            {{-- <img src="img/logo.png">
            <h3>About<span>Eduonix</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">© 2019 Eduonix Learning Solutions Pvt. Ltd.</p> --}}
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
    <script style="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script>
        $('.carousel').carousel({
            interval: 3000
        })

    </script>
</body>

</html>
