@extends('dashboard.layout')
@section('content')
    <div class="container justify-content-center align-middle col-9 m-5">

        <div class="card" style="width: 50vw; height: 20vw;">
            <div class="card-body">
                <h5 class="card-title text-center">Admin</h5>
                <h6 class="text-center">Update account credentials?</h6>


                <section class="w-100 p-4 d-flex justify-content-center pb-4">
                    <form style="width: 22rem;">
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example1" class="form-control">
                            <label class="form-label" for="form2Example1" style="margin-left: 0px;">Username</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 88.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control">
                            <label class="form-label" for="form2Example2" style="margin-left: 0px;">Password</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
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
                        <div class="text-center"><button type="button" class="btn btn-primary btn-block mb-4">Update</button></div>
                        

              
                        
                    </form>
                </section>




                

            </div>
        </div>
    </div>
@endsection
