@extends('layout/layout')
    @section('layout/content')
        <h1>{{ $title }}</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <p>Hay errores</p>
           {{--  <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> --}}
        </div>
        @endif

        <form method="POST" action="{{ url('usuarios') }}">
            {!! csrf_field() !!}
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Introduce tu nombre" name="name" value="{{ old('name') }}">
              @if ($errors->has('name'))
                <small id="emailHelp" class="form-text text-muted">{{ $errors->first() }}</small>
              @endif

            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduce tu email" name="email" value="{{ old('email') }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Crear usuario</button>
        </form>
        <p>
            <a href="{{ route('users') }}">Regresar</a>
        </p>
    @endsection
