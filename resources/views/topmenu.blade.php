<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-topmenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Prueba</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-topmenu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Productos</a>
                </li>
                <li>
                    <a href="{{ route('auth.logout') }}">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>