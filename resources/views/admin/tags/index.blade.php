<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Listado de Etiqueta</title>
</head>
<body>
    @extends('sidebar')
    @section('contenido')
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
            <div class="text-gray-900 bg-gray-200 overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
                <div class="p-4 flex">
                    <h1 class="text-3xl">
                        Etiquetas
                    </h1>
                </div>

                <div class="my-4">
                    <a href="{{route('admin.tags.create')}}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">
                        Agregar Categoría
                    </a>
                </div>

                <div class="px-3 py-4 flex justify-center">
                    <table class="w-full text-lg bg-white shadow-md rounded mb-4 table-fixed">
                        <thead>
                            <tr class="border-b bg-indigo-600 text-white">
                                <th class="text-left p-3 px-5">Id</th>
                                <th class="text-left p-3 px-5">Nombre</th>
                                <th class="text-left p-3 px-5">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr class="border-b hover:bg-orange-100">
                                    <td class="p-3 px-5">{{$tag->id}}</td>
                                    <td class="p-3 px-5">{{$tag->name}}</td>
                                    <td class="p-3 px-5 flex justify-start">
                                            <a href="{{route('admin.tags.edit', $tag)}}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Editar</a>
                                        <form class="formulario-eliminar" action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>
