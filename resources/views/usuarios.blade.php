<!DOCTYPE html>
<html>	
<head>
	<title>Listado de usuarios</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<style type="text/css">
		body
		{
			width: 80%;
			margin:auto;
			text-align: center;
			font-family: helvetica;
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

	</style>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div id="acciones" class="row">
		<a href="logout"  class="btn btn-primary pull-right col-md-1 btn-md margin-15">Logout</a>
		<a href="alta" class="col-md-3 pull-right text-center btn btn-info">Agregar nuevo usuario</a>
		@if(\Session::has('estado'))
			@if(isset(\Session::get('estado')['ok']))
				<p class="pull-left text-info" id="mensaje">{!!\Session::get('estado')['ok']!!}</p>
			@else
				<p class="pull-left text-info" id="mensaje">{!!\Session::get('estado')['no']!!}</p>
			@endif
		@endif
	</div>


	<table class="table table-bordered">
		<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Nivel</th>
			<th>Sexo</th>
			<th>Mail</th>
			<th>Usuario</th>
		@if(Auth::user()->fkNivel == '1')
			<th>acciones</th>
		@endif
		</tr>
		</thead>
		
		<tbody>
		@foreach($usuario as $u)
			<tr>
				<th scope="row">{{ $u->nombre }}</th>
				<td>{{ $u->apellido }}</td>
				<td>{{ $u->nivel }}</td>
				<td>{{ $u->sexo }}</td>
				<td>{{ $u->email }}</td>
				<td>{{ $u->usuario }}</td>
				@if(Auth::user()->fkNivel == '1')
				<td>
					@if($u->estado == '0')
					<a href="usuarios/activar/{{$u->id}}" class = 'btn btn-primary'>activar</a>
					@else
				
					<a href="usuarios/desactivar/{{$u->id}}" class = 'btn btn-danger'>desactivar</a>
					<a href="usuarios/modificar/{!!$u->id!!}" class = 'btn btn-primary'>Modificar</a>
					@endif
				</td>
				@endif
			</tr>
		@endforeach
		</tbody>
	</table>

	{!!	$usuario->appends(Request::all())->render() !!}

	<script type="text/javascript">
		$(document).ready()
		{
			if($('#mensaje'))
			{
				setTimeout(function(){
					$('#mensaje').fadeOut();
				},1200);
			}
		}
	</script>

</body>
</html>