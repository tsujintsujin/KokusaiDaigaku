@extends('layout')
@section('content')
    <div class="hero container-fluid d-flex vh-100" style="background-image: url({{ asset('image/hero_bg.jpg') }})">
        <div class="ps-2 ms-2 mb-lg-5 pb-lg-5 row">
            <div class="col d-flex justify-content-center align-items-center h-100">
                <div class="col ps-lg-5 ms-lg-5 ps-md-2 ms-md-2">
                    <h1 class="fw-bold">The No. 1</h1>
                    <h1 class="fw-bold">Japanese Language College</h1>
                    <h1 class="fw-bold mb-4">In The Philippines</h1>
                    <button class="btn btn-lg border-primary fs-6 py-3"> Read More →</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission, Philosophy, Vision -->
    <div class="container my-5 text-center text-dark d-flex align-items-center">
        <div class="row">
            <div class="col-lg-4 p-5">
                <h2 class="fw-bold color-title ">MISSION</h2>
                <h5 class="fst-italic justify-content"><span class="h2 color-highlight">W</span>e aim to provide a diverse
                    range of
                    learning opportunities and activities in
                    Japanese, English, and Filipino
                    languages, as well as other
                    competencies. Our goal is to produce
                    quality and relevant research outputs,
                    while also promoting social justice and
                    peace through exposure to diverse
                    cultures. Additionally, we strive to
                    instill a culture of morality, civic
                    consciousness, gender sensitivity, and
                    corporate social responsibility in all of
                    our endeavors.</h5>
            </div>
            <div class="col-lg-4 p-5">
                <h2 class="fw-bold color-title">PHILOSOPHY</h2>
                <h5 class="fst-italic justify-content"><span class="h2 color-highlight">T</span>he College is dedicated to
                    providing
                    a holistic education, and aims to
                    produce graduates who are well-rounded
                    individuals. Our goal is to
                    empower students to become active
                    and engaged members of society,
                    equipped to face any global problem.
                    To achieve this, we provide quality
                    education and a wide range of learning
                    opportunities. We also focus on
                    developing the whole person, including
                    their emotional, social, and ethical
                    abilities, in order to create graduates who have the knowledge, skills, and
                    values to make a positive impact on
                    the world.</>
            </div>
            <div class="col-lg-4 p-5">
                <h2 class="fw-bold color-title">VISION</h2>
                <h5 class="fst-italic justify-content"><span class="h2 color-highlight">A</span>n academic community
                    proficient in
                    Japanese Language, equipped with
                    multicultural sensitivity, strong work
                    ethics, and global competencies is
                    essential in today's globalized world.
                    They are well-prepared for the
                    challenges and opportunities of the
                    21st century, and will be able to make
                    a positive impact in their fields and in
                    the world at large.</h5>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="admission mb-5 container-fluid p-md-5 p-2 py-5"
        style="background-image: url({{ asset('/image/admission_bg.jpg') }})">
        <div class="row d-flex justify-content-end  align-content-center h-100">
            <div class="admission-text col-md-8 col-lg-4 text-end">
                <h1 class="fw-bold color-title"><span><img class="yellow-arrow me-3 mb-2"
                            src="{{ asset('image/left_arrow.png') }}" alt=""></span>ADMISSION</h1>
                <hr>
                <h5>Please visit the MKD Facebook page for additional info on
                    the Online Enrollment for face-to-face schedules.</h5>
                <h5>For an advanced enrollment, you may click on the
                    button below. Please provide accurate email address
                    and contact number, so we can contact you directly
                    should you have any lacking requirements.</h5>
                <button class="btn btn-lg border-primary fs-6 py-3 mt-3"> Submit Form →</button>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class=" mt-5 pt-5">

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col text-title-lines ">
                </div>
                <div class="col text-center">
                    <h1 class="fw-bold color-title">ACADEMICS</h1>
                </div>
                <div class="col text-title-lines">
                </div>
            </div>
        </div>






        <div class="container text-center col-8 mt-5">
            <p class="fst-italic" style="text-align:justify; text-justify:interword;">"MKD desires to provide future
                teachers a
                rewarding
                learning experience and get maximum benefits from their
                experiential learning courses with the end in view of
                transferring quality basic education for all Filipino
                children, which is the country's ultimate goal."
            </p>
            <p class="text-end"><strong>Laura V. Cespon, LPT, Ed. D.</strong> | Education Department Head</p>
        </div>
        <div class="container my-5 py-5 ">
            <div class="color-title row text-center">
                <div class="col-sm">
                    <img src="{{ asset('/image/academics-1.png') }}" width="200" height="200">
                    <p class="fw-bold">International Studies Department</p>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('/image/academics-2.png') }}" width="200" height="200">
                    <p class="fw-bold">Human Services Department</p>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('/image/academics-3.png') }}" width="200" height="200">
                    <p class="fw-bold">Education Department</p>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('/image/academics-4.png') }}" width="200" height="200">
                    <p class="fw-bold">Information System Department</p>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('/image/academics-5.png') }}" width="150" height="200">
                    <p class="fw-bold">Entrepreneurship Department</p>
                </div>
            </div>
        </div>
        <hr class="hr">

        <!-- section 4 -->
        <div class="container my-5 py-5">
            <div class="row mb-5">
                <div class="col justify-content">
                    <h1 class="fw-bold color-title">SCHOLARSHIPS<span><img class="yellow-arrow ms-3 mb-2"
                                src="{{ asset('image/right_arrow.png') }}" alt=""></span></h1>
                    <h5 class="fw-bold color-title">ACADEMIC SCHOLARSHIPS AND GRANT-IN-AID</h5>
                    <p>The College acknowledges top-performing students
                        every semester who are granted discounts on their
                        tuition fees. In order to become a Dean's Lister,
                        students must carry at least 18 units every semester
                        and obtain the required Weighted Percentage
                        Average (WPA). Students who are financially
                        challenged but are excellent in academics
                        are also recommended for foster parenting by
                        Japanese Nationals.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col mt-5">
                    <h5 class="mx-4 color-title fw-bold">Other Scholarships Offered</h5>
                    <ul class="justify-content">
                        <li>Board of Trustees/Employee Tuition Fee Discount</li>
                        <li>High School Graduates with Academic Honors</li>
                        <li>Academic Scholarship (Dean’s Lister)</li>
                        <li>MKD Grant-in-Aid Program</li>
                        <li>PNJKIS Alumni Grant</li>
                        <li>Descendant Discount</li>
                        <li>MKD SATOGO Program</li>

                    </ul>
                </div>
            </div>
        </div>
        <hr class="hr">
        <div>
            <div class="container">
                <h1 class="fw-bold color-title ">RECENT EVENTS<span><img class="yellow-arrow ms-3 s"
                            src="{{ asset('image/right_arrow.png') }}" alt=""></span>
                </h1>
            </div>
            <div class="container mb-5 pb-5 p-0">
                <div class="row d-flex m-0 p-0">
                    <br>
                    <div class="px-0 mx-0 col-lg-8 ">
                        <div id="myCarousel" class="carousel slide" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-between vh-50 hero my-3"
                                        style="background-image: url({{ asset('image/carousel_1.jpg') }})">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-between vh-50 hero my-3"
                                        style="background-image: url({{ asset('image/carousel_2.jpg') }})">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-lg-end text-center">
                        <h1 class="fw-bold mt-5 "> One Heart.<br>One Community.<br>One MKD. </h1>
                        <br>
                        <h5 class="mb-5">Today marks the 20th Anniversary of Mindanao Kokusai Daigaku.
                            To commemorate the humble beginnings of the institution,
                            may we move forward with hope and glory for the years to come!</h5>
                        <div class="mt-auto">
                            <button class=" text-white btn rounded-circle bg-secondary-color btn-carousel-controller"
                                type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                🡠
                            </button>
                            <button class=" text-white btn rounded-circle bg-secondary-color btn-carousel-controller"
                                type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                🡢
                            </button>
                        </div>

                    </div>
                </div>



                <div class="container mt-3 pt-3">
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="col-lg-5 p-0 m-3 card">
                            <div class="card text-white border-0 mask">
                                <img src="{{ asset('image/carousel_1.jpg') }}" class="card-img" alt="Stony Beach" />
                            </div>
                            <div class="overlay-text d-flex flex-column justify-content-end">
                                <h5 class="card-title "> One Heart.
                                    One Community.
                                    One MKD.
                                </h5>
                                <p class="card-text">
                                    Today marks the 20th Anniversary of Mindanao Kokusai Daigaku. To commemorate the humble
                                    beginnings of the institution, may we move forward with hope and glory for the years to
                                    come!
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0 m-3 card">
                            <div class="overlay-text d-flex flex-column justify-content-end">
                                <h5 class="card-title "> One Heart.
                                    One Community.
                                    One MKD.
                                </h5>
                                <p class="card-text">
                                    Today marks the 20th Anniversary of Mindanao Kokusai Daigaku. To commemorate the humble
                                    beginnings of the institution, may we move forward with hope and glory for the years to
                                    come!
                                </p>
                            </div>
                            <div class="card text-white border-0 mask">
                                <img src="{{ asset('image/carousel_1.jpg') }}" class="card-img" alt="Stony Beach" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="col-lg-5 p-0 m-3 card">
                            <div class="card text-white border-0 mask">
                                <img src="{{ asset('image/carousel_1.jpg') }}" class="card-img" alt="Stony Beach" />
                            </div>
                            <div class="overlay-text d-flex flex-column justify-content-end">
                                <h5 class="card-title "> One Heart.
                                    One Community.
                                    One MKD.
                                </h5>
                                <p class="card-text">
                                    Today marks the 20th Anniversary of Mindanao Kokusai Daigaku. To commemorate the humble
                                    beginnings of the institution, may we move forward with hope and glory for the years to
                                    come!
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0 m-3 card">
                            <div class="overlay-text d-flex flex-column justify-content-end">
                                <h5 class="card-title "> One Heart.
                                    One Community.
                                    One MKD.
                                </h5>
                                <p class="card-text">
                                    Today marks the 20th Anniversary of Mindanao Kokusai Daigaku. To commemorate the humble
                                    beginnings of the institution, may we move forward with hope and glory for the years to
                                    come!
                                </p>
                            </div>
                            <div class="card text-white border-0 mask">
                                <img src="{{ asset('image/carousel_1.jpg') }}" class="card-img" alt="Stony Beach" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="container-fluid mt-5 pt-5">
                    <div class="row align-items-center">
                        <div class="col text-title-lines ">
                        </div>
                        <div class="col text-center">
                            <h1 class="fw-bold color-title">FAQ’s</h1>
                        </div>
                        <div class="col text-title-lines">
                        </div>
                    </div>
                </div>
                <div class="faq container pb-5 mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-5 pt-5 px-5">
                            <div class="row align-items-center">
                                <div class="col-2 text-title-lines">
                                </div>
                                <div class="col">
                                    <h3 class="fw-bold fst-italic text-muted">What a courses do you offer?</h3>
                                </div>
                            </div>
                            <br>
                            <h5 class="fst-italic justify-content">
                                INTERNATIONAL STUDIES Major in Japanese Language & Studies
                                HUMAN SERVICES Major in Care of Older Persons
                                INFORMATION SYSTEMS
                                SECONDARY EDUCATION Major in:
                                <h5>&emsp;&emsp;English</h5>
                                <h5>&emsp;&emsp;Mathematics</h5>
                                <h5>&emsp;&emsp;Science</h5>
                                <h5>&emsp;&emsp;Special Needs Education</h5>
                                <h5>&emsp;&emsp;Early Childhood Education</h5>
                            </h5>
                        </div>
                        <div class="col-12 col-lg-6 mt-5 pt-5 px-5">
                            <div class="row align-items-center">
                                <div class="col-2 text-title-lines">
                                </div>
                                <div class="col">
                                    <h3 class="fw-bold fst-italic text-muted">Can I enroll even if I am not Filipino or
                                        Japanese?
                                </div>
                            </div>
                            </h3>
                            <br>
                            <h5 class="fst-italic justify-content">
                                Yes, yot, we have several nationalities enrolled in the school.
                                Asu can definitely enroll regardless of your nationality.
                                In facide from Filipino and Japanese, we also have Americans, Indians and Arabs. </h5>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
