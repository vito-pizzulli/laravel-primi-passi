<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Videogiochi</title>
</head>
<body>
    <header>
        <nav>
            <h1>Videogiochi</h1>
            <ul>
                <li><a href="{{ route('homepage')}}">Home</a></li>
                <li><a href="{{ route('manga-list')}}">Manga</a></li>
                <li><a href="{{ route('series-list')}}">Serie TV</a></li>
            </ul>
        </nav>
    </header>
    @foreach ($gamesList as $game)
        <div>
            <h2>{{ $game['title'] }}</h2>
            <h3>{{ $game['developerHouse'] }}</h3>
            <p>{{ $game['plot'] }}</p>
        </div>
    @endforeach;
</body>
</html>