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