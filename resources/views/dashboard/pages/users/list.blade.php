@section('title', 'Пользователи')

@extends('dashboard.layouts.default')

@section('content')
    <x-dashboard.container>
        <div class="container-content__headline-box">
            <h1>Пользователи</h1>
            <a href="{{route('users-create')}}" class="btn btn-default">Добавить</a>
        </div>
        <div>
            @include('components.dashboard.table.content.users')
        </div>
    </x-dashboard.container>
@endsection
