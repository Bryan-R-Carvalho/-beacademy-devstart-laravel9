@extends('template.users')
@section('title', 'Listagem de usuarios')
@section('body')
    <h1>Listagem de usuarios</h1>
        @if(session()->has('create'))
            <div class="alert alert-success">
                <strong>Atenção! </strong>{{ session()->get('create') }}
            </div>
        @endif
        @if(session()->has('edit'))
            <div class="alert alert-warning">
                <strong>Atenção! </strong>{{ session()->get('edit') }}
            </div>
        @endif
        @if(session()->has('destroy'))
            <div class="alert alert-danger">
                <strong>Atenção! </strong>{{ session()->get('destroy') }}
            </div>
        @endif
        
    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a href="{{ route('users.create')}}" class="btn btn-outline-dark">Criar usuario</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('users.index')}}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search">
                        <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Postagens</th>
                <th>Data Cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($users as $user)
            <tr>
                @if($user->image)
                    <td><img src="{{ asset('storage/' .$user->image) }}" alt="{{ $user->name }}" class="rounded-circle" width="50px"></td>
                @else
                    <td><img src="{{ asset('storage/profile/avatar.png') }}" alt="{{ $user->name }}" class="rounded-circle" width="50px"></td>
                @endif
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('posts.show', $user->id) }}" class="btn btn-outline-dark">Postagens: {{$user->posts->count()}}</a></td>
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Detalhes</a>
                </td>
                    
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection