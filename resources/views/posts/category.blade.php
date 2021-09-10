<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    @extends('sidebar')
    @section('contenido')
        <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
            <h1 class="uppercase text-center text-3x1 font-bold">Categoria: {{$category->name}}</h1>
            @foreach ($posts as $post)
                <x-card-post :post="$post"/>
            @endforeach
            <div class="mt-4">
                {{$posts->links()}}
            </div>
        </div>
    @endsection
</body>
</html>
