@extends('layout.app')

@section('titulo')
    Crud
@endsection

@section('content')
    <h1>Crud</h1>
     <div>
        <form action="{{route('app.store')}}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="assunto" placeholder="assunto">
            <input type="text" name="message" placeholder="mensagem" >
            <input type="submit">
        </form>
        @if (session('ok'))
        <div id="msg">
        {{session('ok')}}
        </div>
    @endif
    <br>
        <a href="{{route('form')}}"><button>Formulario</button></a>
    </div>    
@endsection

