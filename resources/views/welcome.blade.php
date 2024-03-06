<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-200 py-10" >
        <div class="max-w-lg bg-withe mx-auto p-5 rounded shadow">
            <form action="tags" method="POST" name="name" id="name" class="flex mb-4">
                @csrf
                <input type="text" name="name" id="name" placeholder="Ingresa una etiqueta" class="rounded-l bg-gray-200 p-4 w-full outline-none">
                <input type="submit" name="" id="" value="Guardar" class="rounded-r bg-blue-500 px-8 text-white outline-none">
            </form>
            <h4 class="text-lg text-center mb-4">Listado de etiquetas</h4>
            <table>
                @forelse ($tags as $tag)
                    <tr>
                        <td>{{ $tag->name }}</td>
                        <td class="border px-4 py-2">
                            <form action="tags/{{ $tag->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="" id="" value="Eliminar" class="rounded bg-red-500 px- text-white">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td>No hay etiquetas</td></tr>
                @endforelse
            </table>
        </div>
    </body>
</html>
