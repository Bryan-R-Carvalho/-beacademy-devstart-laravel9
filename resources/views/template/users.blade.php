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
    <div class="container w-50 p-3">
        <nav class="navbar navbar-expand-xl navbar navbar-dark bg-dark">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-item nav-link" href="/users">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="/users/create">Novo usuario</a>
                    </li>
                </ul>
        </nav>
    @yield('body')
    </div>
</body>
</html>