<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container w-75 p-3"> 
        <nav class="navbar navbar-expand-sm justify-content-between navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-item nav-link text-white" href="/users">Usuarios</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-item nav-link text-white" href="/posts">Posts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="navbar-nav mr-auto">
                                @if(Auth::user())
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">{{Auth::user()->name}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <x-responsive-nav-link class="nav-link text-white" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();" >
                                                {{ __('Sair')}}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('login')}}">Entrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('register')}}">Cadastrar</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('body')
    </div>
</body>
</html>