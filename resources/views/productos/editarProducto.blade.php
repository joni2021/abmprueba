@extends('appProductos')

@section('head')
@endsection

@section('body')

		<h1 class="text-center">Editar producto: {{$producto->producto}}</h1>

		
		<div class="col-md-offset-2">
			
			{!! Form::model($producto, ['url' => 'productos/modificar/'.$producto->id, 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
				
				<div class="form-group col-sm-10">
					{!! Form::label('producto', 'Nombre') !!}
					{!! Form::text('producto', $producto->producto, array('placeholder' => 'Ingrese nombre del producto', 'class' => 'form-control')) !!}
					@if($errors->has('nombre'))
						<p class="pull-left text-danger">{!!$errors->get('producto')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::label('descripcion', 'Descripción') !!}
                    {!! Form::textarea('descripcion', $producto->descripcion, array('style' => 'resize:none','placeholder' => 'Ingrese descripcion', 'class' => "form-control",'required' => 'required')) !!}
                    @if($errors->has('descripcion'))
                    <p class="pull-left text-danger">{!!$errors->get('descripcion')[0]!!}</p>
					@endif
				</div>
				<div class="form-group col-sm-10">
					{!! Form::label('precio', 'Precio ($)') !!}
					{!! Form::text('precio', $producto->precio, array('placeholder' => 'Ingrese precio', 'class' => "form-control",'required' => 'required')) !!}
					@if($errors->has('precio'))
						<p class="pull-left text-danger">{!!$errors->get('precio')[0]!!}</p>
					@endif
				</div>

				<div class="form-group col-sm-10">
					{!! Form::label('foto', 'Foto') !!}
					{!! Form::file('foto', array('class' => "form-control",'accept' => 'image/jpeg')) !!}
					@if($errors->has('foto'))
						<p class="pull-left text-danger">{!!$errors->get('foto')[0]!!}</p>
					@endif
                    <img style="margin-top:15px" class="col-sm-12 img-thumbnail img-responsive" src="{!! asset($producto->getFotoDirectory().$producto->foto)!!}" alt="{!!$producto->foto!!}"/>
				</div>

				<div class="form-group col-sm-10">
					{!! Form::hidden('fkUsuario', Auth::user()->id) !!}
				</div>

				<div class="form-group col-sm-10">
					{!! Form::submit('Editar producto', array('class' => "btn btn-info col-md-offset-5")) !!}
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