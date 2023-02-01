<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Mindanao Kokusai Daigaku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    {{-- <div class="container-fluid d-flex flex-column p-0 flex-md-row bg-secondary" id="layoutContainer">
        <nav class="navbar ms-0 navbar-expand-md d-flex flex-md-column dashboardContainer w-md-100" id="testNavbar">
            <a href="#">
                <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" alt="logo" class="rounded"
                    alt="Mindanao Kokusai Daigaku Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportContent" aria-controls="navbarSupportContent" aria-expanded="false"
                aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse w-100" id="navbarSupportContent">
                <ul class="navbar-nav w-100 d-flex flex-md-column text-center text-md-end" id="navbarNav">
                    <li class="nav-item my-1 hoverOfSidebar">
                        <a href="{{ route('dashboard') }}" class="nav-link link-light sideBarLink py-3">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item my-1 hoverOfSidebar">
                        <a href="{{ route('add_courses_subjects') }}" class="nav-link link-light sideBarLink py-3">
                            Add Course / Subjects
                        </a>
                    </li>
                    <li class="nav-item my-1 hoverOfSidebar">

                        <button class=" btn btn-toggle rounded collapsed nav-link link-light sideBarLink py-3"
                            data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            Account Management
                        </button>

                    </li>
                    <div class="collapse" id="home-collapse" style="">

                        <ul class=" w-100 p-1 btn-toggle-nav list-unstyled">
                            <li class="nav-item my-1 hoverOfSidebar">
                                <a class="dropdown-item my-2 ms-4 py-2"
                                    href="{{ route('student_account_management') }}">
                                    Manage Accounts
                                </a>
                            </li>
                            <li class="nav-item my-1 hoverOfSidebar">
                                <a class="dropdown-item my-2 ms-4 py-2"
                                    href="{{ route('change_password_account_management') }}">
                                    Change Password Req.
                                </a>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item my-1 hoverOfSidebar">
                        <a href="{{ route('pre_enrolled_students') }}" class="nav-link link-light sideBarLink py-3">
                            Pre Enrolled Students
                        </a>
                    </li>
                    <li class="nav-item my-1 hoverOfSidebar">
                        <a href="{{ route('admin_account') }}" class="nav-link link-light sideBarLink py-3">
                            Admin Account
                        </a>
                    </li>
                </ul>

            </div>

        </nav>

        <main class="ps-0 ps-md-5 flex-grow-1">
            @yield('content')
        </main>
    </div> --}}

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.sidenav')
            @yield('content')
            



        </div>
    </div>

    {{-- CDN bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
