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
                            <a class="btn btn-primary" href="{{ route('cover.create') }}"><i class="fas fa-plus"></i>
                                Nuevo</a>
                            <br>

                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div> --}}
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
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-2">
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
                                        <th class="table-info">Titulo</th>
                                        <th class="table-info">Image</th>
                                        <th class="table-info">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($covers as $cover)
                                        <tr>
                                            <td class="">{{ $cover->titulo }}</td>
                                            <td><img width="100px" height="80px" src="/storage/{{ $cover->foto }}" alt="">
                                            </td>
                                            <td>
                                                <form action="{{ route('cover.destroy', $cover->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="far fa-trash-alt"></i>
                                                        Eliminar
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
                                {{ $covers->render() }}
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
