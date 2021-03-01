<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!!  Vite::asset('/js/main.jsx', ['react']) !!}
    <title>Laravel</title>
</head>
<body>
@yield('body')
</body>
</html>
