@extends('app')

@section('body')
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    {!! Form::model($usuario, ['url' => 'usuarios/'.$usuario->id.'/edit', 'method' => 'PUT']) !!}
                    @include('usuarios.partials.formModificar')

                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    @endsection
