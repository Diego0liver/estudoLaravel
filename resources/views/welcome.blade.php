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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preco</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($getAllProdut as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->preco}}</td>
                <form action="{{route('delet',['id'=>$item->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <td><button type="submit" class="btn btn-danger">
                  Excluir</button></td>
                </form>
                <td><a href="{{route('edit',['id'=>$item->id])}}">
                <button class="btn btn-info">
                  Editar</button>
                </a></td>
              </tr>
              @endforeach 
            </tbody>
          </table>
          @if (session('delet'))
              <div id="msg">
                {{session('delet')}}
              </div>
              @elseif (session('update'))
              <div id="msg">
                {{session('update')}}
              </div>
          @endif
          {{$getAllProdut->links()}}
          <a href="{{route('form')}}"><button class="btn btn-primary">Novo Produto</button></a>
</div>
        <a href="{{route('app.index') }}">Contato</a>
        <script src="{{ asset('/js/apps.js') }}"></script>
    </body>
</html>