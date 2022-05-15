@php
    $data=[
        'main' => null,
        'page' => "About us",
        'previousPage' => 'Home',
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "About us | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="page-header text-center" style="background-image: url('{{ asset('images/page-header-bg.jpg') }}')">
    <div class="container">
        <h1 class="page-title">About us</h1>
    </div>
</div>

<div class="page-content mt-2">
    <div class="container" style="width: 1188px;">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <h2 class="title">Our Vision</h2>
                <p>In its service offering, Trico Logistic is intent on going beyond the traditional borders of business to reach new horizons through innovation and excellence. </p>
            </div>

            <div class="col-lg-6">
                <h2 class="title">Our Mission</h2>
                <p>The competent and dynamic workforce at Trico is professionally and academically qualified to ensure that our customers’ needs are met at all times. Strengthened by the experience and knowledge of our people, team Trico is ready to  <br> exploit opportunities and overcome challenges with innovative solutions to suit your every need. </p>
            </div>
        </div>

        <div class="mb-5"></div>
    </div>

    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container" style="width: 1188px;">
            <div class="row">
                <div class="col-lg-12 mb-3 mb-lg-0">
                    <h2 class="title">Who We Are</h2>
                    <p class="lead text-primary mb-3">Covering sea we have expanded our logistics portfolio to serve diverse industry verticals offering solutions for complex logistics requirements.<br>Our end-to-end logistics portfolio and experience of over six decades puts us at an advantageous position to solve your logistics requirement, regardless of how large or small your operations may be.</p><!-- End .lead text-primary -->
                    <p class="mb-2">One of the leading frieght forwading company in Sri Lanka,  Established as one of the largest logistics companies in Sri Lanka with a presence spread across South East Asia </p>

                    <a href="https://youtube.com" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                        <span>VIEW OUR NEWS</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="width: 1188px;">
        <h2 class="title text-center mb-4">Meet Our Team</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="member member-anim text-center">
                    <figure class="member-media">
                        <img src="{{ asset('images/team-member.jpg') }}" alt="">

                        <figcaption class="member-overlay">
                            <div class="member-overlay-content">
                                <h3 class="member-title text-white">Mohan Pandithage<span>Founder & CEO</span></h3>
                                <p class="text-white">Joined the Trico Logistic in 1969. Appointed to the Trico PLC Board in 1998. Chairman and Chief Executive of Trico PLC since July 2009. Fellow of the Chartered Institute of Logistics & Transport (UK). </p>
                                <div class="social-icons social-icons-simple">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="member-content">
                        <h3 class="member-title text-white">Dhammika Perera<span>Co- Chairman, Non-Executive</span></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="member member-anim text-center">
                    <figure class="member-media">
                        <img src="{{ asset('images/team-member.jpg') }}" alt="">

                        <figcaption class="member-overlay">
                            <div class="member-overlay-content">
                                <h3 class="member-title text-white">Dhammika Perera<span>Sales & Marketing Manager</span></h3>
                                <p class="text-white">Appointed to the board in 2008. Mr. Dhammika Perera is a quintessential strategist and a business leader with interests in a variety of key industries including manufacturing, banking and finance, leisure, plantations and hydro power generation.</p>
                                <div class="social-icons social-icons-simple">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="member-content">
                        <h3 class="member-title text-white">Bruce Sutton<span>Sales & Marketing Manager</span></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="member member-anim text-center">
                    <figure class="member-media">
                        <img src="{{ asset('images/team-member.jpg') }}" alt="">

                        <figcaption class="member-overlay">
                            <div class="member-overlay-content">
                                <h3 class="member-title text-white">Janet Joy<span>Product Manager</span></h3>
                                <p class="text-white">Joined the Trico PLC in 1985. Has a wide range of expertise in the business of shipping, freight forwarding, logistics and aviation.</p>
                                <div class="social-icons social-icons-simple">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="member-content">
                        <h3 class="member-title text-white">Janet Joy<span>Product Manager</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-2"></div>

    <div class="about-testimonials bg-light-2 pt-6 pb-6">
        <div class="container" style="width: 1188px;">
            <h2 class="title text-center mb-3">What Customer Say About Us</h2>

            <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": false,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "1200": {
                            "nav": false
                        }
                    }
                }'>
                <blockquote class="testimonial text-center">
                    <img src="assets/images/testimonials/user-1.jpg" alt="">
                    <p>“ Nicely maintained office space for a large logistics firm. Sri Lanka's leading ships bunker suppliers. <br>This is the head office of Sri Lanka's oldest and largest conglomerates,Good place and friendly peoples and service.. ”</p>
                    <cite>
                        Jenson Gregory
                        <span>Customer</span>
                    </cite>
                </blockquote>

                <blockquote class="testimonial text-center">
                    <img src="assets/images/testimonials/user-2.jpg" alt="">
                    <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.Velit quos ipsa exercitationem, vel unde obcaecati impedit eveniet non. ”</p>

                    <cite>
                        Victoria Ventura
                        <span>Customer</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
