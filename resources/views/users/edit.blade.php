@extends('layout/header')
    @section('user', "#{$id}")
    
@extends('layout/layout')
    @section('layout/content')
        <h1>Usuario #{{ $id }}</h1>
        <p>Editando los destalles del usuario: {{ $id }}</p>
    @endsection
