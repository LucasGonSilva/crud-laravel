<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Base Laravel</title>

    </head>
    <body>
        <h1>Project Laravel</h1>
        <a href="{{ route('account.index') }}">Listar as contas</a>
    </body>
</html>
