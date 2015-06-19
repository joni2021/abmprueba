<!DOCTYPE html>
<html>
<head>
	<title>Editar usuario</title>
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
	<script type="text/javascript" src="../../js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div id="acciones">
		<a href="../../../"  class="btn btn-warning col-md-offset-1 btn-md margin-15">Volver</a>
	</div>
	<section  class="container col-xs-9  col-md-offset-1">
			
		<h1 class="text-center">Editar usuario {{$usuario->usuario}}</h1>

		
		<div class="col-md-offset-2">
			
			{!! Form::model($usuario, ['url' => 'usuarios/modificar/'.$usuario->id, 'method' => 'PUT']) !!}
				
				<div class="form-group col-sm-10">
					{!! Form::label('nombre', 'Nombre') !!}
					{!! Form::text('nombre', $usuario->nombre, array('placeholder' => 'Ingrese su nombre', 'class' => 'form-control')) !!}
					@if($errors->has('nombre'))
						<p class="pull-left text-danger">{!!$errors->get('nombre')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::label('apellido', 'Apellido') !!}
					{!! Form::text('apellido', $usuario->apellido, array('placeholder' => 'Ingrese su apellido', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('apellido'))
						<p class="pull-left text-danger">{!!$errors->get('apellido')[0]!!}</p>
					@endif
				</div>
				<div class="form-group col-sm-10">
					{!! Form::label('email', 'Mail') !!}
					{!! Form::email('email', $usuario->email, array('placeholder' => 'Ingrese su mail', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('email'))
						<p class="pull-left text-danger">{!!$errors->get('email')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::label('fkSexo', 'Sexo') !!}
					{!! Form::select('fkSexo', array('' => 'Seleccione su sexo','1' => 'Masculino', '2' => 'Femenino'), null, array('class' => 'form-control','required' => 'required')) !!}
					@if($errors->has('sexo'))
						<p class="pull-left text-danger">{!!$errors->get('sexo')[0]!!}</p>
					@endif
				</div>
		
				<div class="form-group col-sm-10">
					{!! Form::label('usuario', 'Usuario') !!}
					{!! Form::text('usuario', $usuario->usuario, array('placeholder' => 'Ingrese su usuario', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('usuario'))
						<p class="pull-left text-danger">{!!$errors->get('usuario')[0]!!}</p>
					@endif
				</div>
					
				<div class="form-group col-sm-10">
					{!! Form::label('password', 'Clave') !!}
					{!! Form::password('password', array('placeholder' => 'Ingrese su clave', 'class' => "form-control")) !!}
					@if($errors->has('password'))
						<p class="pull-left text-danger">{!!$errors->get('password')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::submit('Editar usuario', array('class' => "btn btn-info col-md-offset-5")) !!}
				</div>
				
			{!! Form::close() !!}

		</div>	
	</section>

	<script type="text/javascript">
	$(document).ready()
	{
		/*var formulario = $('form');

		formulario.on('submit',function(ev){
			ev.preventDefault();

			if($('#errores'))
			{
				$('#errores').remove();
			}

			var nombre = $('#nombre').val();
			var apellido = $('#apellido').val();
			var email = $('#email').val();
			var sexo = $('#fkSexo').val();
			var usuario = $('#usuario').val();
			var password = $('#password').val();
			var token = $("input[name = '_token']").val();

			if(password == '' || password.match(/\s/)){
				password = 'vacio';
			}

			$.ajax({
				url : '{!!$usuario->id!!}',
				type : 'PUT',
				beforeSend : function(){
					$('body').append("<div class='navbar-fixed-bottom alert alert-info' role='alert'><p>Estamos procesando los datos...</p></div>");
				},
				data : {"nombre":nombre,"apellido":apellido,"email":email,"fkSexo":sexo,"usuario":usuario,"password":password,"_token":token},
				success : function(datos){
					datos = JSON.parse(datos);
					
					$('body').append("<div class='navbar-fixed-bottom alert alert-info' role='alert' id='errores'></div>");
					
					for(var dato in datos)
					{
						$('#errores').append("<p>"+datos[dato]+"</p>");	
					}


				}
			});

		});*/
	}
	</script>

</body>
</html>