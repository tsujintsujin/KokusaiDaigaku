<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')

    <title> @yield('title')</title>
    
    @livewireStyles
</head>

<body>
    <div class="container-fluid ps-0">
        <div class="row d-flex">
            <div class="col-2" id="navCol">
                @include('dashboard.admin_sidenav')
            </div>
            <div class="col d-flex justify-content-center p-0">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
