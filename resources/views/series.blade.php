<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Serie TV</title>
</head>
<body>
    <header>
        <nav>
            <h1>Serie TV</h1>
            <ul>
                <li><a href="{{ route('homepage')}}">Home</a></li>
                <li><a href="{{ route('manga-list')}}">Manga</a></li>
                <li><a href="{{ route('games-list')}}">Videogiochi</a></li>
            </ul>
        </nav>
    </header>
    @foreach ($seriesList as $series)
        <div>
            <h2>{{ $series['title'] }}</h2>
            <h3>{{ $series['channel'] }}</h3>
            <p>{{ $series['plot'] }}</p>
        </div>
    @endforeach;
</body>
</html>