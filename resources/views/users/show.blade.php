@extends('template.users')
@section('title', 'Usuário '.$user->name)
@section('body')
    <h1>Usuario {{ $user->name }}</h1>
    <table class="table table-striped">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Cadastro</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{route('users.edit', $user->id)}} " class="btn btn-warning">Editar</a>
                </td>
                <td>
                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="{{route('users.index')}} " class="btn btn-primary">Voltar para lista</a>
    </div>
@endsection