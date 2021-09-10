<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publicaciones</title>
</head>
<body>
    @extends('sidebar')

    @section('contenido')
        <div class="container py-8">

            <div>
                @foreach ($categories as $category)
                    <ul>
                        <li><a>{{$category->name}}</a></li>
                    </ul>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($post->image->url)}})">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-700 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>

                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white leading-8 font-bold">
                                <a href="{{route('posts.show', $post)}}">
                                    {{$post->name}}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-4">
                {{$posts->links()}}
            </div>
        </div>
    @endsection
</body>
</html>
