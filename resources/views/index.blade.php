<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="content">
    <div class="menu">
        <ul>
            <li><a href="{{route('ngontinh')}}">Ngon Tinh</a></li>
            <li><a href="{{route('ngontinh')}}">Thieu Nhi</a></li>
            <li><a href="{{route('ngontinh')}}">Truyen Tranh</a></li>
            <li><a href="{{route('ngontinh')}}">Tieu Thuyet</a></li>
        </ul>
    </div>
</div>
<div class="left">
    @yield('content')
</div>
</body>
</html>