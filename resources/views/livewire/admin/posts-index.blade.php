<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="text-gray-900 bg-gray-200 overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
            <div class="p-4 flex">
                <h1 class="text-3xl">
                    Post
                </h1>
            </div>

            <div class="mx-auto w-full text-gray-600 lg:block hidden">
                <input
                    class="border-2 border-gray-300 bg-white h-10 w-96 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
                    name="search" placeholder="Buscar" wire:model="search">
            </div>

            <div class="my-4">
                <a href="{{route('admin.posts.create')}}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">
                    Agregar Post
                </a>
            </div>

     @if ($posts->count())
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-lg bg-white shadow-md rounded mb-4 table-fixed">
                    <thead>
                        <tr class="border-b bg-indigo-600 text-white">
                            <th class="text-left p-3 px-5">Id</th>
                            <th class="text-left p-3 px-5">Titulo</th>
                            <th class="text-left p-3 px-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3 px-5">{{$post->id}}</td>
                                <td class="p-3 px-5">{{$post->name}}</td>
                                <td class="p-3 px-5 flex justify-start">
                                        <a href="{{route('admin.posts.edit', $post)}}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Editar</a>
                                    <form class="formulario-eliminar" action="{{route('admin.posts.destroy', $post)}}" method="POST">
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
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    @else
        <strong>No se encontro ningun Registro</strong>
    @endif
</div>
