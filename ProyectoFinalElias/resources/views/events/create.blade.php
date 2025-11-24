@extends('layout.layout');

@section('title')
    Eventos
@endsection

@section('content')
    <form action="{{ route('events.store') }}" method="post">
        @csrf



    </form>
@endsection
