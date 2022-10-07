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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/dashboard/css/dashboard-vendor.css')}}">

    @section('head')
    @show
</head>
<body>
@section('body')
@show
<script src="{{asset('/assets/dashboard/js/dashboard.js')}}"></script>
</body>
</html>
