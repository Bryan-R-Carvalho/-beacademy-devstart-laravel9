@extends('template.users')
@section('title', 'Admin')
@section('body')
<div class="container justify-content-center mx-5 my-2">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/dash.jpg')}}" class="card-img-top" alt="dashboard">
        <div class="card-body">
            <h5 class="card-title">Bem-vindo ao Dashboard</h5>
            <p class="card-text">#paylive #beacademy</p>
        </div>
    </div>
</div>
    
@endsection