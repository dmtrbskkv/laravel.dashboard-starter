<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} :: @yield('title', 'Панель управления')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
</head>
<body>
<main class="layout layout-main">
    <x-dashboard.sidebar/>
    <x-dashboard.search/>
    @section('content')
    @show
</main>
<script src="{{asset('/js/dashboard.js')}}"></script>
</body>
</html>
