@extends('template.users')
@section('title', 'Novo usuario')
@section('body')
<h1>Novo usuario</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                   {{ $error }}<br>
                @endforeach
        </div>  
    @endif
    
    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nome">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagem</label>
            <input type="file" class="form-control form control-md" id="image" name="image"/>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
@endsection