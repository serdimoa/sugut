@extends('admin__base')

@section('content')
    <h1>Вход в админку</h1>
    <article>
        <form method="post" action="/admin">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="login" id="login">
            <input type="text" name="password" id="password">
            <input type="submit" value="Авторизация">
        </form>
    </article>
@stop