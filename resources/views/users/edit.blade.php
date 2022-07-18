@extends('template.users')
@section('title', "Usuario " .$user->name)
@section('body')
<h1>Usuario {{$user->name}}</h1>
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
@endsection