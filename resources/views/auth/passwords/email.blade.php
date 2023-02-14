@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center d-flex vh-100 align-content-center">
        <div class="col-md-5 position-relative">
                   
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3 mt-5 pt-5 d-flex justify-content-center">
                            
                            <img src="{{ asset('image/logo.png') }}" class="position-absolute"  alt="Mindanao Kokusai Daigaku Logo"
                            style="width: 200px !important;
                            z-index: 100;
                            left: 0;
                              right: 0;
                              margin: 0 auto;
                              top:-100px;">

                            <div class="col-md-8">
                                <input placeholder="{{ __('ID') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                      

                        <div class="row mb-0 d-flex justify-content-center ">
                            <div class="col-10 d-flex justify-content-center mt-5">
                                <button type="submit" class="btn btn-primary col-10 py-3">
                                    {{ __('Request Reset') }}
                                </button>

                                
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col d-flex justify-content-center mt-3">
                                @if (Route::has('login'))
                                    <a class="btn btn-link text-sm fw-bold text-decoration-none text-muted" href="{{ route('login') }}">
                                        {{ __('Login Instead') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
