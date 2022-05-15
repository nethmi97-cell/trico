<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="shortcut icon" href="{{  URL::to('/images/logo.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
    <div id="admin">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    @if($data['main'] == null)
                        <li>
                            <a href="{{ route('client.index') }}"> Dashboard&nbsp;</a> <i class="fas fa-arrow-right"></i>
                        </li>
                        @if($data['previousRoute'] != null)
                            <li>
                                <a href="{{ route($data['previousRoute']) }}">&nbsp;{{ $data['previousPage'] }}</a>
                                <i class="fas fa-arrow-right"></i>
                            </li>
                        @endif
                        @if($data['route'] != null)
                            <li> <a href="{{ route($data['route']) }}">&nbsp;{{ $data['page'] }}</a></li>
                        @else
                            <li>&nbsp;{{ $data['page'] }}</li>
                        @endif
                    @else
                        <li>&nbsp;{{ $data['main'] }}</li>
                    @endif
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="" class="brand-link">
                <img src="{{ URL::to('/images/logo.png') }}" alt="" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                    <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ URL::to('/images/avatar.png') }}" class="img-circle elevation-2" alt="">
                        </div>
                        <div class="info">
                            <a href="" class="d-block">{{ auth()->user()->name }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="side__menu">
                                <span class="text-light"> General</span>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('superadmin.index') }}" class="nav-link {{ shortHandIfOptional(Request::segment(2), 'dashboard', 'active', '') }}">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p> Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview {{ shortHandIfOptional(Request::segment(2), 'container', 'menu-open', '') }} ">
                                <a href="#" class="nav-link {{ shortHandIfOptional(Request::segment(2), 'container', 'active', '') }} ">
                                    <i class="nav-icon las la-boxes"></i>
                                    <p> Containers <i class="right fas fa-angle-left"></i> </p>
                                </a>
                                <ul class="nav nav-treeview ml-1">
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.container.index') }}" class="nav-link {{ shortHandIfOptional(Request::segment(2), 'container', 'active', '') }}">
                                            <i class="nav-icon las la-list"></i>
                                            <p>List </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview {{ shortHandIfOptional(Request::segment(2), 'consignee', 'menu-open', '') }} ">
                                <a href="#" class="nav-link {{ shortHandIfOptional(Request::segment(2), 'consignee', 'active', '') }} ">
                                    <i class="nav-icon las la-user-friends"></i>
                                    <p> Consignees <i class="right fas fa-angle-left"></i> </p>
                                </a>
                                <ul class="nav nav-treeview ml-1">
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.consignee.index') }}" class="nav-link {{ shortHandIfOptional(Request::segment(2), 'consignee', 'active', '') }}">
                                            <i class="nav-icon las la-list"></i>
                                            <p>List </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- <li class="nav-item">
                                <a href="{{ env('APP_URL').'/laratrust' }}" class="nav-link" target="_blank">
                                    <i class="nav-icon fas fa-user-tag"></i>
                                    <p>Roles & Permissions</p>
                                </a>
                            </li> --}}

                            <li class="nav-item">
                                <a href="{{ route('client.index') }}" class="nav-link" target="_blank">
                                    <i class="nav-icon fas fa-eye"></i>
                                    <p>View Site </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p> {{ __('Sign Out') }} </p>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    <main class="py-2">
                        <div class="container-fluid">
                            {{-- @includeIf('client.flash.profile') --}}
                        </div>
                        @yield('content')
                    </main>
                </div>
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                {{-- Anything you want --}}
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; {{ now()->year }} <a href="https://etrico.com" target="_blank">{{ env('APP_NAME')}}</a>.</strong> All rights reserved.
            </footer>
        </div>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/tinymce/tinymce.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    @yield('script')
    @includeIf('sweetalert::alert')
    <script>
    </script>
</body>
</html>

<script>
    tinymce.init({
        mode : "textareas",
        height : "800",
        selector:'textarea#description, textarea#content, textarea#shipping',
        plugins: ['code', 'table', 'image', 'fullscreen', 'spellchecker', 'imagetools', 'codesample', 'charmap','print', 'save', 'template', 'paste', 'insertdatetime', 'searchreplace', 'pagebreak', 'wordcount', 'visualblocks', 'lists' /*'n1ed'*/],
        apiKey: "Z9WDDFLT",
        fullscreen_native: true,
        menu: {
            file: {
                title: 'File',
                items: 'newdocument restoredraft | preview | print '
            },
            edit: {
                title: 'Edit',
                items: 'undo redo | cut copy paste | selectall | searchreplace'
            },
            view: {
                title: 'View',
                items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | searchreplace | visualblocks'
            },
            insert: {
                title: 'Insert',
                items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime'
            },
            format: {
                title: 'Format',
                items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat'
            },
            tools: {
                title: 'Tools',
                items: 'spellchecker spellcheckerlanguage | code wordcount'
            },
            table: {
                title: 'Table',
                items: 'inserttable | cell row column | tableprops deletetable'
            },
            help: {
                title: 'Help',
                items: 'help'
            }
        },
        mobile: {
            menubar: true,
            plugins: ['code', 'table',  'autosave', 'lists', 'autolink' ],
            toolbar: [ 'undo', 'bold', 'italic', 'styleselect' ]
        },
        theme: 'silver',
        toolbar_mode: 'floating',
        file_picker_types: 'file image media',

        toolbar: [
            'undo redo | styleselect | fontselect | fontsizeselect | forecolor backcolor | table | code | link image | fullscreen | outdent | indent ',
            'bold italic underline | lineheight | alignleft aligncenter alignright alignjustify bullist numlist | superscript subscript | insertdatetime | pagebreak | print | wordcount | charmap | save | copy paste '
        ],
        image_class_list: [
            {title: 'None', value: ''},
            {title: 'Lightbox', value: 'lightbox'},
            {title: 'Image Responsive', value: 'img-responsive'},
            {title: 'Image Fluid', value: 'img-fluid'},
        ],
        imagetools_cors_hosts: ['mydomain.com', 'otherdomain.com'],
        imagetools_credentials_hosts: ['mydomain.com', 'otherdomain.com']
    });

    $(document).ready( function () {
        $('.selectpicker').selectpicker();
    } );
</script>
