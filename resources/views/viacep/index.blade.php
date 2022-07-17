<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>via cep</title>
</head>
<body>
    <h1>ViaCep</h1>
    <form action="{{ route('viacep.index.post') }}" method="post">
        @csrf
        <input type="text" name="cep" placeholder="Digite o CEP">
        <button type="submit">Buscar</button>
    </form>

</body>
</html>