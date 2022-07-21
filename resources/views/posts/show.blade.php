@extends('template.users')
@section('title', 'Postagens do {$user->name}')
@section('body')
    <h1>Postagens do {{ $user->name }}</h1>

    @foreach ($user->posts as $post)
    <div class="card mt-3">
        <div class="card-body">
            <p class="card-text">Post N°: {{$post->id}}</p>
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-subtitle ">Status: {{ $post->active?'Ativo':'Inativo' }}</p>
            <p class="card-text">{{ $post->post }}</p>

            <p class="card-text"><small class="text-muted">Cadastrado em: {{ date('d/m/Y', strtotime($post->created_at)) }}</small></p>
            <a href="#" class="btn btn-primary">Editar</a>
            <a href="#" class="btn btn-danger">Deletar</a>
        </div>
    </div>
@endforeach

@endsection