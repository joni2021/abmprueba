<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Prueba</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @yield('head')
</head>

<body>
<div class="container">
    @include('topmenuProductos')
    @include('messages')

    @yield('body')
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
@yield('js')
</body>
</html>