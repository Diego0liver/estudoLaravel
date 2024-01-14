<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loggis</title>
</head>
<body>
    <h1>Histórico de Logs</h1>

   @if (!empty($logLines))
        <ul>
            @foreach ($logLines as $logLine)
                <li>{!! nl2br(e($logLine)) !!}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum log encontrado.</p>
    @endif
</body>
</html>