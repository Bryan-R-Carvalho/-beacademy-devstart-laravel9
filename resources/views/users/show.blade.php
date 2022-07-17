@extends('template.users')
@section('title', 'Usuario ' .$user->name)
@section('body')
    <h1>Usuario {{$user->name}}</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>
                    <a href="" class="btn btn-danger">Deletar</a>
                    
            </tr>
        </tbody>
    </table>
    <a href="{{route('users.index')}} " class="btn btn-default">Voltar para lista</a>
    </div>
@endsection