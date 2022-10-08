@section('title', 'Контейнеры')

@extends('dashboard.layouts.default')

@section('content')
    <x-dashboard.container>
        <h1>CONTAINER_SIZE_FLUID</h1>
        <p>Контейнер на всю ширину страницы: container-fluid</p>
    </x-dashboard.container>
    <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_FIXED}}">
        <h1>CONTAINER_SIZE_FIXED</h1>
        <p>Широкий фиксированный контейнер: container-fixed-large</p>
    </x-dashboard.container>
    <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_SMALL}}">
        <h1>CONTAINER_SIZE_SMALL</h1>
        <p>Маленький фиксированный контейнер: container-fixed-small</p>
    </x-dashboard.container>
    <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_AUTH}}">
        <h1>CONTAINER_SIZE_AUTH</h1>
        <p>Контейнер для авторизации: container-fixed-auth</p>
    </x-dashboard.container>
@endsection
