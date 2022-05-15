@php
    $data=[
        'main' => 'Main',
        'page' => "Logistic Managemnet",
        'previousPage' => "Logistic Managemnet",
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "Login | Logistic Managemnet")
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')
<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{ asset('images/login-bg.jpg') }}')">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab-2" data-toggle="tab" href="" role="tab" aria-controls="login-2" aria-selected="true">login</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="login-2" role="tabpanel" aria-labelledby="login-tab-2">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="login-email-2">Your email address *</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="login-password-2">Password *</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    {{ __('Login') }}
                                    <i class="icon-long-arrow-right"></i>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-footer">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pr-0" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <a class="btn btn-link pr-0" href="{{ route('register') }}">
                                    {{ __('Create New Account?') }}
                                </a>
                            </div>
                        </form>
                        <div class="form-choice">
                            <p class="text-center">or sign in with</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-g">
                                        <i class="icon-google"></i>
                                        Login With Google
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login  btn-f">
                                        <i class="icon-facebook-f"></i>
                                        Login With Facebook
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
