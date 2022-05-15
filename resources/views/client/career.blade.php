@php
    $data=[
        'main' => null,
        'page' => "Careers",
        'previousPage' => 'Home',
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "Careers | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="page-header text-center" style="background-image: url('{{ asset('images/page-header-bg.jpg') }}')">
    <div class="container">
        <h1 class="page-title">Careers</h1>
    </div>
</div>

<div class="page-content mt-2">
    <div class="container" style="width: 1188px;">

        <div class="row">
            <div class="col-lg-12 text-center mb-3 mb-lg-0">
                <h2 class="title">We know our employees are our greatest assets. That’s why we’re committed to providing the best benefits for them, from competitive salaries to optimal health care offerings and paid leave policies.</h2>
            </div>
        </div>

        <div class="mb-5"></div>
    </div>

    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container" style="width: 1188px;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <img src="{{ asset('images/career.jpg') }}" alt="" style="background-position: center; background-size: cover; background-repeat: no-repeat" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <ul>
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container career-cards" style="width: 1188px;">
        <div class="heading heading-center mb-3">
            <h2 class="title text-uppercase">Available Vacancies</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="job-card">
                    <span class="job-date">{{ now() }}</span>
                    <h4 class="job-title">Software Engineer</h4>
                    <ul>
                        <li class="mb-1">In-depth knowledge of Microsoft .Net C# development</li>
                        <li class="mb-1">Communicative English</li>
                        <li class="mb-1">German language is a big plus</li>
                        <li class="mb-1"></li>
                        <li class="mb-1">Hands-on experience in implementing CI / CD based on Microsoft products</li>
                    </ul>

                    <span class="mt-3 job-location"> <i class="icon-map-marker"></i> Califonia</span>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="job-card active">
                    <span class="job-date">{{ now() }}</span>
                    <h4 class="job-title text-white">Human Resources Executive</h4>
                    <ul>
                        <li class="mb-1">4 years of proven experience as HR Officer</li>
                        <li class="mb-1">Knowledge of HR functions </li>
                        <li class="mb-1">Problem-solving and can do attitude</li>
                        <li class="mb-1">Outstanding organizational and time-management abilities</li>
                        <li class="mb-1"></li>
                    </ul>

                    <span class="mt-3 job-location"> <i class="icon-map-marker"></i> Califonia</span>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="job-card">
                    <span class="job-date">{{ now() }}</span>
                    <h4 class="job-title">Finance Intern</h4>
                    <ul>
                        <li class="mb-1">Educated towards Diploma/Degree level with an appropriate Finance and/or Accounting major</li>
                        <li class="mb-1">Good team player.</li>
                        <li class="mb-1">Excellent communication and report writing skills in English</li>
                        <li class="mb-1">Tolerance to stress.</li>
                        <li class="mb-1"></li>
                    </ul>

                    <span class="mt-3 job-location"> <i class="icon-map-marker"></i> Califonia</span>
                </div>
            </div>
        </div>

        <div class="mb-5"></div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
