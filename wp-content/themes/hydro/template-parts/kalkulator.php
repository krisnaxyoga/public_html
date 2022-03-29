<?php /* Template Name: kalkulator */ ?>
<?php get_header(); ?>
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('landing_v2.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kalkulator</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>All In One Toolkit untuk eCommerce. GRATIS!</h1>
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="<?php echo $soms_redux['nwq999']['url']; ?>" alt="Home banner image" class="img-fluid">
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


<!-- Projects starts -->
<section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
    <div class="container">
        <p class="larger-txt text-center">Gunakan All In One Toolkit untuk eCommerce dari kami untuk menentukan perancanaan yang tepat untuk membuat bisnis Anda semakin sukses.</p>

        <div class="item-showcase grid-wrapper__small-padding text-center">
            <div class="row text-left">
                <div class="col-lg-4 col-md-6 ">
                    <div class="img-card portfolio-card white-bg">
                        <h4>
                            <i class="far fa-heart-rate fa-2x mb-4"></i>
                            <span>Kalkulator Trafik</span>
                            <p>Satu – satunya kalkulator trafik eCommerce dan dropshiping yang bisa mengukur jumlah trafik yang di butuhkan dalam sebulan untuk mencapai perkiraan jumlah order dan mencapai target pendapatan Anda.</p>
                            <a href="{{route('landing_v2.calculator.traffic')}}" class="custom-btn btn-small success-btn mt-2 mb-0 text-capitalize"><small>Hitung Sekarang</small></a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="img-card portfolio-card white-bg">
                        <h4>
                            <i class="far fa-file-alt fa-2x mb-4"></i>
                            <span>Kalkulator Profit margin</span>
                            <p>Jika Anda ingin mengetahui profit yang bisa Anda dapatkan atau besaran markup dari harga yang perlu Anda terapkan, kalkulator profit margin dari kami bisa menghitungnya dalam beberapa detik.</p>
                            <a href="{{route('landing_v2.calculator.profit')}}" class="custom-btn btn-small success-btn mt-2 mb-0 text-capitalize"><small>Hitung Sekarang</small></a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="img-card portfolio-card white-bg">
                        <h4>
                            <i class="far fa-shopping-cart fa-2x mb-4"></i>
                            <span>Kalkulator Tingkat Retensi</span>
                            <p>Tingkatkan retensi pengguna dan dapatkan pelanggan setia untuk toko online Anda. Pelajari cara mengoptimalkan dan meningkatkan tingkat retensi toko Anda.</p>
                            <a href="{{route('landing_v2.calculator.retensi')}}" class="custom-btn btn-small success-btn mt-2 mb-0 text-capitalize"><small>Hitung Sekarang</small></a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="img-card portfolio-card white-bg">
                        <h4>
                            <i class="far fa-chart-line fa-2x mb-4"></i>
                            <span>Kalkulator ROI</span>
                            <p>Apakah toko eCommerce Anda menghasilkan profit yang baik? Hitung estimasi pengembalian investasi toko Anda dengan kalkulator ROI kami dan dapatkan kiat dalam memaksimalkannya.</p>
                            <a href="{{route('landing_v2.calculator.roi')}}" class="custom-btn btn-small success-btn mt-2 mb-0 text-capitalize"><small>Hitung Sekarang</small></a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="img-card portfolio-card white-bg">
                        <h4>
                            <i class="far fa-calculator fa-2x mb-4"></i>
                            <span>Kalkulator CPM</span>
                            <p>Ketahui sebelumnya berapa banyak anggaran yang Anda butuhkan untuk kampanye iklan Anda melalui kalkulator CPM kami yang praktis. Cepat, mudah, dan menyajikan nilai yang Anda butuhkan.</p>
                            <a href="{{route('landing_v2.calculator.cpm')}}" class="custom-btn btn-small success-btn mt-2 mb-0 text-capitalize"><small>Hitung Sekarang</small></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->
<?php get_footer(); ?>