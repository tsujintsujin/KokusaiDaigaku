@extends('layout')
@section('content')
    <div class="hero container-fluid d-flex vh-100" style="background-image: url({{ asset('image/hero_bg.jpg') }})">
        <div class="col-md-1"></div>
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <h1 class="fw-bold">The No. 1</h1>
                <h1 class="fw-bold my-2">Japanese Language College</h1>
                <h1 class="fw-bold mb-4">In The Philippines</h1>
                <button class="btn btn-lg border-primary fs-6 py-3"> Read More →</button>
            </div>
        </div>
    </div>

    <!-- Mission, Philosophy, Vision -->
    <div class="container my-5 text-center text-dark">
        <div class="row">
            <div class="col-md-4 p-5">
                <h3 class="fw-bold">MISSION</h3>
                <p class="fst-italic mpv-content"><span class="h2">W</span>e aim to provide a diverse range of
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
                    our endeavors.</p>
            </div>
            <div class="col-md-4 p-5">
                <h3 class="fw-bold">PHILOSOPHY</h3>
                <p class="fst-italic mpv-content"><span class="h2">T</span>he College is dedicated to providing
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
                    the world.</p>
            </div>
            <div class="col-md-4 p-5">
                <h3 class="fw-bold">VISION</h3>
                <p class="fst-italic mpv-content"><span class="h2">A</span>n academic community proficient in
                    Japanese Language, equipped with
                    multicultural sensitivity, strong work
                    ethics, and global competencies is
                    essential in today's globalized world.
                    They are well-prepared for the
                    challenges and opportunities of the
                    21st century, and will be able to make
                    a positive impact in their fields and in
                    the world at large.</p>
            </div>
        </div>
    </div>


    <!-- Section 2 -->
    <div class="admission mb-5 vh-50 container-fluid p-5"
        style="background-image: url({{ asset('/image/admission_bg.jpg') }})">
        <div class="row d-flex justify-content-end  align-content-center h-100">
            <div class="col-md-4 text-end">
                <h1 class="fw-bold color-title"><span><img class="yellow-arrow me-3"
                            src="{{ asset('image/left_arrow.png') }}" alt=""></span>ADDMISSION</h1>
                <hr>
                <h5>Please visit the MKD Facebook page for additional info on
                    the Online Enrollment for face-to-face schedules.
                    For an advanced enrollment, you may click on the
                    button below. Please provide accurate email address
                    and contact number, so we can contact you directly
                    should you have any lacking requirements.</h5>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="academics mt-5 pt-5">
        <h1 class="text-title">
            <span class="title-lines fw-bold">
                ACADEMICS
            </span>
        </h1>
   
    <div class="container text-center col-md-4 mt-5">
        <p class="fst-italic" style="text-align:justify; text-justify:interword;">"MKD desires to provide future teachers a
            rewarding
            learning experience and get maximum benefits from their
            experiential learning courses with the end in view of
            transferring quality basic education for all Filipino
            children, which is the country's ultimate goal."
        </p>
        <p class="text-end"><strong>Laura V. Cespon, LPT, Ed. D.</strong> | Education Department Head</p>
    </div>
    <div class="container-fluid  px-5 mt-5 mb-5">
        <div class="color-title row text-center">
            <div class="col-sm">
                <img src="{{asset('/image/academics-1.png') }}" width="200" height="200">
                <p class="fw-bold">International Studies Department</p>
            </div>
            <div class="col-sm">
                <img src="{{asset('/image/academics-2.png') }}" width="200" height="200">
                <p class="fw-bold">Human Services Department</p>
            </div>
            <div class="col-sm">
                <img src="{{asset('/image/academics-3.png') }}" width="200" height="200">
                <p class="fw-bold">Education Department</p>
            </div>
            <div class="col-sm">
                <img src="{{asset('/image/academics-4.png') }}" width="200" height="200">
                <p class="fw-bold">Information System Department</p>
            </div>
            <div class="col-sm">
                <img src="{{asset('/image/academics-5.png') }}" width="150" height="200">
                <p class="fw-bold">Entrepreneurship Department</p>
            </div>
        </div>
    </div>
    <hr>

    <!-- section 4 -->
    <div class="container mt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm" style="text-align:justify; text-justify:interword;">
                    <h1 class="fw-bold" style="color:#393280;">SCHOLARSHIPS</h1>
                    <h6 style="color:#393280;">ACADEMIC SCHOLARSHIPS AND GRANT-IN-AID</h6>
                    <p class="fw-bold">The College acknowledges top-performing students
                        every semester who are granted discounts on their
                        tuition fees. In order to become a Dean's Lister,
                        students must carry at least 18 units every semester
                        and obtain the required Weighted Percentage
                        Average (WPA). Students who are financially
                        challenged but are excellent in academics
                        are also recommended for foster parenting by
                        Japanese Nationals.</p>
                </div>
                <div class="col-sm mt-5">
                    <h4 class="mx-4" style="color:#393280;">Other Scholarships Offered</h4>
                    <ul class="fw-bold" style="text-align:justify; text-justify:interword;">
                        <li>High School Graduates with Academic Honors</li>
                        <li>High School Graduates with Academic Honors</li>
                        <li>High School Graduates with Academic Honors</li>
                        <li>High School Graduates with Academic Honors</li>
                        <li>High School Graduates with Academic Honors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
