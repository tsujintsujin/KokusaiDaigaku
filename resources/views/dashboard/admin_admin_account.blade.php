@extends('dashboard.admin_layout')
@section('content')
    <div class="container justify-content-center align-self-center col-5 py-5 rounded-top-left-1 rounded-top-right-1 ">

        <div class="d-flex row rounded-top text-center" id="dashboardContainers" style="background-color: #eeefff">
            <div class="m-0 p-0 ">
                <h5 class="dashboardContainer rounded-top-left-1 h-100 text-center">Admin</h5>

            </div>
            <h5 class="text-center mt-3">Update account credentials?</h5>

            <form class="text-center" >
                <!-- Username input -->
                <div class="form-outline">
                    <input type="text" id="form2Example1" class="form-control">
                    <label class="form-label fw-bold" for="form2Example1" style="margin-left: 0px;">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline">
                    <input type="password" id="form2Example2" class="form-control">
                    <label class="form-label fw-bold" for="form2Example2" style="margin-left: 0px;">Password</label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 64px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4 justify-content-center">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                checked="">
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Update button -->
                <div class="justify-content-center"><button type="button" class="btn btn-primary btn-block mb-4">Update</button></div>




            </form>

        </div>
    </div>
@endsection