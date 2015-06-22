@extends('appProductos')

@section('head')

@endsection

@section('js')
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
             url : '',
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

@section('body')

	<section  class="container col-xs-9  col-md-offset-1">
			
		<h1 class="text-center">Dar de alta un nuevo producto</h1>

		
		<div class="col-md-offset-2">
			
			{!! Form::open(['url' => 'productos/alta', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                @include('productos.partials.form')
				
			{!! Form::close() !!}

		</div>	
	</section>


@endsection