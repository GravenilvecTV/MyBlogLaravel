<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nomDuBlog }}</title>
</head>
<body>
    Voici mes articles 
    <p>Il y a {{ $nbArticles }} articles</p>

    @if ($nbArticles == 0)
        <p>Il n'y aucun article</p>
    @else
        @foreach ($articles as $a)
            <a href='/article/{{ $a->id }}'>{{ $a->title }}</a><br>
        @endforeach
    @endif
</body>
</html>