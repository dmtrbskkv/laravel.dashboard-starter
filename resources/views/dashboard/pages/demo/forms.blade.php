@section('title', 'Формы')

@extends('dashboard.layouts.default')

@section('content')
    <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_FIXED}}">
        <h1>Элементы формы</h1>
        <p>Ниже предоставлены все доступные элементы формы</p>
        <form action="#" method="GET">
            <div class="form-node">
                <label for="example-1">Текстовое поле</label>
                <input id="example-1" placeholder="текст" type="text">
            </div>
            <div class="form-node">
                <label for="example-1">Текстовое поле</label>
                <input id="example-1" placeholder="Пароль" type="password">
            </div>
            <div class="form-node">
                <label for="">Поиск</label>
                <i class="bi bi-search"></i>
                <input id="example-1" placeholder="Введите запрос" type="search">
            </div>
            <div class="form-group">
                <div class="form-node">
                    <label for="example-2">Текстовое поле 2</label>
                    <input id="example-2" placeholder="текст" type="text">
                </div>
                <div class="form-node">
                    <label for="example-3">Текстовое поле 3</label>
                    <input id="example-3" placeholder="текст" type="text">
                </div>
                <div class="form-node">
                    <label for="example-4">Текстовое поле 3</label>
                    <input id="example-4" placeholder="текст" type="text">
                </div>
            </div>
            <div class="form-group form-group-start">
                <x-dashboard.custom-select
                    :values="[1=>'Первое значение', 'test'=>'Второе значение', 'this_is_test'=>'Третье значение']"
                    name="test"/>
                <x-dashboard.custom-select
                    :values="[1=>'Первое значение', 'test'=>'Второе значение', 'this_is_test'=>'Третье значение']"
                    name="test2"
                    placeholder="Выбрать тестовое значение"
                    format="radio"/>
            </div>
            <button class="btn btn-default">Кнопка</button>
            <button class="btn btn-default btn-fixed">Кнопка</button>
            <button class="btn btn-danger">Кнопка</button>
            <button class="btn btn-outline-danger">Кнопка</button>
        </form>
    </x-dashboard.container>
@endsection
