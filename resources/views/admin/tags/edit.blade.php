<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Etiqueta</title>
</head>
<body>
    @extends('sidebar')
    @section('contenido')
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="text-gray-900 bg-gray-200 overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
            <div class="p-4 flex">
                <h1 class="text-3xl text-bold">
                    Actualizar Etiquetas
                </h1>
            </div>
            <div class="px-3 py-4 flex justify-center">
                <div class="flex flex-col p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transform ">
                    {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
                        @include('admin.tags.partials.form')
                        {!! Form::submit('Actualizar', ['class' => 'bg-gray-800 py-3 px-5 w-28 text-white  rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer font-semibold']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script type="text/javascript">
        function crearURLAmigable(slug){
            // Reemplaza los carácteres especiales | simbolos con un espacio
            slug = slug.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

            // Corta los espacios al inicio y al final del sluging
            slug = slug.replace(/^\s+|\s+$/gm,'');

            // Reemplaza el espacio con guión
            slug = slug.replace(/\s+/g, '-');

            // Creo la URL en el campo de texto 'url'
            var input = document.getElementById('slug');
            input.value = slug;

        }

    </script>
</body>
</html>
