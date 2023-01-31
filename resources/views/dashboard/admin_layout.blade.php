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
    {{-- dashboard --}}
    <div class="row">
        {{-- Side Bar --}}
        {{-- <div class="d-flex col-3 flex-column flex-shrink-0 p-3 float-start" id="sidebar" style="width: 280px;">
            <div class="text-center my-5 ">
                <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
                    alt="Mindanao Kokusai Daigaku Logo">
                <h4 class="h4 mt-5">Hello Admin</h4>
                <p class="">Account ID: MKD105915</p>
            </div>

            <ul class="nav  nav-pills text-light flex-column mb-auto">
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3 active">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Add Course / Subjects
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Account Management
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Admin Account
                    </a>
                </li>

            </ul>


        </div> --}}
        @include('dashboard.admin_sidenav')
        {{-- End of Side Bar --}}

        {{-- container in the middle --}}
        @yield('content')
        {{-- End of container in the middle --}}

    </div>
</div>
</body>

</html>
