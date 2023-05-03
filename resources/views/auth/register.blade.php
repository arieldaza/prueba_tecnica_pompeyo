@extends('layouts.app-auth')

@section('content')

    <form action="/register" method="post">
        <h1>Create account</h1>
        @include('layouts.partial.messages')
        @csrf
        <div class="form-floating mb-3">
            <input type="email" name="email" placeholder="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <a href="login">Login</a>
        </div>
 
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
    
@endsection