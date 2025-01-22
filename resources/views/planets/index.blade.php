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
    <h1>惑星一覧</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->english_name }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td><a href="{{ route('planets.show', $planet->id) }}">詳細</a></td>
                <td><a href="{{ route('planets.edit', $planet->id) }}">編集</a></td>
                <td>
                    <form action="{{ route('planets.destroy', $planet->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="if(!confirm('削除しますか？')){return false;}">削除する</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('planets.create') }}">新規登録</a>
</body>

</html>
