@php
    $data=[
        'main' => 'Dashboard',
        'page' => null,
        'previousPage' => null,
        'previousRoute' => null,
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.admin', $data)
@section('title', 'Dashboard | '. env('APP_NAME'))

@section('content')

@endsection

@section('script')
@endsection
