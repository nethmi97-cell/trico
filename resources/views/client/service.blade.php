@php
    $data=[
        'main' => null,
        'page' => "Services",
        'previousPage' => 'Home',
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "Services | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="page-header text-center" style="background-image: url('{{ asset('images/page-header-bg.jpg') }}')">
    <div class="container">
        <h1 class="page-title">Services</h1>
    </div>
</div>

<div class="page-content mt-2">
    <div class="container" style="width: 1188px;">
        <div class="row">
            <div class="col-lg-12 text-center mb-5 mb-lg-5 my-5">
                <h2 class="title text-uppercase">Online Services For You</h2>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="service-card">
                        <img src="{{ asset('images/chatbot.jpg') }}" alt="">

                        <h4 class="text-center">Chat Bot</h4>

                        <p class="text-left"> Trigo, the artificial intelligence robot, provides customers with the opportunity to inquire any status of their cargo 24/7..</p>

                        <a class="text-left mt-2" href="{{ route('login') }}"> Still not Login ?</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <img src="{{ asset('images/online-paymentjpg.jpg') }}" alt="">

                        <h4 class="text-center">Online Payment</h4>

                        <p class="text-left">Stay safe and connected from home through the convenience of our digital platforms. Our digital platforms are there to help you with all frieght forwarding service charge </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <img src="{{ asset('images/online-tracking.jpeg') }}" alt="">

                        <h4 class="text-center">Tracking Online</h4>

                        <p class="text-left">Get everything you need to know to track your Cargo here. You can track by HBL number. You can track your cargo status at anytime through our protal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
