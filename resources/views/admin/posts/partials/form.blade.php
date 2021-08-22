{!! Form::label('name', 'Nombre:', ['class' => 'flex-auto text-xl']) !!}
<div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mr-10">
    {!! Form::text('name', null, ['class' => 'bg-gray-100 w-full outline-none hover:scale-105 transition duration-500', 'placeholder' => 'Ingrese el Titulo de tu Post', 'onload' => 'crearURLAmigable(this.value)', 'onkeyup' => 'crearURLAmigable(this.value)']) !!}
</div>

{!! Form::label('slug', 'Slug :', ['class' => 'flex-auto text-xl']) !!}
<div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mr-10">
    {!! Form::text('slug', null, ['class' => 'bg-gray-100 w-full outline-none', 'placeholder' => 'Ingrese el Slug de tu Post', 'readonly']) !!}
</div>

{!! Form::label('idCategoryFK', 'Categoría:', ['class' => 'flex-auto text-xl mt-2']) !!}
    <div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mb-4">
        {!! Form::select('idCategoryFK', $categories, null, ['class' => 'flex py-3 px-4 rounded-lg w-full text-gray-500 font-semibold cursor-pointer']) !!}
    </div>

<div class="my-4">
    <p class="font-bold text-lg">Etiquetas</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($tags as $tag)
            <label class="mx-4">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                    {{$tag->name}}
            </label>
        @endforeach
    </div>
</div>

<div class="mb-4">
    <p class="font-bold text-lg">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2, true) !!}
        Publicado
    </label>
</div>

{!! Form::label('extract', 'Descripción:', ['class' => 'flex-auto text-xl mt-2']) !!}
<div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mb-4">
    {!! Form::textarea('extract', null, ['class' => 'flex py-3 px-4 rounded-lg w-full text-gray-500 font-semibold cursor-pointer hover:scale-50 transition duration-500']) !!}
</div>

{!! Form::label('contenido', 'Contenido del Post:', ['class' => 'flex-auto text-xl mt-2']) !!}
<div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mb-4">
    {!! Form::textarea('contenido', null, ['class' => 'flex py-3 px-4 rounded-lg w-full text-gray-500 font-semibold cursor-pointer hover:scale-50 transition duration-500']) !!}
</div>



{{-- AGREGANDO CKEDITOR --}}
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#contenido' ) )
        .catch( error => {
            console.error( error );
    } );
</script>
