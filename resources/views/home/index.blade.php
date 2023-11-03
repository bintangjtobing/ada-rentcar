@extends('welcome')
@section('content')
    <section id="slider"
        class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header include-topbar">
        <div class="slider-inner">

            <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
                data-arrows="false" data-pagi="false" style="background-color: #333;">
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
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" role="tab"
                                        href="#tab-flights"><i class="bi-car-front me-2"></i><span
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
                                                        <input type="text" value="" class="form-control text-start"
                                                            name="start" placeholder="MM/DD/YYYY">
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <label>Waktu Pengembalian</label>
                                                        <input type="text" value="" class="form-control text-start"
                                                            name="end" placeholder="MM/DD/YYYY">
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

                @foreach ($data as $item)
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{!! asset('assets/car/' . $item->image) !!}"
                                        alt="{{ $item->car_name }} - Ada Rent Car & Tour Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-left">
                                                <h3>{{ $item->car_name }}</h3>
                                                <h6>Dengan driver</h6>
                                                <span>
                                                    <b
                                                        style="color: #fff; background-color: var(--cnvs-themecolor); padding:4px;">Harga
                                                        mulai dari @idrcurrency($item->price) /hari</b><br><b
                                                        style="color: #fff;">Include:</b> <br>
                                                    <ol>
                                                        <li>Harga sewa mobil</li>
                                                        <li>Jasa supir</li>
                                                        <li>Bahan Bakar Minyak (Destinasi Dalam Kota)</li>
                                                    </ol>
                                                </span>
                                                <a href="https://s.id/order-rental-adarentcarhub" target="_blank"
                                                    type="button" class="btn btn-danger">Pesan
                                                    Sekarang</a>
                                                <a href="https://wa.me/6285261749957?text=Halo,%20saya%20ingin%20menyewa%20mobil%20%7B%7B{{ $item->car_name }}%7D%7D%20dari%20AdaRentCarHub.%0ABerikut%20informasi%20saya:%0A%0ANama:%20%0AAsal:%20%0ATujuan:%20%0ARencana%20sewa:%20%0AEstimasi%20Waktu%20Sewa:%20%0A%0ATerima%20kasih%20AdaRentCarHub!"
                                                    target="_blank" type="button" class="btn btn-success">Sewa by
                                                    Whatsapp</a>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach

            </div>

            <a href="#" class="button button-full button-dark text-center mb-6">
                <div class="container">
                    Note: Harga tidak berlaku pada hari libur ataupun pada saat <i>high season.</i>
                </div>
            </a>

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
            <div class="section mt-6 footer-stick">
                <div class="container text-left mw-md">

                    <div class="heading-block mb-4 border-bottom-0">
                        <h3>Ketentuan dan cara penyewaan di <br>Ada Rental Car & Tour Hub</h3>
                    </div>
                    <p class="lead">
                    <h4>Cara penyewaan mobil:</h4>
                    <ol>
                        <li>
                            <h5 style="margin-bottom:0;">Pesan melalui online (tombol pesan sekarang) atau, pesan langsung
                                dari whatsapp.</h5>
                            <p>Pilih mobil yang ingin dipesan diatas, kamu bisa klik langsung <i>Pesan Sekarang</i> ataupun
                                sewa dari tombol <i>Sewa by Whatsapp</i></p>
                        </li>
                        <li>
                            <h5 style="margin-bottom:0;">Down Payment (DP) sebesar 50% dari total biaya sewa.</h5>
                            <p>Setelah kamu setuju, dan cocok dengan harga yang udah disepakati di pembicaraan whatsapp,
                                kamu bisa transfer dana DP nya ke rekening BCA atas nama Doan Mikhael Situmorang, dengan
                                nomor rekening 8280 4886 08</i></p>
                        </li>
                        <li>
                            <h5 style="margin-bottom:0;">Waktunya penjemputan customer/client di asal alamat</h5>
                            <p>
                                Kamu tinggal duduk tenang, dan driver kami yang akan menjemput.
                            </p>
                        </li>
                    </ol>
                    </p>
                    <p class="lead">
                    <h4>Ketentuan penyewaan:</h4>
                    <ol>
                        <li>Penggunaan sewa mobil di Ada Rent Car & Tour Hub, mewajibkan supir untuk menemani perjalanan
                            customer.</li>
                        <li>Penggunaan sewa mobil di Ada Rent Car & Tour Hub 1 hari merupakan 12 jam. Maka untuk 24 jam,
                            terhitung 2 hari. Begitu juga dengan seterusnya.</li>
                        <li>Untuk penyewaan dalam kota, harga estimasi nya merupakan harga yang termasuk penyewaan mobil,
                            supir
                            dan bahan bakar minyak.</li>
                        <li>Untuk penyewaan di luar kota, harga estimasi nya merupakan harga yang termasuk penyewaan mobil,
                            dan
                            supir. (Tidak termasuk biaya penyebrangan (ferry))</li>
                        <li>Harga di poin 3 dan poin 4, tentu tidak termasuk dengan biaya tol, parkir, inap supir, dan
                            konsumsi
                            supir.</li>
                    </ol>
                    </p>

                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
