@extends('layouts.template')
@section('contenido')
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($covers->take(4) as $cover)
                <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($covers->take(4) as $cover)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="/storage/{{$cover->foto}}" alt="">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="jumbotron-heading text-white">Bienvenido</h1>
                            <p class="lead text-white">Aslanbol te ofrece una serie de accesorios para tu vehiculo al por
                                mayor y menor
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--fin carousel-->

    <!--lista de accesorios-->
    <h2 class="text-center">Accesorios</h2>
    <br><br>
    <!-- <hr class="featurette-divider"> -->
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="hover">
                            <div>
                                <figure>
                                    <img class="card-img-top" src="/storage/{{ $product->foto }}" alt="Card image cap">
                                </figure>
                            </div>
                        </div>
                        <div class="card-body">

                            <h4 class="card-title">{{ $product->nombre }}</h5>
                            <p class="card-text text-justify">{{ $product->descripcion }}</p>
                            <div class=" align-items-center">
                                <div class="text-center">
                                    <button type="button" class="btn btn-sm  btn-outline-danger">Bs. {{ $product->precio }}
                                    </button>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <!-- <small class="text-muted">9 mins</small> -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="float-center">
            {{ $products->render() }}
        </div>
    </div>
    <br><br><br>
    <!-- fin lista de accesorios-->
    <!--carousel marca-->
    {{-- <h2 class="text-center">Titulo</h2> --}}
    <div class="container">
        <div class="brand-carousel section-padding owl-carousel">
            <div class="single-logo">
                <img width="100px" height="150px" src="{{asset('img/hilux.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img width="100px" height="150px" src="{{asset('img/land.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img width="100px" height="150px" src="{{asset('img/runner.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img width="100px" height="150px" src="{{asset('img/corolla.png')}}" alt="">
            </div>
            <div class="single-logo">
                <img width="100px" height="150px" src="{{asset('img/hiace.png')}}" alt="">
            </div>
        </div>
        <script>
            $('.brand-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>
    </div>
    <!--fin carousel marca-->
@endsection
