@extends('welcome')
@section('title')
    Rental Mobil Terpercaya dan Terjangkau di Medan
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
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
                                        alt="{{ $item->car_name }} - Ada Rent Car & Tour Hub - Rental Terpercaya dan Termurah di Kota Medan">
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
                                                <a href="https://wa.me/628216822211?text=Halo,%20saya%20ingin%20menyewa%20mobil%20%7B%7B{{ $item->car_name }}%7D%7D%20dari%20AdaRentCarHub.%0ABerikut%20informasi%20saya:%0A%0ANama:%20%0AAsal:%20%0ATujuan:%20%0ARencana%20sewa:%20%0AEstimasi%20Waktu%20Sewa:%20%0A%0ATerima%20kasih%20AdaRentCarHub!"
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
