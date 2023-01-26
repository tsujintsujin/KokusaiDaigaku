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
        @include('dashboard.sidenav')
        {{-- End of Side Bar --}}

        {{-- container in the middle --}}
        @yield('content')
        {{-- End of container in the middle --}}

    </div>

    {{-- bootstrap cdn  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- changing the background color of sidebar link --}}
    <script>
        // const sideBarLink = document.querySelectorAll(".sideBarLink")
        // sideBarLink.forEach(sideBarLink => {
        //     sideBarLink.addEventListener('click', () => {
        //         sideBarLink.style = "background-color : #886a43;"
        //     })
        // });
    </script>
</body>

</html>
