@php
$data = [
    'main' => null,
    'page' => 'Account Overview',
    'previousPage' => 'Home',
    'previousRoute' => 'client.index',
    'breadcumb' => null,
    'route' => null,
];
@endphp

@extends('layouts.app', $data)
@section('title', 'Account Overview ')
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

    <div class="page-content mt-2">
        <div class="container account" style="width: 1188px;">
            <div class="row">
                @includeIf('components.account.nav')

                <main class="col-md-9">
                    <article class="card mb-3">
                        <div class="card-body">
                            <figure class="icontext">
                                <div class="icon">
                                    <img class="rounded-circle img-sm border" src="images/avatars/avatar3.jpg">
                                </div>
                                <div class="text">
                                    <strong> {{ auth()->user()->name }} </strong> <br>
                                    <p class="mb-2"> {{ auth()->user()->email }} </p>
                                    <a href="#" class="btn btn-light-account btn-sm">Edit</a>
                                </div>
                            </figure>
                            <hr>
                            <p>
                                <i class="fa fa-map-marker text-muted"></i> &nbsp; My defualt address:
                                <br>

                                <a href="" class="btn-link"> Chage</a>
                            </p>


                            <article class="card-group card-stat">
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title"></h4>
                                        <span>Order(s)</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">5</h4>
                                        <span>Wishlists</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">12</h4>
                                        <span>Awaiting delivery</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">50</h4>
                                        <span>Delivered order(s)</span>
                                    </div>
                                </figure>
                            </article>


                        </div>
                    </article>

                    <article class="card pb-3 mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Recent orders </h5>

                            <div class="row">
                                {{-- @forelse ($orders as $order)
                                    <div class="col-md-6">
                                        <figure class="itemside  mb-3">
                                            <div class="aside"><img src="images/items/1.jpg" class="border img-sm"></div>
                                            <figcaption class="info">
                                                <time class="text-muted"><i class="fa fa-calendar-alt"></i> {{ $order->created_at->toDayDateTimeString() }}</time>
                                                <p><i class="fa fa-user"></i> {{ $order->orderAddress->fname }} {{ $order->orderAddress->lname }}</p>
                                                <span class="text-success">Order confirmed </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                @empty
                                    Not Found
                                @endforelse --}}
                            </div>

                            <a href="" class="btn btn-outline-primary btn-block"> See all orders <i class="fa fa-chevron-down"></i> </a>
                        </div>
                    </article>

                </main>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
    </script>
@endsection
