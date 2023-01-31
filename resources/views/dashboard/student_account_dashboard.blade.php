@extends('dashboard.student_layout')
@section('content')
    <div class="container justify-content-center col-9 py-5">

        <div class="row">
            <div class="col">

                <div class="col p-5 rounded bg-account shadow">
                    <h1 class="fw-bold">Ralph Cadelina</h1>
                    <h5 class="text-muted">Bachelor in Science and Computer Science Major
                        in Web Development</h5>

                    <div class="ps-5 mt-5">
                        <h3>Nationality</h3>
                        <h3>Gender</h3>
                        <h3>Phone Number</h3>
                        <h3>Birthdate</h3>
                        <h3>Email</h3>
                        <h3>Address</h3>
                    </div>

                </div>

                <div class="col p-5 mt-5 text-center rounded bg-account shadow">
                    <h4>For any changes to account details,
                        please contact the administrator.</h4>
                </div>

            </div>
            <div class="col p-5 rounded bg-account shadow">
                <h1 class="text-muted fw-bold">Contact Person</h1>
                <h2 class="fw-bold">Ralph Cadelina</h2>
                <div class="ps-5 mt-5">
                    <h3>Nationality</h3>
                    <h3>Gender</h3>
                    <h3>Phone Number</h3>
                    <h3>Email</h3>
                    <h3>Address</h3>
                    <br>
                    <h3>Relationship</h3>

                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <button class="mt-5 p-3 col-3 btn btn-primary shadow">
                Change Password
            </button>
        </div>
    </div>
@endsection
