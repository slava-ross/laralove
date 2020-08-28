@extends('layouts.layout', ['title' => "404 ошибка. Вы попали не туда"])

@section('content')
    <div class="card">
        <h2 class="card-header">Ты здесь откуда? (Ошибка 404)</h2>
        <img src="{{ asset('img/404.jpg') }}" alt="Error_404">
    </div>
    <a href="/" class="btn btn-outline-primary">Срочно вернуться на главную</a>
@endsection
