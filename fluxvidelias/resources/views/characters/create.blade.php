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







