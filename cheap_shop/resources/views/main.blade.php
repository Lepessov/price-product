<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главное</title>
</head>
<body>
    <a href="{{route('register')}}">Регистрация</a>
    <a href="{{route('login')}}">Войти</a>
    <a href="{{route('logout')}}">Уйти</a>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit">Выйти</button>
    </form>
    <a href="{{route('product.index')}}">do you want it</a>
</body>
</html>
