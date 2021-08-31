<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mas Sobre</title>
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

                    {{-- Seccion de Comentarios --}}
                    <div class="w-full py-10 pr-10">
                        <h3 class="ml-3 text-lg font-bold text-gray-700 tracking-wide mb-2">Comentarios</h3>
                        <div class="flex">
                            <img class="h-10 w-10 rounded-full mr-3 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" title="">
                            <input class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-gray-900" type="text" placeholder="Agrega un comentario">
                        </div>
                        {{-- Ver Otros Comentarios --}}
                        <div class="py-5 mx-4">
                            <div class="flex">
                                <img class="h-8 w-8 rounded-full mr-3 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" title="">
                                <div class="">
                                    <p class="text-gray-700 font-semibold text-base">Joder</p>
                                    <p class="text-sm text-gray-700 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nulla consequatur, molestiae ipsam labore provident dolore consequuntur voluptate fugiat vero nobis reprehenderit dignissimos, ab aut illo. Alias recusandae ad beatae?Repellat quasi expedita consequuntur quos! Error laboriosam corporis impedit iusto, modi sit? Incidunt cupiditate sequi suscipit fuga, saepe sapiente repudiandae consequatur ullam quibusdam voluptatem, numquam architecto, unde alias. Illo, modi!</p>
                                    <div class="flex space-x-3 items-center">
                                        {{-- Boton de me gusta --}}
                                        <div class="flex space-x-2 items-center pr-4">
                                            <span>
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                              </svg>
                                            </span>
                                            <span class="text-gray-700 font-semibold">22</span>
                                        </div>
                                        {{-- Botton de ver respuestas --}}
                                        <div class="flex space-x-2 items-center">
                                            <span>
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                              </svg>
                                            </span>
                                            <span class="text-gray-700 font-semibold">20</span>
                                        </div>
                                        {{-- Boton de Responder --}}
                                        <div class="">
                                            <span class="text-gray-700 font-thin text-base">Responder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Ver Respuestas --}}
                            <div class="flex py-2 mx-6">
                                <img class="h-6 w-6 rounded-full mr-3 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" title="">
                                <div class="">
                                    <p class="text-gray-600 font-semibold text-base">Joder</p>
                                    <p class="text-sm text-gray-600 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quibusdam a sunt odit voluptate odio temporibus atque, molestiae reiciendis omnis.</p>
                                    <div class="flex space-x-1 items-center">
                                        {{-- Boton de me gusta --}}
                                        <div class="flex space-x-2 items-center pr-4">
                                            <span>
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                              </svg>
                                            </span>
                                            <span class="text-gray-600 font-semibold">22</span>
                                        </div>
                                        {{-- Boton de Responder --}}
                                        <div class="">
                                            <span class="text-gray-600 font-semibold text-sm">Responder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
