@extends('template.users')
@section('title', 'Listagem de posts')
@section('body')
    <h1>Listagem de posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Titulo</th>
                <th>Postagem</th>
                <th>Data Cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                    <td>
                        <a href="" class="btn btn-info">Detalhes</a>
                        
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        
    </div>
@endsection