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
@section('title', "Register | Logistic Managemnet")
@section('meta_keys', "")
@section('meta_desc', "")


@section('content')
<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{ asset('images/login-bg.jpg') }}')">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="" role="tab" aria-controls="register-2" aria-selected="true">register</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="register-email-2">Name <span class="required">*</span></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span class="required">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password <span class="required">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">Confirm Password <span class="required">*</span></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    {{ __('Register') }}
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </div>

                            <div class="form-footer">
                                <a class="btn btn-link pr-0" href="{{ route('login') }}">
                                    {{ __('Already have a account ?') }}
                                </a>
                            </div>
                        </form>
                        <div class="form-choice">
                            <p class="text-center">or sign in with</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-register btn-g">
                                        <i class="icon-google"></i>
                                        register With Google
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-register  btn-f">
                                        <i class="icon-facebook-f"></i>
                                        register With Facebook
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
