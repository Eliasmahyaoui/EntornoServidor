@extends('layout.layout')



@section('title')
    formulario
@endsection

@section('content')
   <form action=" {{route('players.store')}}" method="post">
    @csrf



    
   </form>
@endsection
