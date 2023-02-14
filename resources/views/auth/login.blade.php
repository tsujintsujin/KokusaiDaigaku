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
                            <img src="{{ asset('image/logo.png') }}" class="rounded loginLogo position-absolute"  alt="Mindanao Kokusai Daigaku Logo">
                            <div class="col-md-8">
                                <input placeholder="{{ __('ID') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 d-flex justify-content-center">
                            <div class="col-md-8">
                                <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0 d-flex justify-content-center  ">
                            <div class="col-10 mt-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary col-10 py-3">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col d-flex justify-content-center mt-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-sm fw-bold text-decoration-none text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
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
@endsection
