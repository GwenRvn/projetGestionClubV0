<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion du club de va'a</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layout.navbar')
@include('layout.header')

<div class="container">
    @yield('content')
</div>
@include('layout.footer')
@yield('script')

<script src="/js/app.js"></script>
</body>
</html>
