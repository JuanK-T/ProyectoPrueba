<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios</title>
</head>
<body>
    @extends('sidebar')
    @section('contenido')
        @livewire('admin.users-index')
    @endsection
</body>
</html>
