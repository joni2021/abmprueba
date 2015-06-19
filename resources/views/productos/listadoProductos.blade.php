<!DOCTYPE html>
<html>
<head>
    <title>Listado de productos</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        body
        {
            width: 90%;
            margin:auto;
            padding: 0;
            text-align: center;
            font-family: helvetica;
            position: relative;
        }

        table
        {
            margin:auto;
            width: 100%;
            border:1px solid #666;
        }

        table *
        {
            text-align: center;
        }

        table thead
        {
            background: #f2f2f2;
        }

        #acciones
        {
            margin-top:10px;
            margin-bottom:10px;
        }

        #acciones a
        {
            margin:10px;
        }

        #mensaje
        {
            margin-top:20px;
        }

        td img{
            opacity: .5;
        }

        td img:hover{
            opacity: 1;
        }

        #modal{
            position: fixed;
            margin: 0;
            padding: 0;
            top:0;
            left: 0;
            z-index: 20;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }

        #imgGrande{
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
            width: auto;
            height: auto;
            max-height: 80%;
            max-width: 80%;
        }
    </style>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
<div id="acciones" class="row responsive">
    <a href="logout"  class="btn btn-primary pull-right col-md-1 btn-md margin-15">Logout</a>
    <a href="productos/alta" class="col-md-2 pull-right text-center btn btn-success">Nuevo producto</a>
    <a href="usuarios" class="col-md-3 pull-right text-center btn btn-info">Ver usuarios</a>
    @if(\Session::has('estado'))
        @if(isset(\Session::get('estado')['ok']))
             <p class="pull-left text-info" id="mensaje">{!!\Session::get('estado')['ok']!!}</p>
        @else
            <p class="pull-left text-info" id="mensaje">{!!\Session::get('estado')['no']!!}</p>
        @endif
    @endif
</div>

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
        <td>{{ $producto->usuario }}</td>
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
                   <a href="productos/activar/{{$producto->idProducto}}" class = 'btn btn-primary' width="">Activar</a>
                @else

                <a href="productos/desactivar/{{$producto->idProducto}}" class = 'btn btn-danger'>Desactivar</a>
                <a href="productos/modificar/{!!$producto->idProducto!!}" class = 'btn btn-primary'>Modificar</a>
                @endif
            @endif
        </td>

    </tr>
    @endforeach
    </tbody>
</table>

{!!	$productos->appends(Request::all())->render() !!}


<script src="{{ asset('/js/modal.js') }}"></script>
























</body>
</html>