<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>
@include('partials.nav')
<h1>@yield('title')</h1>
@yield('content')
</body>
</html>
