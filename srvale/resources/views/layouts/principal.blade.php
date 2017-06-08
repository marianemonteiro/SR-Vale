<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <meta name="keywords" content="Faculdade UCL">
    <link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title> SR Vale </title>
        @yield('estilos')

</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Security Route Vale</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('usuarios.index')}}">Usuários</a></li>
                <li><a href="{{route('alertas.index')}}">Alertas</a></li>
                <li><a href="{{route('pontoencontros.index')}}">Ponto de encontro</a><li>
                <li><a href="{{route('salas.index')}}">Salas</a><li>
                <li><a href="{{route('predios.index')}}">Prédios</a><li>
                <li><a href="{{route('rotafugas.index')}}">Rota de Fuga</a><li>
            </ul>
        </div>
    </nav>
    <div class="container">
    @yield('conteudo')
    </div>
</body>
</html>