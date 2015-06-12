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
		<a href="usuarios"  class="btn btn-warning col-md-offset-1 btn-md margin-15">Volver</a>

	</div>
	<section  class="container col-xs-9  col-md-offset-1">
			
		<h1 class="text-center">Dar de alta nuevo usuario</h1>

		<div class="col-md-offset-2">
			{!! Form::open(array('url' => 'usuarios/alta', 'method' => 'post')) !!}
				
				<div class="form-group col-sm-10">
					{!! Form::label('nombre', 'Nombre') !!}
					{!! Form::text('nombre', '', array('placeholder' => 'Ingrese su nombre', 'class' => 'form-control')) !!}
					@if($errors->has('nombre'))
						<p class="pull-left text-danger">{!!$errors->get('nombre')[0]!!}</p>
					@endif
				</div>
				<div class="form-group col-sm-10">
					{!! Form::label('apellido', 'Apellido') !!}
					{!! Form::text('apellido', '', array('placeholder' => 'Ingrese su apellido', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('apellido'))
						<p class="pull-left text-danger">{!!$errors->get('apellido')[0]!!}</p>
					@endif
				</div>
				<div class="form-group col-sm-10">
					{!! Form::label('email', 'Mail') !!}
					{!! Form::email('email', '', array('placeholder' => 'Ingrese su mail', 'class' => "form-control")) !!}
					@if($errors->has('email'))
						<p class="pull-left text-danger">{!!$errors->get('email')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::label('fkSexo', 'Sexo') !!}
					{!! Form::select('fkSexo', array('' => 'Seleccione su sexo','1' => 'Masculino', '2' => 'Femenino'), null, array('class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('sexo'))
						<p class="pull-left text-danger">{!!$errors->get('sexo')[0]!!}</p>
					@endif
				</div>
		
				<div class="form-group col-sm-10">
					{!! Form::label('usuario', 'Usuario') !!}
					{!! Form::text('usuario', '', array('placeholder' => 'Ingrese su usuario', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('usuario'))
						<p class="pull-left text-danger">{!!$errors->get('usuario')[0]!!}</p>
					@endif
				</div>
					
				<div class="form-group col-sm-10">
					{!! Form::label('password', 'Clave') !!}
					{!! Form::password('password', array('placeholder' => 'Ingrese su clave', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('password'))
						<p class="pull-left text-danger">{!!$errors->get('password')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::submit('Crear Usuario', array('class' => "btn btn-info col-md-offset-5")) !!}
				</div>
				
			{!! Form::close() !!}

		</div>	
	</section>
</body>
</html>