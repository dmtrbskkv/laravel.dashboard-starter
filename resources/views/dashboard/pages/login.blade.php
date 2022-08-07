@section('title', 'Авторизация')

@extends('dashboard.layouts.authorization')

@section('content')
    <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_SMALL}}" fixedToCenter>
        <h1> Авторизация </h1>
        <form action="{{route('loginHandler')}}" method="POST">
            @csrf
            <input class="form-node" name="email" placeholder="Email" type="text">
            <input class="form-node" name="password" placeholder="Пароль" type="password">
            <button class="btn btn-default btn-fixed">Войти</button>
        </form>
    <x-dashboard.error-box/>
    </x-dashboard.container>
@endsection
