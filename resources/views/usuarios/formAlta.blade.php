<!DOCTYPE html>
<html>
<head>
	<title>Alta de usuario</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<style type="text/css">
	body
	{
		font-family: helvetica;

	}

	ul li
	{
		list-style-type: none;
	}

	form
	{
		background: #f2f2f2;
	}

	.container
	{
		border:1px solid #CCC;
		margin-top: 20px;
	}

	.container h1
	{
		margin-bottom:10px;
	}

	#acciones
		{
			margin-top:20px;
		}

	</style>
</head>
<body>
	<div id="acciones">
		<a href="../"  class="btn btn-warning col-md-offset-1 btn-md margin-15">Volver</a>

	</div>
	<section  class="container col-xs-9  col-md-offset-1">
			
		<h1 class="text-center">Dar de alta nuevo usuario</h1>

		<div class="col-md-offset-2">
			{!! Form::open(array('url' => 'usuarios/alta', 'method' => 'post')) !!}
				


				<div class="form-group col-sm-10">
					{!! Form::submit('Crear Usuario', array('class' => "btn btn-info col-md-offset-5")) !!}
				</div>
				
			{!! Form::close() !!}

		</div>	
	</section>
</body>
</html>