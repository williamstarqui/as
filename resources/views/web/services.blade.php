@extends('layouts.template')
@section('contenido')
    <div style="background-image:url('https://ak2.picdn.net/shutterstock/videos/9057502/thumb/12.jpg');">
        
        <section class="jumbotron text-center">
            <div class="container">
                <div class="port">
                    <h1 class="jumbotron-heading text-white">Nuestros servicios</h1>
                    <!-- <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                  </p> -->
                </div>
                <!-- <div class="middle"> -->
            </div>
        </section>
    </div>

    <!-- mision y vision -->
    <div class="container">
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-6">
                <h2 class="featurette-heading">Mantenimiento Mecánico</h2>
                <ul class="lead">
                    <li>Afinación de motor</li>
                    <li>Servicio de frenos</li>
                    <li>Cambio de aceite</li>
                    <li>Revisión eléctrica</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="featurette-image img-fluid mx-auto" src="{{asset('img/mecanica.jpg')}}"
                    alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-6 order-md-2">
                <h2 class="featurette-heading">Lavado
                </h2>
                <ul>
                    <li>Lavado a detalle</li>
                    <li>Encerado</li>
                    <li>Limpieza de motor</li>
                </ul>
            </div>
            <div class="col-md-6 order-md-1">
                <img class="featurette-image img-fluid mx-auto" width="700px" src="{{asset('img/lavado.jpg')}}"
                    alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
    <!-- fin mision y vision -->
@endsection
