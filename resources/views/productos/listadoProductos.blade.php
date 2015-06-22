@extends('appProductos')

@section('head')
    <style type="text/css">
        table *
        {
            text-align: center;
        }

        table thead
        {
            background: #f2f2f2;
        }

        #mensaje
        {
            margin-top:20px;
        }

    </style>
@endsection

@section('body')
    <div class="row">
        <div class="col-xs-4 col-lg-6">
            <a href="{{ route('productos.alta') }}" class="btn btn-primary">
                Agregar Producto
            </a>
        </div>
        <div class="col-xs-8 col-lg-6">
            {!! Form::open(['method' => 'GET']) !!}
            <div class="input-group">
                {!! Form::text('search', null, ['class' => 'form-control']) !!}
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default">Buscar</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <br class="clearfix" />

    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-bordered responsive">
                    <thead class="responsive">
                    <tr class="responsive">
                        <th scope="row">Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Foto</th>
                        <th>Usuario</th>
                        <th>Fecha alta</th>
                        <th>Estado</th>
                        <th style="width: 210px">acciones</th>
                    </tr>
                    </thead>

                    <tbody class="responsive">
                    @foreach($productos as $producto)

                        <tr class="responsive">
                            <th scope="row">{{ $producto->producto }}</th>
                            <td>{{ $producto->descripcion }}</td>
                            <td>${{ $producto->precio }}</td>
                            <td class="fotos"><img src="img/productos/{{ $producto->foto }}" title="click para ampliar!" alt="{{ $producto->foto }}" class="img-responsive img-thumbnail" width="140"/></td>
                            <td>{{ $producto->usuario->usuario }}</td>
                            <td>{{ $producto->created_at }}</td>
                            <td>
                                @if($producto->estadoProducto == '1')
                                    {{'Activo'}}
                                @else
                                    {{'Inactivo'}}
                                @endif
                            </td>
                            <td>
                                @if(Auth::user()->fkNivel == '1')
                                    @if($producto->estadoProducto == '0')
                                        <a href="{{ route('productos.activar',[$producto->id])}}" class = 'btn btn-primary' width="">Activar</a>
                                    @else
                                        <a href="{{ route('productos.desactivar',[$producto->id])}}" class = 'btn btn-danger'>Desactivar</a>
                                        <a href="{{ route('productos.modificar',[$producto->id])}}" class = 'btn btn-primary'>Modificar</a>
                                    @endif
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            {!!	$productos->appends(Request::all())->render() !!}
        </div>
    </div>

@endsection