<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            border: 1px solid black;
            width: 40vw;
        }
        .description{
            margin-bottom: 20px;
        }
    </style>
    <title>GAMES</title>
</head>
<body>
    @foreach($games as $game)
    <div>
        {{$game->name}}
    </div>
    <div class='description'>
        {{$game->description}}
    </div>
    @endforeach
</body>
</html>