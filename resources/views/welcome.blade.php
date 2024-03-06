<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body >
        <h4>Listado de etiquetas</h4>
        <table>
            @forelse ($tags as $tag)
                <tr><td>{{ $tag->name }}</td></tr>
            @empty
                <tr><td><p>No hay etiquetas</p></td></tr>
            @endforelse
        </table>
    </body>
</html>
