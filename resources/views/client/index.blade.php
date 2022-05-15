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
@section('title', "Home | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="intro-slider-container mb-4">
    <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
            "nav": false,
            "dots": true,
            "responsive": {
                "992": {
                    "nav": false,
                    "dots": false
                }
            }
        }'>
        <div class="intro-slide" style="background-image: url({{ asset('images/cover.jpeg') }})">
            <div class="container intro-content">
                <h3 class="intro-subtitle font-weight-normal text-warning">From Here</h3>
                <h1 class="intro-title font-weight-normal text-white">You Are <br>Almost There</h1>
                <h1 class="intro-title intro-rectangle text-uppercase font-weight-bold">Real Solution, <br> &nbsp; &nbsp; Real Results.</h1>
            </div>
        </div>

        {{-- <div class="intro-slide" style="background-image: url({{ asset('images/demo/slider/slide-2.jpg') }})">
            <div class="container intro-content">
                <h3 class="intro-subtitle text-primary">all at 50% off</h3>
                <h1 class="intro-title text-white">The Most Beautiful <br>Novelties In Our Shop</h1>

                <a href="category.html" class="btn btn-outline-primary-2 min-width-sm">
                    <span>SHOP NOW</span>
                    <i class="icon-long-arrow-right"></i>
                </a>
            </div>
        </div> --}}
    </div>

    <span class="slider-loader"></span>
</div>


<div class="icon-boxes-container bg-transparent">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="lab la-stripe-s"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Online Payment </h3>
                        <p>Free shipping for orders over $50</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="las la-globe-americas"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Web Portal</h3>
                        <p>Web portal for online customers</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-headphones"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Chat Bot</h3>
                        <p>Alway online feedback 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-light-2 pt-6 pb-6">
    <div class="container">
        <div class="heading heading-center mb-3">
            <h2 class="title text-uppercase">Who We Are</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <h5 class="who-we-are-header">Vision</h5>
                <p>In its service offering, Trico Logistic is intent on going beyond the traditional borders of business to reach new horizons through innovation and excellence.</p>
            </div>

            <div class="col-lg-4 text-center">
                <h5 class="who-we-are-header">Mission</h5>
                <p>The competent and dynamic workforce at Trico is professionally and academically qualified to ensure that our customers’ needs are met at all times. Strengthened by the experience and knowledge of our people, team Trico is ready to
exploit opportunities and overcome challenges with innovative solutions to suit your every need.</p>
            </div>

            <div class="col-lg-4 text-center">
                <h5 class="who-we-are-header">Recognition</h5>
                <p>We are one of the Leading Fright Forwarding Company in Sri Lanka</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white pt-6 pb-6">
    <div class="container-fluid p-0">
        <div class="heading heading-center mb-3">
            <h2 class="title text-uppercase">Technology In Logistics</h2>
        </div>

        <div class="tab-content">
            <div class="tab-pane p-0 fade show active" role="tabpanel">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 d-inline logistics-left-text">
                            <h3 class="text-center">eTrico: It's so easy</h3>
                            <p class="text-center">eTrico is our most advanced logistic solution yet. It incorporates all eServices into one portal, giving you maximum support at every stage of your supply chain. From tracking and scheduling to booking and reporting, eSchenker has your logistics covered.</p>

                            <a href="{{ route('register') }}"><span class="bg-danger text-left text-white font-weight-bold px-2">Register Now</span></a>
                            <div class="font-weight-bold">Already registered? <a href="{{ route('login') }}">Login</a></div>
                        </div>

                        <div class="col-lg-6">
                            <img src="{{ asset('images/logistics-right.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light-2 pt-6 pb-6">
    <div class="container services-container">
        <div class="mb-3 text-center" style="background: #294E71; padding: 25px 40px">
            <h3 class="text-white">Behind Every Activity, Trico is Supported By Our Mission To Deliver For Our  Customers</h3>
        </div>

        <div class="row justify-content-center services-row">
            <div class="col-lg-4 text-center">
                <h5 class="">Network</h5>
                <img src="{{ asset('images/network.jpg') }}" alt="Network" class="img-fluid">
                <p>Today’s customers are always on the go and want their products faster and cheaper than ever before. Global interconnectedness is growing. That’s why you need a powerful, international network to manage your supply chain..</p>

                <a href="{{ route('client.network') }}">Learn More ...</a>
            </div>

            <div class="col-lg-4 text-center">
                <h5 class="">Contact Us</h5>
                <img src="{{ asset('images/contact.png') }}" alt="Contact Us" class="img-fluid">
                <p>Do you have an inquiry about your trico eCommerce Solutions or cargo shipment? Our Customer Service team is happy to help!.</p>

                <a href="{{ route('client.contact') }}">Learn More ...</a>
            </div>

            <div class="col-lg-4 text-center">
                <h5 class="">Careers</h5>
                <img src="{{ asset('images/careers.jpg') }}" alt="Careers" class="img-fluid">
                <p>
​​​​​​​In a global business like ours, the opportunities are endless. So join us. Work with us. Grow with us. Stay with us. Discover the positive impact you can make and build an amazing career.</p>

                <a href="{{ route('client.career') }}">Learn More ...</a>
            </div>
        </div>
    </div>
</div>

@endsection
