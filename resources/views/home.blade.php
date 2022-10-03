<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ほーむ</title>
</head>
<body>
    <div id="appbar">
        <h2>ほーむ</h2>
    </div>
    <h1>ここにつぶやきを流す</h1>
    <p>{{$今}}</p>
    <div class="footer">
        <button type="button">
            更新
        </button>
    </div>
</body>
</html>