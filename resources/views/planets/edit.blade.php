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
    <h1>惑星情報編集</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p>入力内容に{{ $errors->count() }}個のエラーがあります。</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('planets.update', $planet->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $planet->name) }}">
        </div>
        <div class="form-group">
            <label for="english_name">名前(英語)</label>
            <input type="text" name="english_name" id="english_name"
                value="{{ old('english_name', $planet->english_name) }}">
        </div>
        <div class="form-group">
            <label for="radius">半径</label>
            <input type="number" name="radius" id="radius" value="{{ old('radius', $planet->radius) }}">
        </div>
        <div class="form-group">
            <label for="weight">重量</label>
            <input type="number" name="weight" id="weight" value="{{ old('weight', $planet->weight) }}">
        </div>
        <button type="submit">更新</button>
    </form>
    <a href="{{ route('planets.index') }}">一覧に戻る</a>
</body>

</html>
