@extends('dashboard.layouts.layout')

@section('body')
    <main class="layout layout-main">
        <x-dashboard.sidebar/>
        <x-dashboard.header/>
        @section('content')
        @show
    </main>
@endsection

