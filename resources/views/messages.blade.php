<div class="row">
    <div class="col-xs-12">

        {{-- ERRORS --}}
        @if ($errors->count() > 0)
            <div class="alert alert-danger">
                <strong>Error: han ocurrido los siguientes errores.</strong><br /><br />
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- SUCCESS --}}
        @if (session()->has('ok'))
            <div class="alert alert-success">
                <strong>Éxito.</strong><br />
                {{ session('ok') }}
            </div>
        @endif

    </div>
</div>