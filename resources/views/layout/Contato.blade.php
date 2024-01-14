@extends('layout.app')

@section('titulo')
Crud
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<h1>Cantoto</h1>

     <div class="container">
        <form action="{{route('app.create')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" placeholder="nome">
                    @error('nome')
                    <div class="invalid-feedback">
                      O campo nome e obrigatorio
                    </div>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="salario">Salario</label>
                  <input class="form-control" type="text" name="salario" placeholder="salario">
                  <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                  <div class="form-group">
                      <label for="idade">Idade</label>
                      <input class="form-control" type="date" name="idade" placeholder="idade">
                      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" id="telefone" type="text" name="telefone" placeholder="telefone" >
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                      <label for="CPF">CPF</label>
                      <input class="form-control" type="text" id="cpf" name="CPF" placeholder="CPF">
                      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <a href="{{route('layout.logg')}}">Ir para logs</a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
          $('#cpf').mask('000.000.000-00', {reverse: true});
          $('#telefone').mask('(00) 0000-0000');
        </script>   
@endsection