<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body{font-size:16pt;color:#999;}
            h1{font-size:50pt;text-align:right;color:#f6f6f6;
            margin:-20px 0px -30px 0px;letter-spacing:-4pt;}
        </style>
    </head>
    <body>
        <h1>Blade/Index</h1>
        <p><?php echo $msg;?></p>
        <p>{{$msg}}</p>
        <h1>Blade/Index</h1>
        @isset($msg)
        <p>こんにちは！{{$msg}}さん！</p>
        @else
        <p>何が書いて下さい</p>
        @endisset
        <form method="POST" action="/hello">
            {{csrf_field()}}
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>