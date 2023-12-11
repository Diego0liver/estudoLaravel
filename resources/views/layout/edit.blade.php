<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar {{$getIdProduto->nome}}</h1>
    <div>
        <form action="{{route('edit-put', ['id'=>$getIdProduto->id])}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="nome" value="{{$getIdProduto->nome}}" placeholder="nome">
            <input type="text" name="preco" value="{{$getIdProduto->preco}}" placeholder="preco">
            <input value="salvar" type="submit">
        </form>
        </div>
   
    </div>
</body>
</html>