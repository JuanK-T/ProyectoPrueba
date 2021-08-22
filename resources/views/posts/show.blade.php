<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('sidebar')
    @section('contenido')
        <div class="container py-8">
            <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
            <div class="text-lg text-gray-500 mb-2">
                {!!$post->extract!!}
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gab-6">

                {{-- CONTENIDO PRINCIPAL --}}
                <div class="lg:col-span-2">
                    <figure>
                        @if ($post->image)
                            <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                        @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2017/06/23/14/50/colombia-2434911_960_720.jpg" alt="">
                        @endif
                    </figure>
                    <div class="text-base text-gray-500 mt-4">
                        {!!$post->contenido!!}
                    </div>
                </div>

                {{-- CONTENIDO RELACIONADO
                    Esto No funciona
                    {{$post->category->slug}}
                --}}
                <aside style="padding: 10px">
                    <h1 class="text-2x1 font-bold text-gray-600 mb-4">Otros que te pueden gustar</h1>
                    <ul>
                        @foreach ($similares as $similar)
                            <li class="mb-4">
                                <a class="flex" href="{{route('posts.show', $similar)}}">
                                    @if ($similar->image)
                                        <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                    @else
                                        <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2017/06/23/14/50/colombia-2434911_960_720.jpg" alt="">
                                    @endif
                                    <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
    @endsection
</body>
</html>
