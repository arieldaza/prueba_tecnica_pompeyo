@extends('layouts.app-auth')

@section('content')
    <form action="/login" method="post">
        @csrf
        <h1>Iniciar sessión</h1>
        @include('layouts.partial.messages')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="user@pompeyoblogs.com">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="password">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Iniciar sessión</button>
        </div>
        <div class="mb-3">
          <div class="text-center">
            <a class="text-center" href="{{ url('/') }}">Ir a Home</a>
          </div>
        </div>
      </form>
@endsection