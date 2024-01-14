<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Crud Laravel</title>
</head>
<body>
        <h1>Inicio</h1>
<div class="container">
  <form action="/" method="GET">
    @csrf
    <input type="text" name="pesquisa" value="{{ old('pesquisa') }}" id="pesquisa">
    <button type="submit">Pesquisar</button>
  </form> 
  @foreach ($resultados as $produto)
  {{ $produto->nome }}
  <!-- Adicione outros detalhes do produto conforme necessário -->
@endforeach
  
    </body>
</html>
