@extends('layout')
@section('content')
<div class="container-fluid">
<div class="row align-items-center mt-5">
    <div class="col text-title-lines ">
    </div>
    <div class="col text-center">
        <h1 class="fw-bold color-title">ADMISSION</h1>
    </div>
    <div class="col text-title-lines">
    </div>
</div>
</div>
<div class="container mt-5 mb-5">

    <div class="row">
        <div class="col-lg-6">
            <h3>FOR NEW STUDENTS/FRESHMEN:</h3>
            <ul class="justify-content">
                <li>Birth Certificate NSO/PSA (Original)</li>
                <li>Certificate of Good Moral Character</li>
                <li>Vaccination Card (photocopy)</li>
                <li>2 pcs. 2x2 photo w/ blue background</li>
                <li>2 pcs. 1x1 photo w/ blue background</li>
                <li>Form 9 (Senior High School Report Card)</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="text-center col-8 mt-5 p-3" style="background-color:#d8d5e0;">
                <h5>Note: Please submit all the original requirements to the MKD Registrar's Office.</h5>
            </div>
        </div>
    </div>
    
    <div class="mt-5 mb-5">
        <h3>ADDITIONAL REQUIREMENTS FOR TRANSFEREES</h3>
        <ul>
            <li>Honorable Dismissal</li>
            <li>Transcript of Records for Evaluation Purposes</li>
        </ul>
    </div>

    <div class="mb-5">
        <h3>FOR FOREIGN STUDENTS</h3>
            <div class="ms-5">
                <p>Please call the Admission Office for the Student Visa requirements one (1) month before the schedule of enrollment in every semester.</p>
                <p> Globe: 0977-7024-244<br>
                    Smart: 0961-5798-941<br>
                    Landline: (082) 233-0013 | 233-0081 | 285-6146
                </p>
                <ul>
                    <li>Report Card/Transcript of Records (English Translated)</li>
                    <li>Certificate of Good Moral Character/Certificate of Graduation or Completion (English Translated)</li>
                    <li>Vaccination Card (photocopy)</li>
                </ul>
                <h5>FOR DUAL CITIZEN:</h4>
                <ul>
                    <li>NSO Copy with Philippine Passport</li>
                </ul>
            </div>
    </div>

    <div class="mb-5">
        <h3>FOR OLD STUDENTS</h3>
        <ul>
            <li>Vaccination Card (photocopy)</li>
        </ul>
    </div>

</div>

    <div class="admission mb-5 container-fluid p-md-5 p-2 py-5"
        style="background-image: url({{ asset('/image/admission_bg.jpg') }})">
        <div class="row d-flex justify-content-end  align-content-center h-100">
            <div class="admission-text col-md-8 col-lg-4 text-end">
                <h1 class="fw-bold color-title"data-aos="fade-right"><span><img class="yellow-arrow me-3 mb-2"
                            src="{{ asset('image/left_arrow.png') }}" alt=""></span>PRE-ENROLL</h1>
                <hr>
                <h5 data-aos="fade-right" data-aos-delay="100">Please visit the MKD Facebook page for additional info on
                    the Online Enrollment for face-to-face schedules.</h5>
                <h5 data-aos="fade-right" data-aos-delay="200">For an advanced enrollment, you may click on the
                    button below. Please provide accurate email address
                    and contact number, so we can contact you directly
                    should you have any lacking requirements.</h5>
                <button class="btn btn-lg border-primary fs-6 py-3 mt-3" data-aos="fade-right" data-aos-delay="400"> Submit Form →</button>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

    <div class="container mb-5">
        <p>For more queries, please email mkdregistraroffice@gmail.com or you may call: </p>
        <div class="ms-5">   
            <p> Smart : 0961-5798-941<br>
                Globe : 0977-7024-244<br>
                Landline : (082) 233-0013 | 233-0018 | 285-6146</p>
        </div>
    </div>

@endsection