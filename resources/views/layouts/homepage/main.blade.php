<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />

        <!--====== Title ======-->
        <title>SIP Givans - @yield('title')</title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('homepage/')}}/images/favicon.png" type="image/png" />

        <!--====== CSS Files LinkUp ======-->
        <link rel="stylesheet" href="{{asset('homepage/')}}/css/animate.css" />
        <link rel="stylesheet" href="{{asset('homepage/')}}/css/glightbox.min.css" />
        <link rel="stylesheet" href="{{asset('homepage/')}}/css/lineIcons.css" />
        <link rel="stylesheet" href="{{asset('homepage/')}}/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('homepage/')}}/css/style.css" />
    </head>

    <body>
        @yield('content')
        <!--====== Javascript Files ======-->
        <script src="{{asset('homepage/')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('homepage/')}}/js/wow.min.js"></script>
        <script src="{{asset('homepage/')}}/js/glightbox.min.js"></script>
        <script src="{{asset('homepage/')}}/js/count-up.min.js"></script>
        <script src="{{asset('homepage/')}}/js/particles.min.js"></script>
        <script src="{{asset('homepage/')}}/js/main.js"></script>
    </body>
</html>
