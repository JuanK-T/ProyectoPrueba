
{!! Form::label('name', 'Nombre:', ['class' => 'flex-auto text-xl']) !!}
    @error('name')
        <small class="text-red-500">{{$message}}</small>
    @enderror
    <div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mr-10">
        {!! Form::text('name', null, ['class' => 'bg-gray-100 w-full outline-none hover:scale-105 transition duration-500', 'placeholder' => 'Ingrese el Nombre de la Etiqueta', 'onload' => 'crearURLAmigable(this.value)', 'onkeyup' => 'crearURLAmigable(this.value)']) !!}
    </div>


    {!! Form::label('slug', 'Slug:', ['class' => 'flex-auto text-xl mt-4']) !!}
    @error('slug')
        <small class="text-red-500">{{$message}}</small>
    @enderror
    <div class="flex bg-gray-100 p-1 w-96 space-x-2 rounded-lg mb-4">
        {!! Form::text('slug', null, ['class' => 'bg-gray-100 w-full outline-none transition', 'placeholder' => 'Ingrese el Slug de la Etiqueta', 'readonly']) !!}
    </div>


    {!! Form::label('color', 'Color:', ['class' => 'flex-auto text-xl mt-2']) !!}
        <div class="flex bg-gray-100 p-1 w-96 space-x-2 rounded-lg mb-4">
            {!! Form::select('color', $colors, null, ['class' => 'flex py-3 px-4 rounded-lg w-full text-gray-500 font-semibold cursor-pointer']) !!}
        </div>
    @error('color')
        <small class="text-red-500">{{$message}}</small>
    @enderror


@if(session('info'))
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        icon: 'success',
        title: '{{session("info")}}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif
