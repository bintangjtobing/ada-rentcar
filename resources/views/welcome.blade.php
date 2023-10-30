<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Boxity Central Indonesia">
    <meta name="description"
        content="Pilihan tepat bagi Anda yang membutuhkan mobil untuk perjalanan bisnis, liburan, atau acara lainnya. Kami akan memastikan Anda mendapatkan pengalaman berkendara yang menyenangkan dan nyaman.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('webpage/style.css') !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-icons.css') !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/components/datepicker.css') !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('webpage/demos/travel/travel.css') !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/custom.css') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{!! asset('assets/just-logo.png') !!}" type="image/png">

    <!-- Document Title
 ============================================= -->
    <title>
        @hasSection('title')
            @yield('title') |
        @else
        @endif Ada Rent Car & Tour Hub
    </title>
    <meta name="og:title" property="og:title"
        content="@hasSection('title')
@yield('title') |
@else
@endif Ada Rent Car & Tour Hub" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="@if (View::hasSection('tag_cover')) @yield('tag_cover')@else {!! asset('assets/meta-cover.jpg') !!} @endif" />
    <meta name="og:description" property="og:description"
        content="Pilihan tepat bagi Anda yang membutuhkan mobil untuk perjalanan bisnis, liburan, atau acara lainnya. Kami akan memastikan Anda mendapatkan pengalaman berkendara yang menyenangkan dan nyaman." />
    <meta name="twitter:card"
        content="@hasSection('title')
@yield('title') |
@else
@endif Ada Rent Car & Tour Hub" />
    <meta name="twitter:title" property="og:title"
        content="@hasSection('title')
@yield('title') |
@else
@endif Ada Rent Car & Tour Hub" />
    <meta name="keywords"
        content="adarentcarhub, adarentcarandtour, Rent car medan,Sewa mobil medan,Mobil murah medan,Mobil mewah medan,Mobil keluarga medan,Mobil bisnis medan,Mobil liburan medan,Mobil antar jemput medan,Mobil supir medan,Mobil asuransi medan,Tour medan,Wisata medan,Paket wisata medan,Destinasi wisata medan,Agen wisata medan,Travel medan" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="@if (View::hasSection('tag_cover')) @yield('tag_cover')@else {!! asset('assets/meta-cover.jpg') !!} @endif" />
    <meta name="twitter:description" property="og:description"
        content="Pilihan tepat bagi Anda yang membutuhkan mobil untuk perjalanan bisnis, liburan, atau acara lainnya. Kami akan memastikan Anda mendapatkan pengalaman berkendara yang menyenangkan dan nyaman." />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon"
        href="@if (View::hasSection('icon')) @yield('icon')@else {!! asset('assets/just-logo.png') !!} @endif" type="image/png"
        sizes="64x64" />
    <meta name="og:email" content="info@adarentcarhub.com" />
    <meta name="og:phone_number" content="02129021873" />
    <meta name="og:latitude" content="-6.1465558" />
    <meta name="og:longitude" content="106.7843094" />
    <meta name="og:street-address"
        content="Jl. Mesjid Taufik Gg. Bali, Glugur Darat II, Kec. Medan Tim., Kota Medan, Sumatera Utara 20237" />
    <meta name="og:locality" content="Sumatera Utara" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="20236" />
    <meta name="og:country-name" content="Indonesia" />
