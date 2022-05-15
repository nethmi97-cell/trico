@php
    $data=[
        'main' => null,
        'page' => "Contact Us",
        'previousPage' => 'Home',
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "Contact Us | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="page-header text-center" style="background-image: url('{{ asset('images/page-header-bg.jpg') }}')">
    <div class="container">
        <h1 class="page-title">Contact Us</h1>
    </div>
</div>

<div class="page-content mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                <p class="mb-3">We would love to hear from you. Let us know your inquiry and we will definitely help you out with it.</p>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contact-info">
                            <h3>The Office</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-map-marker"></i>
                                    478/6 K. Cyril C. Perera Mawatha, Colombo 01300.
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <a href="tel:#">+92 423 567</a>
                                </li>
                                <li>
                                    <i class="icon-envelope"></i>
                                    <a href="mailto:#">info@eTrico.com</a>
                                </li>
                            </ul><!-- End .contact-list -->
                        </div><!-- End .contact-info -->
                    </div><!-- End .col-sm-7 -->

                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h3>The Office</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-clock-o"></i>
                                    <span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
                                </li>
                                <li>
                                    <i class="icon-calendar"></i>
                                    <span class="text-dark">Sunday</span> <br>11am-6pm ET
                                </li>
                            </ul><!-- End .contact-list -->
                        </div><!-- End .contact-info -->
                    </div><!-- End .col-sm-5 -->
                </div><!-- End .row -->
            </div><!-- End .col-lg-6 -->
            <div class="col-lg-6">
                <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                <p class="mb-2">Use the form below to get in touch with the sales team</p>

                <form action="#" class="contact-form mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cname" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="cname" placeholder="Name *" required>
                        </div><!-- End .col-sm-6 -->

                        <div class="col-sm-6">
                            <label for="cemail" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="cemail" placeholder="Email *" required>
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cphone" class="sr-only">Phone</label>
                            <input type="tel" class="form-control" id="cphone" placeholder="Phone">
                        </div><!-- End .col-sm-6 -->

                        <div class="col-sm-6">
                            <label for="csubject" class="sr-only">Subject</label>
                            <input type="text" class="form-control" id="csubject" placeholder="Subject">
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->

                    <label for="cmessage" class="sr-only">Message</label>
                    <textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                    <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                        <span>SUBMIT</span>
                        <i class="icon-long-arrow-right"></i>
                    </button>
                </form><!-- End .contact-form -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
