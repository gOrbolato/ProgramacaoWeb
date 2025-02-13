<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
    @include('cabecalho')
    <div class="container m-4">
        @yield('conteudo')
    </div>
</body>
</html>