</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <!-- Top Bar
  ============================================= -->
        <div id="top-bar" class="transparent-topbar dark">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
      ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#">Home</a></li>
                                <li class="top-links-item"><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto">

                        <!-- Top Social
      ============================================= -->
                        <ul id="top-social">
                            <li><a href="#" class="h-bg-facebook"><span class="ts-icon"><i
                                            class="fa-brands fa-facebook-f"></i></span><span
                                        class="ts-text">Facebook</span></a></li>
                            <li><a href="#" class="h-bg-instagram"><span class="ts-icon"><i
                                            class="fa-brands fa-instagram"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+6282168222112" class="h-bg-call"><span class="ts-icon"><i
                                            class="fa-solid fa-phone"></i></span><span class="ts-text">+62
                                        821-6822-2112</span></a></li>
                            <li><a href="mailto:info@adarentcarhub.com" class="h-bg-email3"><span class="ts-icon"><i
                                            class="bi-envelope-fill"></i></span><span
                                        class="ts-text">info@adarentcarhub.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
  ============================================= -->
        <header id="header" class="transparent-header dark" data-sticky-class="not-dark"
            data-responsive-class="not-dark" data-menu-padding="28">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
      ============================================= -->
                        <div id="logo">
                            <a href="/">
                                <img class="logo-default"
                                    srcset="{!! asset('assets/logo-ada-rent-car.png') !!}, {!! asset('assets/logo-ada-rent-car.png') !!} 2x"
                                    src="{!! asset('assets/logo-ada-rent-car.png') !!}" alt="Ada Rent Car & Tour Hub Logo">
                                <img class="logo-dark" srcset="{!! asset('assets/logo-ada-rent-car.png') !!}, {!! asset('assets/logo-ada-rent-car.png') !!} 2x"
                                    src="{!! asset('assets/logo-ada-rent-car.png') !!}" alt="Ada Rent Car & Tour Hub Logo">
                            </a>
                        </div><!-- #logo end -->

                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu style-4 menu-spacing-margin">

                            <ul class="menu-container">
                                <li class="menu-item current"><a class="menu-link" href="/">
                                        <div><i class="bi-house"></i>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div><i class="bi-newspaper"></i>Blog</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="tel:6282168222112">
                                        <div><i class="bi-telephone"></i>+62 821 6822 2112</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <section id="slider"
            class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header include-topbar">
            <div class="slider-inner">

                <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500"
                    data-animation="fade" data-arrows="false" data-pagi="false" style="background-color: #333;">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide"
                                style="background: url('{!! asset('webpage/demos/travel/images/slider/4.jpeg') !!}') center center; background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="travel-slider-overlay">

                    <div class="vertical-middle">
                        <div class="container py-5 pt-5 pb-lg-0">

                            <div class="travel-organiser-tabs tabs mt-lg-5">
                                <ul class="nav canvas-tabs nav-tabs" id="canvas-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill"
                                            role="tab" href="#tab-flights"><i class="bi-car-front me-2"></i><span
                                                class="d-none d-md-inline-block">For rental cars! Best
                                                deals!</span></a></li>
                                </ul>

                                <div id="canvas-TabContent" class="tab-content">
                                    <div class="tab-pane show active" id="tab-flights" role="tabpanel"
                                        aria-labelledby="canvas-home-tab" tabindex="0">
                                        <div
                                            class="heading-block border-bottom-0 mb-4 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <h4>Search for Cheap Rental Cars Wherever Your Are</h4>
                                        </div>
                                        <form action="#" method="post" class="mb-0">
                                            <div class="row g-4">
                                                <div class="col-md-6 col-12">
                                                    <label>Asal</label>
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Eg. Medan, Sumatera Utara">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <label>Tujuan</label>
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Eg. Siantar, Sumatera Utara">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row input-daterange travel-date-group">
                                                        <div class="col-md-6 col-6">
                                                            <label>Waktu Pengambilan</label>
                                                            <input type="text" value=""
                                                                class="form-control text-start" name="start"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label>Waktu Pengembalian</label>
                                                            <input type="text" value=""
                                                                class="form-control text-start" name="end"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                    <button class="button button-3d m-0 me-4">Cari Mobil</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Content
  ============================================= -->
        <section id="content">
            <div class="content-wrap">

                <div class="section mb-6 header-stick">
                    <div class="container">

                        <div class="row mt-4 col-mb-30 mb-0">

                            <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                                <i class="i-plain color i-large bi-car-front inline-block mb-3"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">Mudah & Harga Terjangkau</span>
                                    <h4>Cari mobil rental</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                                <i class="i-plain color i-large bi-key inline-block mb-3"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">Lebih dari 10+ kota tujuan</span>
                                    <h4>Cari Tujuanmu</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                                <i class="i-plain color i-large bi-gift inline-block mb-3"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">Explore Destinations.</span>
                                    <h4>Paket liburan</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                                <i class="i-plain color i-large bi-headphones inline-block mb-3"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">24x7 Helpdesk</span>
                                    <h4>+62 821 6822 2112</h4>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="container">

                    <div class="heading-block text-center border-bottom-0">
                        <span class="before-heading color">Mau cari mobil yang bagaimana?</span>
                        <h2>Kami bisa memberikan kamu pilihan yang terbaik.</h2>
                    </div>

                </div>

                <div id="portfolio" class="portfolio row portfolio-overlay-open g-0">

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/innova-reborn.jpeg') !!}" alt="Innova Reborn - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Innova Reborn</h3>
                                                <span>Harga mulai dari 700rb /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/toyota-haice.jpeg') !!}" alt="Toyota Haice - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Toyota Haice</h3>
                                                <span>Harga mulai dari 1jt /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/innova-genic.jpeg') !!}" alt="Innova Genic - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Innova Genic</h3>
                                                <span>Harga mulai dari 750rb /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/alphard-2016.jpg') !!}"
                                        alt="Toyota Alphard 2016 & 2020 - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Toyota Alphard 2016 & 2020</h3>
                                                <span>Harga mulai dari 1.5jt /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/alphard-2021.jpg') !!}"
                                        alt="Toyota Alphard 2021 - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Toyota Alphard 2021</h3>
                                                <span>Harga mulai dari 1.8jt /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/xpander-2018.jpg') !!}"
                                        alt="Mitsubishi Xpander 2018 - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Mitsubishi Xpander 2018</h3>
                                                <span>Harga mulai dari 500rb /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/xpander-2020.jpeg') !!}"
                                        alt="Mitsubishi Xpander 2020 - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Mitsubishi Xpander 2020</h3>
                                                <span>Harga mulai dari 550rb /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/bus-29.jpeg') !!}"
                                        alt="Bus Medium 25 & 29 Seat - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Bus Medium 25 & 29 Seat</h3>
                                                <span>Harga mulai dari 1,3jt /hari</span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>

                {{-- <a href="#" class="button button-full button-dark text-center mb-6">
                    <div class="container">
                        Belum nemuin mobil rental yang cocok? <strong>Cari disini</strong> <i
                            class="fa-solid fa-caret-right" style="top:4px;"></i>
                    </div>
                </a> --}}

                <div class="container mt-5">

                    <div class="heading-block text-center">
                        <h2>Jalan jalan di Sumatera</h2>
                        <span>Tetap Terhubung dengan Berita Perjalanan &amp; Berita Tujuan</span>
                    </div>

                    <div class="row posts-md col-mb-50">
                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="{!! asset('assets/tour/danau-toba.jpg') !!}"
                                                alt="Dana Toba - Ada Rent Car & Tour Hub"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Danau Toba</span>
                                    <div class="entry-title title-xs text-transform-none">
                                        <h3><a href="#">Wisata yang ada di Danau Toba</a></h3>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="{!! asset('assets/tour/gunung-sibayak.webp') !!}"
                                                alt="Gunung Sibayak - Ada Rent Car & Tour Hub"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Gunung Sibayak</span>
                                    <div class="entry-title title-xs text-transform-none">
                                        <h3><a href="#">Wisata yang ada di Gunung Sibayak</a></h3>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="{!! asset('assets/tour/bukit-lawang.jpg') !!}"
                                                alt="Bukit Lawang - Ada Rent Car & Tour Hub"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Bukit Lawang</span>
                                    <div class="entry-title title-xs text-transform-none">
                                        <h3><a href="#">Wisata yang ada di Bukit Lawang</a></h3>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="{!! asset('assets/tour/air-terjun-sipiso.jpg') !!}"
                                                alt="Air Terjun Sipiso-piso - Ada Rent Car & Tour Hub"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Air Terjun Sipiso-piso</span>
                                    <div class="entry-title title-xs text-transform-none">
                                        <h3><a href="#">Wisata yang ada di Air Terjun Sipiso-piso</a></h3>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="dark" style="background-color: #222;">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-md-4">

                            <div class="widget">

                                <div class="row col-mb-30">
                                    <div class="col-lg-12">
                                        <div class="footer-big-contacts">
                                            <span>Hubungi kami:</span>
                                            62 821 6822 2112
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="footer-big-contacts">
                                            <span>Kirimi kami pesan:</span>
                                            info@adarentcarhub.com
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-8">

                            <div class="widget widget_links">

                                <h4>Popular Destinations</h4>

                                <div class="row col-mb-30">
                                    <div class="col-6">
                                        <ul>
                                            <li><a href="#">Kualanamu</a></li>
                                            <li><a href="#">Belawan</a></li>
                                            <li><a href="#">Binjai</a></li>
                                            <li><a href="#">Siantar</a></li>
                                            <li><a href="#">Tebing Tinggi</a></li>
                                            <li><a href="#">Brastagi</a></li>
                                            <li><a href="#">Sibolga</a></li>
                                            <li><a href="#">Balige</a></li>
                                            <li><a href="#">Tarutung</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li><a href="#">Samosir</a></li>
                                            <li><a href="#">Parapat</a></li>
                                            <li><a href="#">Sidikalang</a></li>
                                            <li><a href="#">Kabanjahe</a></li>
                                            <li><a href="#">Padang</a></li>
                                            <li><a href="#">Aceh</a></li>
                                            <li><a href="#">Sabang</a></li>
                                            <li><a href="#">Langkat</a></li>
                                            <li><a href="#">Nias</a></li>
                                            <li><a href="#">Lubuk Pakam</a></li>
                                            <li><a href="#">Pantai Cermin</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30">
                        <?php $y = date('Y'); ?>
                        <div class="col-md-6 text-center text-md-start">
                            Copyrights &copy; {{ $y }} Ada Rent Car Hub. All Rights Reserved by Boxity
                            Central Indonesia.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="social-icon si-small border-transparent h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon si-small border-transparent h-bg-instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                </a>

                            </div>

                            <div class="clear"></div>

                            <i class="bi-envelope"></i> info@adarentcarhub.com <span class="middot">&middot;</span> <i
                                class="fa-solid fa-phone"></i> +62 821 6822 2112
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('webpage/js/plugins.min.js') !!}"></script>
    <script src="{!! asset('webpage/js/functions.bundle.js') !!}"></script>

    <!-- Travel Demo Specific Script -->
    <script src="{!! asset('webpage/js/components/datepicker.js') !!}"></script>
    <!-- / -->

    <script>
        jQuery(function() {
            jQuery('.travel-date-group').datepicker({
                autoclose: true,
                startDate: "today"
            });
        });
    </script>

</body>

</html>
