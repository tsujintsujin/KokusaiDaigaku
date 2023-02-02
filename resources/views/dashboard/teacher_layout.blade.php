<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Mindanao Kokusai Daigaku</title>
    @include('cdn')
</head>

<body>
<div class="container-fluid">
    <div class="row">
        @include('dashboard.teacher_sidenav')
        @yield('content')
       

    </div>
</div>
</html>
