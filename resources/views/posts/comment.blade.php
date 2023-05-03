@extends('layouts.app-master')

@section('content')
<div class="mt-4">

    <div class="bg-light rounded-3">
          <h3 class="fw-bold">Titulo: {{ $post->title }}</h3>
          <h6>Autor: {{$post->user->name}}</h6>
          <h6>Fecha de publicación: {{$post->created_at}}</h6>
          <br>
          <p class="col-md-8">{{ $post->content }}</p>
      </div>


      <h4>Commentarios</h4>
      <hr>
      <div class="card">
        <ul class="list-group list-group-flush">

            @foreach ($post->comments as $comment)
            <li class="list-group-item">
                Autor: {{ $comment->user->name  }}
                <br>
                Comentario:{{ $comment->description  }}
                <br>
                Fecha:{{ $comment->created_at  }}
                <br>
                @auth
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group ">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
                @endauth
            </li>
            @endforeach
        </ul>
        </div>
</div>
@endsection