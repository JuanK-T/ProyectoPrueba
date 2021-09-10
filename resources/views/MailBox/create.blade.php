<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario de contacto</title>
</head>
<body>
@extends('sidebar')
@section('contenido')
<form action="https://formsubmit.co/alemolan06@gmail.com" method="POST">
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
                    <div class="text-gray-900 bg-gray-200 overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
                        <div class="p-3 flex">
                            <h1 class="text-3xl text-bold">
                                Formulario de contacto
                            </h1>
                        </div>
                        <div class="px-3 py-1 flex justify-center">
                        <div class="flex flex-col p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transform ">
               {!! Form::open(['route' => 'MailBox.store']) !!}
               {!! Form::label('name', 'Nombre *', ['class' => 'flex-auto text-xl']) !!}
                @error('name')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
                <div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mr-10">
                    {!! Form::text('name', null, ['class' => 'bg-gray-100 w-full outline-none hover:scale-105 transition duration-500',
                    'placeholder' => 'Ingrese su nombre', 'onload', 'required']) !!}
                </div>

                {!! Form::label('correo', 'Correo *', ['class' => 'flex-auto text-xl']) !!}
                @error('correo')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
                <div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mr-10">
                    {!! Form::email('correo', null, ['class' => 'bg-gray-100 w-full outline-none', '
                    placeholder' => 'Ingrese su correo', 'onload', 'required']) !!}
                </div>
                {!! Form::label('mensaje', 'Mensaje *', ['class' => 'flex-auto text-xl mt-2']) !!}
                @error('mensaje')
                <small class="text-red-500">{{$message}}</small>
                @enderror
                <div class="flex bg-gray-100 p-1 w-full space-x-2 rounded-lg mb-4">
                {!! Form::textarea('mensaje', null, ['class' => 'flex py-3 px-4 rounded-lg w-full text-gray-500 font-semibold cursor-pointer',
                    'placeholder' => 'Deje su queja o sugerencia...', 'required', 'rows' => '4']) !!}
                </div>
                {!! Form::submit('Enviar', ['class' => 'bg-gray-800 py-3 px-5 w-20 text-white  rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer font-semibold']) !!}
        {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
</form>
</body>
</html>
