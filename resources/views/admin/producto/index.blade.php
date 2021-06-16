@extends('layouts.web')
@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            {{-- <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Simple Tables</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid --> --}}
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary float-left" href="{{ route('product.create') }}"><i
                                    class="fas fa-plus"></i>
                                Nuevo</a>
                            <div class="card-tools">
                                {{-- <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Buscar">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        {{-- @if ($message = Session::get('info'))
                            <div class="container">
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            </div>

                        @endif --}}

                        @if (session('info'))
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-success">
                                            {{ session('info') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered table table-sm">
                                <thead>
                                    <tr>
                                        <th class="table-info">Nombre</th>
                                        <th class="table-info">Marca</th>
                                        <th class="table-info">Descripcion</th>
                                        <th class="table-info">Precio</th>
                                        <th class="table-info">Imagen</th>
                                        <th class="table-info">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="">{{ $product->nombre }}</td>
                                            <td class="">{{ $product->marca }}</td>
                                            <td class="">{{ $product->descripcion }}</td>
                                            <td class="">Bs. {{ $product->precio }}</td>
                                            <td>

                                                <img width="100px" src="/storage/{{ $product->foto }}" alt="">

                                            </td>
                                            {{-- <td>
                                                <a href="" class="btn btn-warning">Editar</a>
                                            </td> --}}
                                            <td>
                                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('product.edit', $product->id) }}" type="button"
                                                        class="btn btn-warning">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="far fa-trash-alt"></i>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $products->render() }}
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>



@endsection
