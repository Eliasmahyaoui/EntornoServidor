<<<<<<< HEAD
<!--En la vista create se deberá hacer SIEMPRE un formulario -->

@extends('layout.layout')

@section('title')
    Formulario
@endsection

<form action="{{ route('characters.store') }}" method="post">
    @csrf
    Nombre:<input type="text" name="name">
    <br>
    Edad:<input type="text" name="age">
    <br>
    Género:<input type="text" name="gender">
    <br>
    Rol:<input type="text" name="role">
    <br>
    Descripción:<input type="text" name="description">
    <br>
    <input type="submit" value="Guardar">
</form>
=======
@extends('layout.layout')


@sect
<form action="{{route('characters.store')}}" method="POST">
     @csrf

    Nombre:<input type="text" name="name">
    Edad:<input type="text" name="age">
    Genero:<input type="text" name="gender">
    Rol:<input type="text" name="roles">
    Descripcion<input type="text" name="description">
    Guardar<input type="submit" value="Guardar">


</form>







>>>>>>> ecbba96684e66dfc55ba58741a91e924fdf99f89
