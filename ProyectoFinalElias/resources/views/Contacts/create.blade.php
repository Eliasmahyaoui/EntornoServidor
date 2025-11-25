@extends('layout.layout')

@section('title')
    Formulario
@endsection

@section('content')
    <form action="{{ route('Contacts.store') }}" method="POST">
        @csrf

        <label for="mensaje">MENSAJE:</label>
        <input type="text" name="mensaje" id="mensaje">
        <br>
    </form>
@endsection
