<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <h1>Laravel Primi Passi</h1>
    <h2>Hello World</h2>

    @foreach ($mangaList as $manga)
        <div>
            <h3>{{ $manga['title'] }}</h3>
            <h4>{{ $manga['author'] }}</h4>
            <p>{{ $manga['plot'] }}</p>
        </div>
    @endforeach;
</body>
</html>