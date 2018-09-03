@extends('layout/header')
    @section('user', "#{$user->id}")

@extends('layout/layout')
    @section('layout/content')
        <h1>Usuario #{{ $user->id }}</h1>
        <p>Nombre de usuario: {{ $user->name }}</p>
        <p>Correo electrónico: {{ $user->email }}</p>
        <p>
            <a href="{{ route('users') }}">Regresar</a>
        </p>
    @endsection
