<?php /* Template Name: affiliasi */ ?>
<?php get_header(); ?>
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('landing_v2.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Affiliasi</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Menjadi Refeed Partner</h1>
                <p class="larger-txt">Miliki pendapatan bulanan seumur hidup, dengan alat penelitian produk terbaik di pasar</p>
                <a href="{{env('APP_BASE_URL').'/affiliasi/register'}}" class="custom-btn secondary-btn">Mulai Sekarang!</a>
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                <img src="<?php echo $soms_redux['nwq999']['url']; ?>" alt="Home banner image" class="img-fluid">
				</div>
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

<!-- Section latest-news starts -->
<section class="latest-news section-gap light-grey-bg" id="cynic-news" data-scroll-offset="75">
    <div class="container">
        <div class="grid-wrapper">
            <div class="row justify-content-center">
                
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="img-card news-card">
                        <img src="{{asset('landing_assets/images/affiliasi/products.jpg')}}" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>
                                <span>20% Komisi setiap bulannya</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="img-card news-card">
                        <img src="{{asset('landing_assets/images/affiliasi/store_design.jpg')}}" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>
                                <span>Rp. 500,- Komisi per transaksi, tumbuh bersama merchant Anda</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="img-card news-card" target="_blank">
                        <img src="{{asset('landing_assets/images/affiliasi/boost.jpg')}}" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>
                                <span>Mendapat bayaran untuk memberikan nilai lebih ke orang lain</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->

        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .latest-news -->
<?php get_footer(); ?>