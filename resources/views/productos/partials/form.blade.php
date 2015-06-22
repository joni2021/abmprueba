<div class="form-group col-sm-10">
    {!! Form::label('producto', 'Nombre') !!}
    {!! Form::text('producto','',array('placeholder' => 'Ingrese nombre del producto', 'class' => 'form-control')) !!}
    @if($errors->has('nombre'))
        <p class="pull-left text-danger">{!!$errors->get('producto')[0]!!}</p>
    @endif
</div>

<div class="form-group col-sm-10">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::textarea('descripcion', '', array('style' => 'resize:none','placeholder' => 'Ingrese descripcion', 'class' => "form-control",'required' => 'required')) !!}
    @if($errors->has('descripcion'))
        <p class="pull-left text-danger">{!!$errors->get('descripcion')[0]!!}</p>
    @endif
</div>
<div class="form-group col-sm-10">
    {!! Form::label('precio', 'Precio ($)') !!}
    {!! Form::text('precio', '',array('placeholder' => 'Ingrese precio', 'class' => "form-control",'required' => 'required')) !!}
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
</div>

<div class="form-group col-sm-10">
    {!! Form::hidden('fkUsuario', Auth::user()->id) !!}
</div>

<div class="form-group col-sm-10">
    {!! Form::submit('Dar de alta',array('class' => "btn btn-info col-md-offset-5")) !!}
</div>