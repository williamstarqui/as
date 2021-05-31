@extends('layouts.web')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Nueva portada</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        @if ($errors->any())
                        <div class="container">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                            
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Registro de producto</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('product.update', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" class="form-control"
                                            value="{{ $product->nombre }}">
                                        <label>Marca</label>
                                        <input type="text" name="marca" class="form-control"
                                            value="{{ $product->marca }}">
                                            <label>Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control"
                                            value="{{ $product->descripcion }}">
                                            <label>Precio</label>
                                        <input type="number" name="precio" class="form-control"
                                            value="{{ $product->precio }}">
                                            
                                    </div>

                                     {{-- <div class="form-group">
                                        <label for="exampleInputFile">Imagen</label>
                                        <div class="input-group">
                                            <div class="">
                                                <input type="file" value="{{ $product->photo}}" name="photo">
                                              <label  for="exampleInputFile">Click aquí para buscar imagen</label> 
                                            </div>

                                        </div>
                                    </div>  --}}

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->



                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>

@endsection
