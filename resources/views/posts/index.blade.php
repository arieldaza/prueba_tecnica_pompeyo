@extends('layouts.app-master')

@section('content')

<div class="mt-3">
   <h1>Mis Posts</h1>
   
    @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username }}, estas autenticado a la pagina</p>
    @endauth

    @guest
       <p>Para ver el contenido  <a href="/login">inicia sesion</a></p>
    @endguest

    <div class="row">
    @foreach ($posts as $post)
        <div class="col mb-2">
            <div class="card" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                </svg>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->slug }}</p>
                    <a href="/posts/{{ $post->id }}" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
   
    <div class="row">
        <div class="text-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection