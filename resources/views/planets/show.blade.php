<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <p>名前: {{ $planet->name }}</p>
    <p>名前(英語): {{ $planet->english_name }}</p>
    <p>半径: {{ $planet->radius }}</p>
    <p>重量: {{ $planet->weight }}</p>
    <a href="{{ route('planets.index') }}">一覧に戻る</a>
</body>

</html>
