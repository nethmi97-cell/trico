<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="robots" content="index" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="expires" content="-1" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="keywords" content="@yield('meta_keys')">
    <meta name="description" content="@yield('meta_desc')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/jquery.countdown.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/nouislider/nouislider.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/cute-alert/style.css') }} ">
    <link rel="shortcut icon" href="{{ URL::to('/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="page-wrapper">
            @includeIf('components.menu.header')

            <main class="main">
                <div class="container px-0" style="width: 1188px;">
                    @if ($data['main'] == null)
                        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                            <div class="container">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route($data['previousRoute']) }}">{{ $data['previousPage'] }}</a></li>
                                    @if ($data['breadcumb'] != null)
                                        <li class="breadcrumb-item"><a href="{{ route($data['route']) }}">{{ $data['breadcumb'] }}</a></li>
                                    @endif
                                    <li class="breadcrumb-item active" aria-current="page">{{ $data['page'] }}</li>
                                </ol>
                            </div>
                        </nav>
                    @endif
                </div>
                @yield('content')
            </main>
            @includeIf('components.menu.footer')
        </div>
        @includeIf('components.menu.popup')
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('vendor/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/superfish.min.js') }}"></script>
    <script src="{{ asset('vendor/wNumb.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('vendor/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('vendor/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendor/cute-alert/cute-alert.js') }}"></script>
</body>
</html>



<script>
    $('.remove').on('click', function() {
        cuteAlert({
            type: "question",
            title: "Are you sure?",
            message: "Are you sure you want to remove this item?",
            confirmText: "Okay",
            cancelText: "Cancel"
        }).then((e)=>{
            if ( e == 'confirm'){
                $(this).parent('.product').find('#remove').click();
            }
        });
    });

    $(document).ready( function () {
        // $('.selectpicker').selectpicker();
    } );


</script>
