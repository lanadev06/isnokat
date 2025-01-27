<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isnokat | @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
</head>
<body class="bg-dark bg-opacity-10">
@include('app.nav')
<div class="container-xl">
    @yield('content')
</div>
@include('app.footer')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
