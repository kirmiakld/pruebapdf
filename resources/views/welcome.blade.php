<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Descargar</h1>
        <p>
            Click
            <a href="{{ route('pdf') }}" title="PDF global" target="_blank"> Aqui </a>
        </p>
    </body>
</html>
