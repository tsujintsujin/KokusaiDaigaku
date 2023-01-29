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
    <header class="container-fluid mt-3">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="col-md-1 d-flex align-items-center mb-2 mb-lg-0 text-white text-deocoration-none">
                <img src="kokusai_logo.png">
            </a>
            <div class="col-md-10">
                <h1 class=""><span style="color:#F6C400;">M</span>indanao <span style="color:#F6C400;">K</span>okusai <span style="color:#F6C400;">D</span>aigaku</h1>
                <h6 class="">THE NO. 1 JAPANESE LANGUAGE COLLEGE IN THE PHILIPPINES</h6>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white" style="background-color:#393280;">Login</button>
            </div>
            <div class="col-md-12 d-flex justify-content-end mt-n3">
                <div class="me-5">
                    <small><i class="fa-solid fa-envelope"></i>
                    <span>EMAIL US AT</span>
                    <p>info@mkdph.com</p></small>
                </div>
                <div class="me-5">
                    <small><i class="fa-solid fa-phone"></i>
                    <span>CALL US ON</span>
                    <p>+63822330013</p></small>
                </div>
                <div class="me-5">
                    <small><i class="fa-solid fa-location-pin"></i>
                    <span>ANGLIONGTO AVENUE, MAMAY ROAD, LANANG</span>
                    <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p></small>
                </div>
            </div>
        </div>
    </header>
    <hr class="mt-n2 hr">

    <!-- Navigation Menu (not responsive) -->
   <div class="col d-flex justify-content-center text-center">
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



 



   <!-- Mission, Philosophy, Vision -->
    <div class="container mt-5 text-center text-dark">
        <div class="row">
            <div class="col-md-4">
                <h3>MISSION</h3>
                <p class="fst-italic" style="text-align:justify; text-justify:interword;"><span class="h2">W</span>e aim to provide a diverse range of 
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
            <div class="col-md-4">
                <h3>PHILOSOPHY</h3>
                <p class="fst-italic" style="text-align:justify; text-justify:interword;"><span class="h2">T</span>he College is dedicated to providing
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
            <div class="col-md-4">
                <h3>VISION</h3>
                <p class="fst-italic" style="text-align:justify; text-justify:interword;"><span class="h2">A</span>n academic community proficient in
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
    <div class="mb-5" 
    style="background: url({{URL::asset('/image/2ndpicx.jpg')}});
    height: 50vh">
    </div>

    <!-- Section 3 -->
   <div>
        <h1 style="
        color:#393280;
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid #F6C400; 
        line-height: 0.1em;
        margin: 10px 0 20px;
        ">
        <span style=" 
        background:#fff; 
        padding:0 80px;">
        ACADEMICS
        </span>
    </h1>
   </div>
   <div class="container text-center col-md-4 mt-5">
    <p class="fst-italic" style="text-align:justify; text-justify:interword;">"MKD desires to provide future teachers a rewarding 
        learning experience and get maximum benefits from their
        experiential learning courses with the end in view of 
        transferring quality basic education for all Filipino 
        children, which is the country's ultimate goal."
    </p>
    <p class="text-end"><strong>Laura V. Cespon, LPT, Ed. D.</strong> | Education Department Head</p>
   </div>
   <div class="container mt-5 mb-5">
        <div class="row text-center" style="color:#393280;">
            <div class="col-sm">
            <img src="{{URL::asset('/image/academics-1.png')}}" width="200" height="200">
            <p class="fw-bold">International Studies Department</p>
            </div>
            <div class="col-sm">
            <img src="{{URL::asset('/image/academics-2.png')}}" width="200" height="200">
            <p class="fw-bold">Human Services Department</p>    
            </div>
            <div class="col-sm">
            <img src="{{URL::asset('/image/academics-3.png')}}" width="200" height="200">
            <p class="fw-bold">Education Department</p>   
            </div>
            <div class="col-sm">
            <img src="{{URL::asset('/image/academics-4.png')}}" width="200" height="200">
            <p class="fw-bold">Information System Department</p>
            </div>
            <div class="col-sm">
            <img src="{{URL::asset('/image/academics-5.png')}}" width="150" height="200">
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
                        <li>Academic Scholarship (Dean's Lister)</li>
                        <li>MKD Grant-in-Aid Program</li>
                        <li>PNJKIS Alumni Grant</li>
                        <li>Board of Trustees/Employee Tuition Fee Discount</li>
                        <li>Descendant Discount</li>
                        <li>MKD SATOGO Program</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- section 5 -->
    <div class="container mb-5">
        <h1 class="mt-5 fw-bold" style="color:#393280;">RECENT EVENTS</h1>
        <div class="mt-4 d-flex">
            <div class="col-md-9 mb-3">
                <img src="{{URL::asset('/image/section5img.png')}}" class="img-fluid">
            </div>
            <div class="col-sm-3">
                <p class="h4 text-dark">One Heart.</p>
                <p class="h4 text-dark">One Community.</p>
                <p class="h4 text-dark">One MKD.</p>
                <p class="mt-2" style="text-align:justify; text-justify:interword;">
                    Today marks the 20th Anniversary of
                    Mindanao Kokusai Daigaku. To commemorate
                    the humble beginnings of the institution,
                    may we move forward with hope and glory 
                    for the years to come!
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-2">
                <div class="col-sm-6">
                    <img src="{{URL::asset('/image/section5_1.png')}}" class="img-fluid mb-3">
                </div>
                <div class="col-sm-6">
                    <img src="{{URL::asset('/image/section5_2.png')}}" class="img-fluid mb-3">
                </div>
                <div class="col-sm-6">
                    <img src="{{URL::asset('/image/section5_3.png')}}" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <img src="{{URL::asset('/image/section5_4.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- FAQ'S -->
    <div class="container fst-italic mb-5">
        <h1 class="mt-5 mb-5 text-center">FAQ'S</h1>
        <div class="row">
            <div class="col">
                <p class="blockquote-footer fs-5">What a courses do you offer?</p>
                <p>INTERNATIONAL STUDIES Major in Japanese Language & Studies</p>
                <p>HUMAN SERVICES Major in Care of Older Persons</p>
                <p>INFORMATION SYSTEMS</p>
                <p>SECONDARY EDUCATION Major in :</p>
                    <ul>
                        <li>English</li>
                        <li>Mathematics</li>
                        <li>Science</li>
                        <li>Special Needs Education</li>
                        <li>Early Childhood Education</li>
                    </ul>
            </div>
            <div class="col">
                <p class="blockquote-footer fs-5 fst-italic" style="text-align:justify; text-justify:interword;">Can I enroll even if I am not Filipino or Japanese?</p>
                <p>Yes, you can definitely enroll regardless of 
                your nationality. In fact, we have several nationalities 
                enrolled in the school. Aside from Filipino and 
                Japanese, we also have Americans, Indians and Arabs.
                </p>
        
            </div>
        </div>
    </div>






   <!-- Footer -->
   <footer class="text-center text-white" style="background-color:#393280;">
    <img class="mt-3" src="kokusai_logo.png">
    <p class="mt-3 h3">The No. 1 Japanese Language College in the Philippines</p>
    <div class="d-flex justify-content-center gap-5">
        <small><i class="fa-solid fa-envelope"></i>
        <span>EMAIL US AT</span>
        <p>info@mkdph.com</p></small>
        <small><i class="fa-solid fa-phone"></i>
        <span>CALL US ON</span>
        <p>+63822330013</p></small>
        <small><i class="fa-solid fa-location-pin"></i>
        <span>ANGLIONGTO AVENUE, MAMAY ROAD, LANANG</span>
        <p>DAVAO CITY, DAVAO DEL SUR, PHILIPPINES</p></small>
    </div>
    <p>© 2023 Mindanao Kokusai Daigaku. All Rights Reserved</p>
    </footer>
</body>
</html>