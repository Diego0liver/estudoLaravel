<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>
<body>
    <h1>Contatos</h1>
    <div>
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="assunto" placeholder="assunto">
            <input type="text" name="message" placeholder="mensagem" >
            <input type="submit">
        </form>
    </div>
</body>
</html>