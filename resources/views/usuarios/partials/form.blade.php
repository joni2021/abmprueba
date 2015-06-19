<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', '', array('placeholder' => 'Ingrese su nombre', 'class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', '', array('placeholder' => 'Ingrese su apellido', 'class' => "form-control",'required' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Mail') !!}
    {!! Form::email('email', '', array('placeholder' => 'Ingrese su mail', 'class' => "form-control")) !!}
</div>

<div class="form-group">
    {!! Form::label('fkSexo', 'Sexo') !!}
    {!! Form::select('fkSexo', $sexos, null, array('class' => "form-control",'required' => 'required')) !!}
</div>

<div class="form-group">
    {!! Form::label('usuario', 'Usuario') !!}
    {!! Form::text('usuario', '', array('placeholder' => 'Ingrese su usuario', 'class' => "form-control",'required' => 'required')) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Clave') !!}
    {!! Form::password('password', array('placeholder' => 'Ingrese su clave', 'class' => "form-control",'required' => 'required')) !!}
</div>