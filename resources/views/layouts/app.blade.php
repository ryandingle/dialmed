<!doctype html>
<html class="no-.js') }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="RLDWEBSHOP" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Document Title -->

    <title>@yield('title')</title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <?php 
        $route = Route::currentRouteName();
        $list = 'verification password register login home about services contact gallery blog blog.show';

        if(strpos($list, $route) !== false):
    ?>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

        <!-- StyleSheets -->
        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <!-- Fonts Online -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- JavaScripts -->
        <script src="{{ asset('js/vendors/modernizr.js') }}"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    <?php else:?>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <?php endif;?>

    @stack('styles')
    @stack('scriptsheader')
</head>
<body>

    <?php 
        if(strpos($list, $route) !== false):
    ?>

    <!-- Page Loader -->
    <div id="loader">
    <div class="position-center-center">
        <div class="cssload-thecube">
        <div class="cssload-cube cssload-c1"></div>
        <div class="cssload-cube cssload-c2"></div>
        <div class="cssload-cube cssload-c4"></div>
        <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>
    </div>

    <!-- Page Wrapper -->
    <div id="wrap">
    @include('layouts/includes/header')

    @yield('content')

    @include('layouts/includes/footer')
    </div>
    <!-- End Page Wrapper --> 

    <?php else: ?>

    <div id="app">
        @include('layouts/includes/header')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <?php endif;

    if(strpos($list, $route) !== false):

    ?>
    <!-- JavaScripts --> 
    <script src="{{ asset('js/vendors/jquery/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/vendors/wow.min.js') }}"></script> 
    <script src="{{ asset('js/vendors/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/vendors/own-menu.js') }}"></script> 
    <script src="{{ asset('js/vendors/jquery.sticky.js') }}"></script> 
    <script src="{{ asset('js/vendors/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('js/vendors/jquery.magnific-popup.min.js') }}"></script> 

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.tp.min.js') }}"></script> 
    <script src="{{ asset('js/main.js') }}"></script>

    <?php endif;?>

    @stack('scriptsfooter')
</body>
</html>
