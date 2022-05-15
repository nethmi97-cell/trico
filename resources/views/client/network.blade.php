@php
    $data=[
        'main' => null,
        'page' => "Network",
        'previousPage' => 'Home',
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "Network | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="page-header text-center" style="background-image: url('{{ asset('images/page-header-bg.jpg') }}')">
    <div class="container">
        <h1 class="page-title">Network</h1>
    </div>
</div>

<div class="page-content mt-2">
    <div class="container" style="width: 1188px;">

        <div class="row">
            <div class="col-lg-12 text-center mb-5 mb-lg-5 my-5">
                <h2 class="title">We are globalizing your business</h2>
            </div>

            <div class="tab-content">
                <div class="tab-pane p-0 fade show active" role="tabpanel">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 d-inline">
                                <p class="text-left">We have expand our service to Offering service to 7 countries and being the fastest-growing shipping cargo brand around the world, Trico Cargo has been carrying out the shipping cargo transportation operations  since 2000. With its market position as the number 3 in air freight and number 3 in ocean freight, Trico is one of the leading providers. It offers the full range of services in global ocean freight. It operates at 800 locations around the world with approximately 20.000 employees. One of the pioneers in the ocean freight industry, Trico is now the leader in innovative ocean freight concepts.</p>

                                <p class="my-5">Here are the lists of countries that your ocean freight is going,</p>

                                <ul class="">
                                    <li>1. &nbsp; India/Middle East </li>
                                    <li>2. &nbsp; Africa</li>
                                    <li>3. &nbsp; Asia / Pacific</li>
                                    <li>4. &nbsp; Canada</li>
                                    <li>5. &nbsp; Europe</li>
                                    <li>6. &nbsp; Latin America</li>
                                    <li>7. &nbsp; USA</li>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <img src="{{ asset('images/network-right,jpg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
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
