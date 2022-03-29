<?php
/* Template Name: one-stop-export-retail */
?>

<?php get_header(); ?>
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>One Stop Export Retail</h1>
                <a href="{{route('landing_v2.price')}}" class="custom-btn secondary-btn">Mulai Sekarang!</a>
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="<?php echo $soms_redux['iawnnnnnnnmmmmmmmmm']['url']; ?>" alt="Home banner image" class="img-fluid">
                </div>
                <!-- End of .img-container -->
            </div>
            <!-- End of .col-lg-7 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .banner -->

<!-- our features starts -->
<section class="features section-gap" id="cynic-about" data-scroll-offset="165">
    <div class="container">


        <div class="features-grid">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center text-lg-left">
                    <div class="img-container">
                        <img src="<?php echo $soms_redux['iawznmmmmmmmmm']['url']; ?>" alt="Responsive Web Design"
                            class="img-fluid">

                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-6 -->

                <div class="col-lg-6 offset-lg-1">
                    <div class="features-content">
                        <p><?php echo $soms_redux['iawznmmmmmmm']; ?></p>
                    </div>
                    <!-- End of .features-content -->
                </div>
                <!-- End of .col-lg-6 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .features-grid -->

        
        <div class="item-showcase grid-wrapper__small-padding text-center">
            <div class="row">
                <?php foreach ($soms_redux['iawznmmmm'] as $value):?>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="img-card portfolio-card white-bg">
                            <img src="<?php echo $value['image']; ?>" class="w-50" alt="">
                            <h4>
                                <span><?php echo $value['title']; ?></span>
                            </h4>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
    <!-- End of .container -->
</section>
<!-- End of .features -->

