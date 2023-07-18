<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <h1>Laravel Primi Passi</h1>
    <h2>Hello World</h2>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('manga-list')}}">Manga</a></li>
                <li><a href="{{ route('games-list')}}">Videogiochi</a></li>
                <li><a href="{{ route('series-list')}}">Serie TV</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>