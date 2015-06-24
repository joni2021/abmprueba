@extends('appProductos')

@section('head')
@endsection

@section('body')

		<h1 class="text-center">Editar producto: {{$producto->producto}}</h1>

		
		<div class="col-md-offset-2">
			
			{!! Form::model($producto, ['url' => 'productos/modificar/'.$producto->id, 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}

                @include('productos.partials.formModificar')

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
				url : '{!!$producto->id!!}',
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
@endsection