<!-- Process starts -->
<section class="our-process section-gap light-grey-bg">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $soms_redux['xswqrt']; ?></h2>
        <p class="larger-txt text-center"><?php echo $soms_redux['xsaq']; ?> </p>

        <div class="process-tab-container grid-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="nav nav-pills">

                        <a class="nav-link active" data-toggle="pill" href="#process-tab-1">
                            <span>01</span>
                            Gudang
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                        <a class="nav-link " data-toggle="pill" href="#process-tab-2">
                            <span>02</span>
                            Pengiriman First Mile
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                        <a class="nav-link " data-toggle="pill" href="#process-tab-3">
                            <span>03</span>
                            Bea Cukai Bandar Udara Asal
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                        <a class="nav-link " data-toggle="pill" href="#process-tab-4">
                            <span>04</span>
                            Pengangkutan Barang
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                        <a class="nav-link " data-toggle="pill" href="#process-tab-5">
                            <span>05</span>
                            Bea Cukai Bandar Udara Tujuan
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                        <a class="nav-link " data-toggle="pill" href="#process-tab-6">
                            <span>06</span>
                            Distribusi
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                        <a class="nav-link " data-toggle="pill" href="#process-tab-7">
                            <span>07</span>
                            Pengiriman Last Mile
                            <i class="fal fa-long-arrow-right"></i>
                        </a>

                    </div>
                </div>
                <!-- End of .col -->

                <div class="col-lg-7">
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="process-tab-1">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/process-merchantwarehouse-e1561533412715.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>1. Gudang</h3>
                                    <p>Waktu kosong dapat berarti biaya persediaan yang lebih besar untuk Anda dan bisnis Anda, dan bisa berakibat pada keterlambatan dalam pengiriman barang. Di Refeed, kami memastikan bahwa hal ini tidak akan terjadi pada pedagang dan pelanggan mereka.</p>
                                    <p>Teknologi mutakhir kami memungkinkan ketepatan waktu dan efisiensi dalam penjadwalan penjemputan barang. Dengan sistem kami, kami akan memastikan bahwa semua paket dijemput tepat waktu dari gudang Anda ketika mereka siap dikirimkan.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                        <div class="tab-pane fade " id="process-tab-2">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/paket-barang.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>2. Pengiriman First Mile</h3>
                                    <p>Mulailah proses pengiriman barang Anda dengan awal yang kuat saat pengiriman first mile. Masukkan data mengenai kapan dan di mana paket Anda harus diambil beserta dengan alamat gudang dan toko Anda. Refeed akan mengkoordinasikan hal lainnya untuk Anda. </p>
                                    <p>Kami akan memastikan keakuratan data yang diberikan, dan juga memastikan permintaan penjemputan dilakukan dengan tepat waktu. Di Refeed, kami ingin Anda mengirimkan barang tanpa stres.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                        <div class="tab-pane fade " id="process-tab-3">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/process-customs1-e1561622152650.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>3. Proses Bea Cukai di Bandar Udara Asal</h3>
                                    <p>Ini merupakan pintu gerbang pertama yang harus dilewati oleh barang eCommerce Anda, dan terkadang, mengikuti perkembangan peraturan bea cukai dari berbagai negara bisa menjadi sebuah tantangan.</p>
                                    <p>Untuk menyederhanakan proses ini, refeed akan membantu mempersiapkan seluruh dokumen yang diperlukan secara otomatis menggunakan sistem kami. Hal ini memastikan penyelesaian bea cukai yang cepat, lancar, dan efisien di negara asal.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                        <div class="tab-pane fade " id="process-tab-4">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/process-linehaul-e1561533394621.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>4. Pengangkutan Barang</h3>
                                    <p>Dengan banyaknya jumlah pengiriman barang lintas batas dan terbatasanya ruang pada pesawat, Anda harus menjadi kompetitif untuk memastikan ada cukup ruang di kargo udara untuk barang Anda.</p>
                                    <p>Jaringan mitra Refeed yang luas membantu untuk memastikan bahwa selalu ada cukup ruang untuk paket Anda, kapanpun Anda memerlukannya. Kami akan membantu Anda mengirimkan barang secara tepat waktu untuk menjaga kepercayaan pelanggan Anda.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                        <div class="tab-pane fade " id="process-tab-5">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/process-customs2-e1561533455601.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>5. Bea Cukai di Bandar Udara Tujuan</h3>
                                    <p>Mengelola bea cukai di satu negara saja sudah cukup membingungkan. Apabila dikalikan dengan lingkungan kepabeanan negara-negara di Asia Tenggara yang dinamis, hal ini bisa menjadi sangat kompleks. Di Refeed, kami akan membantu Anda mengerti prosedur  dan praktek kepabeanan, sehingga Anda dapat memastikan proses yang mulus untuk pengiriman Anda.</p>
                                    <p>Kami juga akan memastikan Anda memeriksa apakah barang kiriman Anda termasuk dalam daftar benda yang dilarang, memastikan pelabelan dan dokumentasi yang akurat, dan juga menghitung biaya pajak dan kepabeanan. Refeed juga akan terus mengikuti perkembangan dari proses dan hukum bea cukai di berbagai negara untuk menghindari kejadian di mana barang kiriman Anda tersangkut di bea cukai.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                        <div class="tab-pane fade " id="process-tab-6">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/process-distribution-e1561533461529.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>6. Distribusi</h3>
                                    <p>Mitra-mitra kami memiliki kemampuan untuk mengelola pemenuhan dan distribusi setelah proses bea cukai untuk memastikan barang kiriman Anda disortir dan dikirimkan ke pelanggan yang tepat.</p>
                                    <p>Kami memastikan seluruh paket dikirimkan dengan memperhatikan destinasi akhir mereka untuk memastikan pengiriman mil terakhir yang efisien. Barang kiriman Anda akan sampai ke tangan pelanggan Anda dengan cepat.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                        <div class="tab-pane fade " id="process-tab-7">
                            <div class="img-card process-card">
                                <img src="http://localhost/refeed-wordpress/wp-content/uploads/2022/03/Truk-1.jpg" alt="" class="img-fluid">
                                <div class="process-card-content">
                                    <h3>7. Pengiriman Last Mile</h3>
                                    <p>Menduga yang tak terduga adalah moto yang perlu diingat ketika menjelajahi lalu lintas di Asia Tenggara. Dengan jaringan mitra pengiriman last mile kami yang berkualitas, sistem kami dapat merencanakan rute yang paling optimal senhingga paket Anda dapat dikirimkan dengan cepat ke pelanggan Anda.</p>
                                    <p>Kami juga mengerti pentingnya transparansi dalam proses pengiriman barang. Sistem pelacakan dan penelusuran kami juga akan menginformasikan status dari proses pengiriman terakhir ini kepada Anda dan pelanggan Anda.</p>
                                </div>
                            </div>
                            <!-- undefined -->
                        </div>

                    </div>
                </div>
                <!-- End of .col -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .process-tab-container -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .process -->

<!-- our features starts -->
<section class="features section-gap" id="cynic-about" data-scroll-offset="165">
    <div class="container">
        <div class="features-grid text-center">
            <div class="row align-items-center mb-5">
                <div class="col-lg-12">
                    <div class="features-content text-center">
                        <h2 class="section-title">Alur kerja Dropshipping Store:</h2>
                        <img src="{{asset('/landing_assets/images/export/flow-export.png')}}" class="w-75" alt="">
                    </div>
                    <!-- End of .features-content -->
                </div>
            </div>
            <!-- End of .row -->
            <a href="{{route('landing_v2.price')}}" class="custom-btn secondary-btn">Mulai Sekarang!</a>
        </div>
        <!-- End of .features-grid -->


    </div>
    <!-- End of .container -->
</section>
<!-- End of .features -->
<?php get_footer();