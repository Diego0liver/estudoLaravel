<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Chego</h1>
    {{$getIdProduto->nome}}
    <form action="{{route('deleteContato', ['id' => $getIdProduto->id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Excluir</button>
    </form>
</body>
</html>