@extends('app')

@section('head')
<style type="text/css">
    table *
    {
        text-align: center;
    }

    table thead
    {
        background: #f2f2f2;
    }

    #mensaje
    {
        margin-top:20px;
    }

</style>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready()
    {
        if($('#mensaje'))
        {
            setTimeout(function(){
                $('#mensaje').fadeOut();
            },1200);
        }
    }
</script>
@endsection

@section('body')
<div class="row">
    <div class="col-xs-4 col-lg-6">
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">
            Agregar Usuario
        </a>
    </div>
    <div class="col-xs-8 col-lg-6">
        {!! Form::open(['method' => 'GET']) !!}
            <div class="input-group">
                {!! Form::text('search', null, ['class' => 'form-control']) !!}
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default">Buscar</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

<br class="clearfix" />

<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nivel</th>
                    <th>Sexo</th>
                    <th>Mail</th>
                    <th>Usuario</th>
                    @if(Auth::user()->fkNivel == '1')
                    <th>acciones</th>
                    @endif
                </tr>
                </thead>

                <tbody>
                @foreach($usuario as $u)
                <tr>
                    <th scope="row">{{ $u->nombre }}</th>
                    <td>{{ $u->apellido }}</td>
                    <td>{{ $u->nivel->nivel }}</td>
                    <td>{{ $u->sexo->sexo }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->usuario }}</td>
                    @if(Auth::user()->fkNivel == '1')
                    <td>
                        @if($u->estado == '0')
                        <a href="usuarios/activar/{{$u->id}}" class = 'btn btn-primary'>activar</a>
                        @else

                        <a href="usuarios/desactivar/{{$u->id}}" class = 'btn btn-danger'>desactivar</a>
                        <a href="usuarios/modificar/{!!$u->id!!}" class = 'btn btn-primary'>Modificar</a>
                        @endif
                    </td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 text-center">
        {!!	$usuario->appends(Request::all())->render() !!}
    </div>
</div>
@endsection