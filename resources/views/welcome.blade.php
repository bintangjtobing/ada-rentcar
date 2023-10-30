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
    <link rel="stylesheet" href="{!! asset('webpage/style.css?' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-icons.css?' . rand(10000, 99999)) !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/components/datepicker.css?' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('webpage/demos/travel/travel.css?' . rand(10000, 99999)) !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/custom.css?' . rand(10000, 99999)) !!}">
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
                                        <div></i>Tentang AdaRental</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Hubungi AdaRental</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Blog</div>
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

        @yield('content')

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

                                <h4>Destinasi</h4>

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
                                            <li><a href="#">Bandara Silangit</a></li>
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
    <script src="{!! asset('webpage/js/plugins.min.js?' . rand(10000, 99999)) !!}"></script>
    <script src="{!! asset('webpage/js/functions.bundle.js?' . rand(10000, 99999)) !!}"></script>

    <!-- Travel Demo Specific Script -->
    <script src="{!! asset('webpage/js/components/datepicker.js?' . rand(10000, 99999)) !!}"></script>
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
