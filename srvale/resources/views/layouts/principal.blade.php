<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
    <meta name="keywords" content="Faculdade UCL">
    <meta name="author" content="Mariane Monteiro Quirino">

    <title> SR Vale </title>

        <link href="../css/main.css" rel="stylesheet">
        @yield('estilos')

</head>
<body>
<div class="container">
    <nav>
        <ul>
            <a href="{{route('usuarios.index')}}"><li>Usuários</li></a>
            <a href="{{route('alertas.index')}}"><li>Alertas</li></a>
        </ul>

    </nav>
    @yield('conteudo')
</div>
</body>
</html>