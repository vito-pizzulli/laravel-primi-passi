<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Manga</title>
</head>
<body>
    <header>
        <nav>
            <h1>Manga</h1>
            <ul>
                <li><a href="{{ route('homepage')}}">Home</a></li>
                <li><a href="{{ route('games-list')}}">Videogiochi</a></li>
                <li><a href="{{ route('series-list')}}">Serie TV</a></li>
            </ul>
        </nav>
    </header>
    @foreach ($mangaList as $manga)
        <div>
            <h2>{{ $manga['title'] }}</h2>
            <h3>{{ $manga['author'] }}</h3>
            <p>{{ $manga['plot'] }}</p>
        </div>
    @endforeach;
</body>
</html>