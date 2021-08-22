<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Categoria</title>
</head>
<body>
    @extends('sidebar')
    @section('contenido')
    {!! Form::open(['route' => 'admin.categories.store']) !!}
        <div class="min-h-screen bg-gray-100 flex items-center">
            <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
                <div class="py-12 p-10 bg-white rounded-xl">
                    <div class="mb-6">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded', 'placeholder' => 'Ingrese el Nombre de la Categoría', 'onload' => 'crearURLAmigable(this.value)', 'onkeyup' => 'crearURLAmigable(this.value)']) !!}
                        @error('name')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="">
                        {!! Form::label('slug', 'Slug:') !!}
                        {!! Form::text('slug', null, ['class' => ' bg-gray-100 py-2 px-4 w-96 rounded', 'placeholder' => 'Ingrese el Slug de la Categoría', 'readonly']) !!}
                        @error('slug')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    {!! Form::submit('Crear Categoría', ['class' => 'w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300']) !!}
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    @stop

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
