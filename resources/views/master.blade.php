<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('task')</title>
    <style>
        .grd_back{
            background-image: repeating-linear-gradient(to right, red, green);
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}css/all.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css"/>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-success bg-danger grd_back">

    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
        </ul>
    </div>
</nav>



@yield('body')
<script src="{{asset('/')}}js/jquery-3.6.1.js"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
