<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Blank') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/fav.png') }}" type="image/x-icon" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="blank">

    <!-- ========== Favicon Icon ========== -->
    <link href="https://fonts.cdnfonts.com/css/gotham" rel="stylesheet">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- ========== End Stylesheet ========== -->
    <!-- Fonts -->
    
    <!-- Scripts -->
    
</head>

<body class="blue">
    
    @include('sweetalert::alert')
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/count-to.js')}}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootsnav.js')}}"></script>
    <script src="{{ asset('assets/js/easy-pie-chart.js')}}"></script>
    <script src="{{ asset('assets/js/pie-chart-active.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>