<<<<<<< HEAD
<!-- En la ruta edit hay que hacer tambié un formulario para que se encargue de editar -->
@extends('layout.layout')

@section('title' 'Editando los characters' . $character->title)

@section('content')
<h1>Editnado el libro</h1>

<form action="{{route('characters.update', $character)}}" method="post">
    @csrf
    @method('put')

     Nombre:<input type="text" name="name" value="{{ $character->name }}">
    <br>
    Edad:<input type="text" name="age" value="{{ $character->age }}">
    <br>
    Género:<input type="text" name="gender" value="{{ $character->gender }}">
    <br>
    Rol:<input type="text" name="role" value="{{ $character->role }}">
    <br>
    Descripción:<input type="text" name="description" value="{{$character->description}}">
    <br>
    <input type="submit" value="Modificar el libro">

</form>
@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
>>>>>>> ecbba96684e66dfc55ba58741a91e924fdf99f89




<<<<<<< HEAD
=======
</body>
</html>

>>>>>>> ecbba96684e66dfc55ba58741a91e924fdf99f89
