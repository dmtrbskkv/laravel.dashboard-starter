@section('title', 'Настроить пользователя')

@extends('dashboard.layouts.default')

@section('content')
    <form action="" method="POST">
        <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_SMALL}}">
            <h1>{{ isset($user) ? 'Редактировать польз.' : 'Добавление пользователя'}}</h1>
            @csrf
            <div class="form-node">
                <input name="email"
                       {{isset($user) ? 'disabled' : ''}}
                       placeholder="Почта" type="email"
                       value="{{isset($user) && $user ? $user->getAttribute('email') : ''}}">
            </div>
            <div class="form-node">
                <input name="password"
                       placeholder="{{ isset($user) ? 'Новый пароль' : 'Пароль' }}" type="text">
            </div>

            <div class="form-wrapper-checkbox">
                <input id="isClient" name="is_client"
                       {{ isset($user) && $user->getAttribute('is_client') ? 'checked' : ''}} type="checkbox">
                <label for="isClient">Клиент</label>
            </div>
        </x-dashboard.container>

        <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_SMALL}}">
            <x-dashboard.form-list-appending>
                <div class="form-node">
                    <select name="roles[]">
                        <option selected value="">Выбрать доступы</option>
                        <option value="{{ \App\Models\Role::ROLE_ACCESS_TYPE_USERS }}">Пользователи</option>
                    </select>
                </div>
                <button class="btn btn-danger form-list-appending__button-remove" type="button">Удалить</button>
            </x-dashboard.form-list-appending>
        </x-dashboard.container>

        <x-dashboard.container containerSize="{{\App\View\Components\Dashboard\Container::CONTAINER_SIZE_SMALL}}">
            <div class="form-buttons form-buttons-space-between">
                <button class="btn btn-default">
                    @if(isset($user))
                        Обновить
                    @else
                        Сохранить
                    @endif
                </button>
                <a class="btn btn-outline-danger" href="{{route('users')}}">Отмена</a>
            </div>
            <x-dashboard.error-box/>
        </x-dashboard.container>
    </form>
@endsection
