<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    @include('cdn')
    <title>Kokusai Daigaku</title>
</head>

<body>
    <button type="button" class="btn btn-secondary btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- Header -->
    <header class="container mt-4">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div class="col-md-2 col-lg-1">
                <img src="kokusai_logo.png">
            </div>
            <div class="col">
                <h3 class="ps-md-4 ps-lg-5 text-center text-md-start">ミンダナオ国際大学</h3>
                <h1 class="ps-md-4 ps-lg-5 text-center text-md-start"><span class="firstLetter"
                        style="color:#F6C400;">M</span>indanao <span class="firstLetter"
                        style="color:#F6C400;">K</span>okusai <span class="firstLetter"
                        style="color:#F6C400;">D</span>aigaku</h1>
                <h6 class="ps-md-4 ps-lg-5 text-center text-md-start">THE NO. 1 JAPANESE LANGUAGE COLLEGE IN THE
                    PHILIPPINES</h6>
            </div>
            {{-- <div class="col-3 title-address p-3 rounded-4 text-start">
                <div class="mt-3 d-flex">
                    <div class="col">
                        <small><i class="fa-solid fa-envelope"></i>
                            <span>EMAIL US AT</span>
                            <p>info@mkdph.com</p>
                        </small>
                        <small><i class="fa-solid fa-phone"></i>
                            <span>CALL US ON</span>
                            <p>+63822330013</p>
                        </small>
                        <small><i class="fa-solid fa-location-pin"></i>
                            <span>MAMAY ROAD, LANANG</span>
                            <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p>
                        </small>
                    </div>

                </div>
            </div> --}}


        </div>

        {{-- <div class="row d-flex flex-column align-content-end">
            <div class="col-md-7 ">
                <div class="mt-3 d-flex">
                    <div class="col-md-3">
                        <small><i class="fa-solid fa-envelope"></i>
                            <span>EMAIL US AT</span>
                            <p>info@mkdph.com</p>
                        </small>
                    </div>
                    <div class="col-md-3 ">
                        <small><i class="fa-solid fa-phone"></i>
                            <span>CALL US ON</span>
                            <p>+63822330013</p>
                        </small>
                    </div>
                    <div class="col-6">
                        <small><i class="fa-solid fa-location-pin"></i>
                            <span>MAMAY ROAD, LANANG</span>
                            <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p>
                        </small>
                    </div>
                </div>
            </div>

        </div> --}}
    </header>
    <nav
        class="container navbar navbar-expand-lg navbar-light sticky-top bg-opacity-75 bg-white d-flex justify-content-center text-center mt-5">
        <div class="text">
            <button class="w-100 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"> </i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left links -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="btn-login-list nav-item">
                        <a class="nav-link active" href="#">LOGIN</a>
                        <div class="nav-divider vr vr-blurry mx-5"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a>
                    </li>
                    <div class="nav-divider vr vr-blurry mx-5"></div>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('academics') ? 'active' : '' }}"
                            href="{{ route('academics') }}">ACADEMICS</a>
                    </li>
                    <div class="nav-divider vr vr-blurry mx-5"></div>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admission') ? 'active' : '' }}"
                            href="{{ route('admission') }}">ADMISSION</a>
                    </li>
                    <div class="nav-divider vr vr-blurry mx-5"></div>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('student_services') ? 'active' : '' }}"
                            href="{{ route('student_services') }}">STUDENT SERVICES</a>
                    </li>
                    <div class="nav-divider vr vr-blurry mx-5"></div>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">ABOUT</a>
                    </li>
                    <div class="nav-divider vr vr-blurry mx-5"></div>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">CONTACT</a>
                    </li>
                    <div class="nav-divider vr vr-blurry mx-5"></div>
                    <li class="nav-item btn-login-head">
                        @if (Auth::check())
                            @if (Auth::user()->role === 'admin')
                                <a class="nav-link" href="{{ route('admin') }}">DASHBOARD</a>
                            @elseif(Auth::user()->role === 'student')
                                <a class="nav-link" href="{{ route('student') }}">DASHBOARD</a>
                            @elseif(Auth::user()->role === 'teacher')
                                <a class="nav-link" href="{{ route('teacher') }}">DASHBOARD</a>
                            @endif
                        @else
                            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                        @endif
                    </li>
                    @if (Auth::check())
                        <div class="nav-divider vr vr-blurry mx-5"></div>
                        <li class="nav-item btn-login-head">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn nav-link shadow-none" role="button" type="submit">LOGOUT</button>
                            </form>
                    @endif
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- Navigation Menu (not responsive) -->
    {{-- <div class="container d-flex justify-content-center text-center mb-2">
        <h6 class="col-md-2">HOME</h6>
        <div class="vr border"></div>
        <h6 class="col-md-2">ACADEMICS</h6>
        <div class="vr border"></div>
        <h6 class="col-md-2">ADMISSION</h6>
        <div class="vr border"></div>
        <h6 class="col-md-2">STUDENT SERVICES</h6>
        <div class="vr border"></div>
        <h6 class="col-md-2">ABOUT US</h6>
        <div class="vr border"></div>
        <h6 class="col-md-2">CONTACT</h6>
    </div> --}}
    <!-- Landing Page Heading -->

    @yield('content')



    <!-- Footer -->
    <div class="bg-main-color mb-1" style="height:10px;"></div>
    <footer class="text-center text-white p-4 bg-main-color">


        <img class="mt-3" src="kokusai_logo.png">
        <p class="mt-3 h3">The No. 1 Japanese Language College in the Philippines</p>
        <div class="row d-flex justify-content-center">
            <div class="col-6 col-md-4 col-lg-2">
                <small><i class="fa-solid fa-envelope"></i>
                    <span>EMAIL US AT</span>
                    <p>info@mkdph.com</p>
                </small>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <small><i class="fa-solid fa-phone"></i>
                    <span>CALL US ON</span>
                    <p>+63822330013</p>
                </small>
            </div>
            <div class="col-12 col">
                <small><i class="fa-solid fa-location-pin"></i>
                    <span>ANGLIONGTO AVENUE, MAMAY ROAD, LANANG</span>
                    <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p>
                </small>
            </div>
        </div>
        <p>© 2023 Mindanao Kokusai Daigaku. All Rights Reserved</p>
    </footer>

    <script>
        AOS.init();
    </script>
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
