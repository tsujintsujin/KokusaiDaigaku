<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>Kokusai Daigaku</title>
</head>

<body>
    <!-- Header -->
    <header class="container mt-4">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div class="col-md-1">
                <img src="kokusai_logo.png">
            </div>
            <div class="col-md-10">
                <h1 class="ps-4"><span style="color:#F6C400;">M</span>indanao <span
                        style="color:#F6C400;">K</span>okusai <span style="color:#F6C400;">D</span>aigaku</h1>
                <h6 class="ps-4">THE NO. 1 JAPANESE LANGUAGE COLLEGE IN THE PHILIPPINES</h6>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white" style="background-color:#393280;">Login</button>
            </div>
            
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
                    <div class="col">
                        <small><i class="fa-solid fa-location-pin"></i>
                            <span>ANGLIONGTO AVENUE, MAMAY ROAD, LANANG</span>
                            <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p>
                        </small>
                    </div>
                </div>
            </div>

        </div> --}}
    </header>

    <hr class="hr">
    <!-- Navigation Menu (not responsive) -->
    <div class="container d-flex justify-content-center text-center mb-2">
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
    </div>
    <!-- Landing Page Heading -->



    @yield('content')



    
    <!-- Footer -->
    <div class="bg-main-color mb-1" style="height:10px;">s</div>
    <footer class="text-center text-white p-4 bg-main-color">


        <img class="mt-3" src="kokusai_logo.png">
        <p class="mt-3 h3">The No. 1 Japanese Language College in the Philippines</p>
        <div class="d-flex justify-content-center gap-5">
            <small><i class="fa-solid fa-envelope"></i>
                <span>EMAIL US AT</span>
                <p>info@mkdph.com</p>
            </small>
            <small><i class="fa-solid fa-phone"></i>
                <span>CALL US ON</span>
                <p>+63822330013</p>
            </small>
            <small><i class="fa-solid fa-location-pin"></i>
                <span>ANGLIONGTO AVENUE, MAMAY ROAD, LANANG</span>
                <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p>
            </small>
        </div>
        <p>© 2023 Mindanao Kokusai Daigaku. All Rights Reserved</p>
    </footer>
</body>

</html>
