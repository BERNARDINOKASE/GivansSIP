<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('layouts.homepage.navigate')
                    <!-- navbar -->
                </div>
            </div>
        <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->

    <div
        id="home"
        class="header-hero bg_cover"
        style="background-image: url({{asset('homepage/')}}/images/header/banner-bg.svg)"
    >
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <div class="header-hero-content text-center">
                <h3
                class="header-sub-title wow fadeInUp"
                data-wow-duration="1.3s"
                data-wow-delay="0.2s"
                >
                <!-- Basic - SaaS Landing Page -->
                Selamat Datang di Layanan Pengaduan Siswa
                </h3>
                <h2
                class="header-title wow fadeInUp"
                data-wow-duration="1.3s"
                data-wow-delay="0.5s"
                >
                <!-- Kickstart Your SaaS or App Site -->
                SMAK GIOVANNI KOTA KUPANG
                </h2>
                <p
                class="text wow fadeInUp"
                data-wow-duration="1.3s"
                data-wow-delay="0.8s"
                >
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor
                </p>
                <a
                href="javascript:void(0)"
                class="main-btn wow fadeInUp"
                data-wow-duration="1.3s"
                data-wow-delay="1.1s"
                >
                <!-- Get Started -->
                Ajukan Pengaduan
                </a>
            </div>
            <!-- header hero content -->
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
            <div
                class="header-hero-image text-center wow fadeIn"
                data-wow-duration="1.3s"
                data-wow-delay="1.4s"
            >
                <!-- GANTI -->
                <img src="{{asset('homepage/')}}/images/header/header-hero.png" alt="hero" />
            </div>
            <!-- header hero image -->
            </div>
        </div>
        <!-- row -->
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div>
    <!-- header hero -->
</header>