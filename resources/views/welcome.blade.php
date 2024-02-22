@extends('Layouts.Guest1')


@section('title','Landing Page')
@section('content')
<body>
    <script src="AdminAssets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
               <h2>SIP-Givans</h2>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    @include('guest.header')
    <!--====== HEADER PART ENDS ======-->

    <!--====== BRAND PART START ======-->
    <div class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                    class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between"
                    >
                        <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.2s"
                        >
                            <img src="{{asset('assets/')}}/images/brands/uideck.svg" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.2s"
                        >
                            <img src="{{asset('assets/')}}/images/brands/ayroui.svg" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.3s"
                        >
                            <img src="{{asset('assets/')}}/images/brands/graygrids.svg" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.4s"
                        >
                            <img src="{{asset('assets/')}}/images/brands/lineicons.svg" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.5s"
                        >
                            <img
                            src="{{asset('assets/')}}/images/brands/ecommerce-html.svg"
                            alt="brand"
                            />
                        </div>
                    <!-- single logo -->
                    </div>
                    <!-- brand logo -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--====== BRAND PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center pb-40">
                <div class="line m-auto"></div>
                <h3 class="title">
                    Clean and simple design,
                    <span> Comes with everything you need to get started!</span>
                </h3>
                </div>
                <!-- section title -->
            </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div
                class="single-services text-center mt-30 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
                >
                <div class="services-icon">
                    <img
                    class="shape"
                    src="{{asset('assets/')}}/images/services/services-shape.svg"
                    alt="shape"
                    />
                    <img
                    class="shape-1"
                    src="{{asset('assets/')}}/images/services/services-shape-1.svg"
                    alt="shape"
                    />
                    <i class="lni lni-baloon"> </i>
                </div>
                <div class="services-content mt-30">
                    <h4 class="services-title">
                    <a href="javascript:void(0)">Clean</a>
                    </h4>
                    <p class="text">
                    Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                    seddiam nonu eirmod tempor invidunt labore.
                    </p>
                    <a class="more" href="javascript:void(0)"
                    >Learn More <i class="lni lni-chevron-right"> </i>
                    </a>
                </div>
                </div>
                <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div
                class="single-services text-center mt-30 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
                >
                <div class="services-icon">
                    <img
                    class="shape"
                    src="{{asset('assets/')}}/images/services/services-shape.svg"
                    alt="shape"
                    />
                    <img
                    class="shape-1"
                    src="{{asset('assets/')}}/images/services/services-shape-2.svg"
                    alt="shape"
                    />
                    <i class="lni lni-cog"> </i>
                </div>
                <div class="services-content mt-30">
                    <h4 class="services-title">
                    <a href="javascript:void(0)">Robust</a>
                    </h4>
                    <p class="text">
                    Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                    seddiam nonu eirmod tempor invidunt labore.
                    </p>
                    <a class="more" href="javascript:void(0)"
                    >Learn More <i class="lni lni-chevron-right"> </i>
                    </a>
                </div>
                </div>
                <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div
                class="single-services text-center mt-30 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
                >
                <div class="services-icon">
                    <img
                    class="shape"
                    src="{{asset('assets/')}}/images/services/services-shape.svg"
                    alt="shape"
                    />
                    <img
                    class="shape-1"
                    src="{{asset('assets/')}}/images/services/services-shape-3.svg"
                    alt="shape"
                    />
                    <i class="lni lni-bolt-alt"> </i>
                </div>
                <div class="services-content mt-30">
                    <h4 class="services-title">
                    <a href="javascript:void(0)">Powerful</a>
                    </h4>
                    <p class="text">
                    Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                    seddiam nonu eirmod tempor invidunt labore.
                    </p>
                    <a class="more" href="javascript:void(0)"
                    >Learn More <i class="lni lni-chevron-right"> </i>
                    </a>
                </div>
                </div>
                <!-- single services -->
            </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <section id="about">
        <!--====== ABOUT PART START ======-->
        <div class="about-area pt-70">
            <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div
                    class="about-content mt-50 wow fadeInLeftBig"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                >
                    <div class="section-title">
                    <div class="line"></div>
                    <h3 class="title">
                        Quick & Easy <span>to Use Bootstrap Template</span>
                    </h3>
                    </div>
                    <!-- section title -->
                    <p class="text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                    nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum dolor sit amet, consetetur sadipscing.
                    </p>
                    <a href="javascript:void(0)" class="main-btn">Try it Free</a>
                </div>
                <!-- about content -->
                </div>
                <div class="col-lg-6">
                <div
                    class="about-image text-center mt-50 wow fadeInRightBig"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                >
                    <img src="{{asset('assets/')}}/images/about/about1.svg" alt="about" />
                </div>
                <!-- about image -->
                </div>
            </div>
            <!-- row -->
            </div>
            <!-- container -->
            <div class="about-shape-1">
            <img src="{{asset('assets/')}}/images/about/about-shape-1.svg" alt="shape" />
            </div>
        </div>
        <!--====== ABOUT PART ENDS ======-->

        <!--====== ABOUT PART START ======-->
        <div class="about-area pt-70">
            <div class="about-shape-2">
            <img src="{{asset('assets/')}}/images/about/about-shape-2.svg" alt="shape" />
            </div>
            <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last">
                <div
                    class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                >
                    <div class="section-title">
                    <div class="line"></div>
                    <h3 class="title">
                        Modern design <span> with Essential Features</span>
                    </h3>
                    </div>
                    <!-- section title -->
                    <p class="text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                    nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum dolor sit amet, consetetur sadipscing.
                    </p>
                    <a href="javascript:void(0)" class="main-btn">Try it Free</a>
                </div>
                <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                <div
                    class="about-image text-center mt-50 wow fadeInRightBig"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                >
                    <img src="{{asset('assets/')}}/images/about/about2.svg" alt="about" />
                </div>
                <!-- about image -->
                </div>
            </div>
            <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--====== ABOUT PART ENDS ======-->

        <!--====== ABOUT PART START ======-->
        <div class="about-area pt-70">
            <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div
                    class="about-content mt-50 wow fadeInLeftBig"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                >
                    <div class="section-title">
                    <div class="line"></div>
                    <h3 class="title">
                        <span>Crafted for</span> SaaS, App and Software Landing Page
                    </h3>
                    </div>
                    <!-- section title -->
                    <p class="text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                    nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum dolor sit amet, consetetur sadipscing.
                    </p>
                    <a href="javascript:void(0)" class="main-btn">Try it Free</a>
                </div>
                <!-- about content -->
                </div>
                <div class="col-lg-6">
                <div
                    class="about-image text-center mt-50 wow fadeInRightBig"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                >
                    <img src="{{asset('assets/')}}/images/about/about3.svg" alt="about" />
                </div>
                <!-- about image -->
                </div>
            </div>
            <!-- row -->
            </div>
            <!-- container -->
            <div class="about-shape-1">
            <img src="{{asset('assets/')}}/images/about/about-shape-1.svg" alt="shape" />
            </div>
        </div>
        <!--====== ABOUT PART ENDS ======-->
    </section>

    <!--====== VIDEO COUNTER PART START ======-->
    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 order-lg-last">
                <div
                class="counter-wrapper mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
                >
                <div class="counter-content">
                    <div class="section-title">
                    <div class="line"></div>
                    <h3 class="title">Cool facts <span> about this app</span></h3>
                    </div>
                    <!-- section title -->
                    <p class="text">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                    nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, sed diam voluptua.
                    </p>
                </div>
                <!-- counter content -->
                <div class="row no-gutters">
                    <div class="col-4">
                    <div
                        class="single-counter counter-color-1 d-flex align-items-center justify-content-center"
                    >
                        <div class="counter-items text-center">
                        <span
                            class="count countup text-uppercase"
                            cup-end="125"
                        ></span>

                        <p class="text">Downloads</p>
                        </div>
                    </div>
                    <!-- single counter -->
                    </div>
                    <div class="col-4">
                    <div
                        class="single-counter counter-color-2 d-flex align-items-center justify-content-center"
                    >
                        <div class="counter-items text-center">
                        <span
                            class="count countup text-uppercase"
                            cup-end="87"
                        ></span>
                        <p class="text">Active Users</p>
                        </div>
                    </div>
                    <!-- single counter -->
                    </div>
                    <div class="col-4">
                    <div
                        class="single-counter counter-color-3 d-flex align-items-center justify-content-center"
                    >
                        <div class="counter-items text-center">
                        <span
                            class="count countup text-uppercase"
                            cup-end="59"
                        ></span>
                        <p class="text">User Rating</p>
                        </div>
                    </div>
                    <!-- single counter -->
                    </div>
                </div>
                <!-- row -->
                </div>
                <!-- counter wrapper -->
            </div>
            <div class="col-lg-6">
                <div
                class="video-content mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
                >
                <img class="dots" src="{{asset('assets/')}}/images/video/dots.svg" alt="dots" />
                <div class="video-wrapper">
                    <div class="video-image">
                    <img src="{{asset('assets/')}}/images/video/video.png" alt="video" />
                    </div>
                    <div class="video-icon">
                    <a
                        href="https://www.youtube.com/watch?v=r44RKWyfcFw"
                        class="video-popup glightbox"
                    >
                        <i class="lni lni-play"> </i>
                    </a>
                    </div>
                </div>
                <!-- video wrapper -->
                </div>
                <!-- video content -->
            </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== VIDEO COUNTER PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    @include('guest.footer')
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
@endsection