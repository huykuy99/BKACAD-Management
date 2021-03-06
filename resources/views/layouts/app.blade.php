<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- morris css -->
        {{-- <link rel="stylesheet" href="../plugins/morris/morris.css"> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/chosen.min.css') }}" rel="stylesheet" type="text/css">

        @yield('library')
    </head>

    <body class="fixed-left">
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
        <div id="wrapper">
        @include('layouts.left-sidebar')
            <div class="content-page">
                <div class="content">
                    @include('layouts.top-bar')
                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">@yield('title')</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.proto.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.proto.min.js') }}"></script>



        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        {{-- <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>
        <script src="assets/pages/dashboard.int.js"></script> --}}
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @stack('script')
    </body>
</html>

