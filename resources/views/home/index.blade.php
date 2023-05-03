@extends('layouts.app-master')

@section('content')
<section class="py-5 text-center container">
    <div class="">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Todos los Posts</h1>
      </div>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach ($posts as $post)
            <div class="col">
                <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    
                <div class="card-body">
                    <p class="card-text">{{ $post->title }}</p>
                    <p class="card-text">Autor: {{ $post->user->name }}</p>
                    <p class="card-text">Fecha: {{ $post->created_at }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a type="button" href="/posts/{{ $post->id }}" class="btn btn-sm btn-outline-secondary">Ver mas...</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
     </div>
   



        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="text-center">
        {{ $posts->links() }}
    </div>
</div>

    @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username }}, estas autenticado a la pagina</p>
        <a href="/logout">logout</a>
    @endauth

    @guest
       <p>Para ver el contenido  <a href="/login">inicia sesion</a></p>
    @endguest
    
@endsection