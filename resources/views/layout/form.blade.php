<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <div>
        <form action="{{route('store')}}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="preco" placeholder="preco">
            <input type="submit">
        </form>
    </div>
</body>
</html>