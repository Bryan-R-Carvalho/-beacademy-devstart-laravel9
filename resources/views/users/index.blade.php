@extends('template.users')
@section('title', 'Listagem de usuarios')
@section('body')
    <h1>Listagem de usuarios</h1>
    <a href="{{ route('users.create')}}" class="btn btn-outline-dark">Criar usuario</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
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
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Detalhes</a>
                    
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection