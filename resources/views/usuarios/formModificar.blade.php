@extends('app')

@section('body')
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    {!! Form::model($usuario, ['url' => 'usuarios/modificar/'.$usuario->id, 'method' => 'PUT']) !!}
                    @include('usuarios.partials.form')

                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    @endsection
