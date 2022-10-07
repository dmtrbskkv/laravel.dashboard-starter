@section('title', 'Авторизация')

@extends('dashboard.layouts.authorization')

@section('content')
    <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_AUTH}}" fixedToCenter>
        <h1> Авторизация </h1>
        <form action="{{route('loginHandler')}}" method="POST">
            @csrf
            <div class="form-node">
                <label for="">Email:</label>
                <input name="email" placeholder="Email" type="text">
            </div>
            <div class="form-node">
                <label for="">Пароль:</label>
                <input name="password" placeholder="Пароль" type="password">
            </div>
            <button class="btn btn-default btn-fixed">Войти</button>
        </form>
    <x-dashboard.error-box/>
    </x-dashboard.container>
@endsection
