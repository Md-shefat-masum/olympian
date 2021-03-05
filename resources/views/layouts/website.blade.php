<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$basic->basic_title}}</title>

    <link href="{{asset('contents/website')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/style.css" rel="stylesheet">
    {{-- <link href="{{asset('contents/website')}}/css/home-light-version.css" rel="stylesheet"> --}}
    <!-- Responsive File -->
    @stack('css')
    <link href="{{asset('contents/website')}}/css/responsive.css" rel="stylesheet">
    <!-- Light Home Color File / Add Class in Body and include this file-->
    <link rel="shortcut icon" href="{{asset('uploads/'.$basic->basic_favicon)}}" type="image/x-icon">
    <link rel="icon" href="{{asset('contents/website')}}/images/favicon.png" type="image/x-icon">
    <link href="{{asset('contents/website')}}/css/custom.css" rel="stylesheet">
    <script src="{{asset('contents/website')}}/js/sweetalert2@10.min.js"></script>
    {{-- <!--[if lt IE 9]><script src="{{asset('contents/website')}}/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('contents/website')}}/js/respond.js"></script><![endif]--> --}}
</head>

<body class="home-light-version">

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"><div class="icon"></div></div>

        <!-- Main Header -->
        @include('website.includes.header')
        <!-- End Main Header -->


        @yield('content')

        <!-- Main Footer -->
        @include('website.includes.footer')
        <!-- Main Footer Ends -->
        
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

    @if(Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                timer: 5000,
            });
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops',
                text: "{{ session('error') }}",
                timer: 5000,
            });
        </script>
    @endif

    <script src="{{asset('contents/website')}}/js/jquery.js"></script>
    <script src="{{asset('contents/website')}}/js/popper.min.js"></script>
    <script src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery-ui.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.fancybox.js"></script>
    <script src="{{asset('contents/website')}}/js/owl.js"></script>
    <script src="{{asset('contents/website')}}/js/appear.js"></script>
    <script src="{{asset('contents/website')}}/js/wow.js"></script>
    <script src="{{asset('contents/website')}}/js/scrollbar.js"></script>
    <script src="{{asset('contents/website')}}/js/script.js"></script>

    </body>


</html>