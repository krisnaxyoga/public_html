
<?php get_header(); ?>
<section class="section-header-banner">
    <div class="banner home-banner d-flex align-items-center">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h2 class="title-header text-light">
                        <?php echo $soms_redux['moto-text'] ?>
                    </h2>   
                    <p class="larger-txt text-light">   
                        <?php echo $soms_redux['moto-description'] ?>
                    </p>
                    <div class="card-menux mb-3 shadow p-3 bg-body">
                        <div class="card-body">
                            <form action="https://app.resellr.id/register" class="newsletter-form py-0" method="GET">
                                
                                <div class="row justify-content-between">
                                    <div class="col-md pr-0">
                                        <input class="form-url" type="text" name="subdomain" id="subdomain" placeholder="URL Toko Anda" autocomplete="off">
                                    </div>

                                    <div class="col-md-auto">
                                        <button type="submit" class="custom-btn secondary-btn">Mulai Seller UP!</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <input class="radio radio-paket" id="plan1" type="radio" name="plan" value="2" checked> <label for="plan1" class="text-light small plan-label">Reseller</label>

                                        <input class="radio radio-paket ml-4" id="plan2" type="radio" name="plan" value="4"> <label for="plan2" class="text-light small plan-label">Dropshiper & Reseller</span>
                                    </div>
                                </div>
                                <!-- End of .row -->
                            </form>
                        </div>
                    </div>
                    <div class="row py-3 text-left text-light mb-5">
                        <div class="col-md-6 small">
                            <p class="mb-0"><i class="fa fa-check-circle"></i> Set Up Toko 3 Menit</p>
                            <p class="mb-0"><i class="fa fa-check-circle"></i> Reseller & Dropshipper Management</p>
                        </div>
                        <div class="col-md-6 small">
                            <p class="mb-0"><i class="fa fa-check-circle"></i> Terintegrasi Sistem Pembayaran</p>
                            <p class="mb-0"><i class="fa fa-check-circle"></i> Micro Influencer Support</p>
                        </div>
                    </div>
                </div>
                <!-- End of .col-lg-5 -->
                <div class="col-lg-6">
                    <div class="img-container text-center text-lg-right">
                        <img src="<?php echo $soms_redux['hero-icon']['url']; ?>" alt="Home banner image" class="img-fluid">
                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-7 -->
            </div>
            <!-- End of .row -->
        </div>
    <!-- End of .container -->
    </div>

    <!-- achievements starts -->
    <div class="achievements section-gap theme-bg-refeed achievement-extra-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="<?php echo $soms_redux['section00-icon']['url']; ?>" alt="Happy Clients">
                        </div>
                            <!-- End of .icon-container -->
        
                        <div class="counter-wrapper">
                            <div class="number">
                                <span class="">26K
                            </div>
                            <!-- End of .number -->
                            Merchant Kami
                        </div>
                        <!-- End of .counter-wrapper -->
                    </div>
                    <!-- End of .counter-block -->
                </div>
                <!-- End of .col-4 -->
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="<?php echo $soms_redux['total-transaksi']['url']; ?>" alt="Running Projects">
                        </div>
                        <!-- End of .icon-container -->
                        
                        <div class="counter-wrapper">
                            <div class="number">
                                <span class="counter">389389B
                            </div>
                            <!-- End of .number -->
                            Total Transaksi
                        </div>
                        <!-- End of .counter-wrapper -->
                    </div>
                    <!-- End of .counter-block -->
                </div>
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="<?php echo $soms_redux['dropshiperbergabung']['url']; ?>" alt="Project Completed">
                        </div>
                        <!-- End of .icon-container -->
                        
                        <div class="counter-wrapper">
                            <div class="number">
                                <span class="counter">98K
                            </div>
                            <!-- End of .number -->
                            Dropshipper Tergabung
                        </div>
                        <!-- End of .counter-wrapper -->
                    </div>
                    <!-- End of .counter-block -->
                </div>
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .achievements -->
</section>  
    
<section class="services light-grey-bg container p-0" id="cynic-services" data-scroll-offset="165">
    <div class="floating-service-wrapper section-gap">
        <div class="container">
            <h2 class="section-title text-center">Tingkatkan konversi Jualan Anda sampai 300%</h2>
            <div class="grid-wrapper">
                <div class="row justify-content-center">
                <?php foreach ($soms_redux['tingkat'] as $value):?>
                    <div class="col-xl-4 col-lg-6">
                        <a href="logo-and-branding.html" class="service-block text-center">
                            <img src="<?php echo $value['image'] ?>" alt="Logo and branding">
                            <h4><?php echo $value['title'] ?></h4>
                            <p><?php echo $value['description'] ?></p>
                        </a>
                        <!-- End of .service-block -->
                    </div>
                    <!-- End of .col-lg-4 -->
                <?php endforeach ?>
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .grid-wrapper -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .floating-service-wrapper -->
</section>
<!-- our features starts -->
<section class="features light-grey-bg" id="cynic-about" data-scroll-offset="165">
    <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="features-content text-center">
                            <h2 class="section-title mb-5">Cukup 5 langkah mudah, <br>Anda akan siap kebanjiran order</h2>
                            <img src="<?php echo $soms_redux['step5']['url']; ?>" class="img-responsive w-100 mt-4" alt="">
                        </div>
                        <!-- End of .features-content -->
                    </div>
                    <!-- End of .col-lg-6 -->
                    
                    <div class="col-lg-12 text-center mt-5">
                        <button type="submit" class="custom-btn secondary-btn">Buka Toko Sekarang!</button>
                        <a href="/tutorial" class="btn btn-info custom-btn ml-2"><i class="fa fa-info-circle" aria-hidden="true"></i> Tutorial</a>
                    </div>
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .features -->

<!-- Projects starts -->
<section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center">Merchant Kami</h2>
            <div class="item-showcase grid-wrapper__small-padding">
                <div class="row merchant-carousel-wrapper owl-two owl-carousel">
                    <?php foreach ($soms_redux['merchankami'] as $value):?> 
                        <div class="item">
                            <a href="https://panenpa.refeed.id" target="_blank" class="img-card text-center portfolio-card white-bg">
                                <img src="<?php echo $value['image'] ?>" alt="product" class="img-fluid">
                                <h4><?php echo $value['title'] ?></h4>
                            </a>
                            <!-- End of .img-card -->
                        </div>
                        <!-- End of .col-lg-4 -->
                    <?php endforeach ?>
                </div>
            </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->
<section class="latest-news section-gap light-grey-bg" id="cynic-news" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center">Resellr Blog</h2>
        
            <p class="larger-txt text-center">Thoughts, stories and ideas.</p>
        
        <div class="grid-wrapper">
            <div class="row justify-content-center">
                
                <div class="col-lg-6 col-md-6 mb-5">
                    <a href="https://blog.refeed.id/platform-e-commerce-indonesia/" target="_blank" class="img-card news-card mw-100 m-0">
                        <div class="row">
                            <div class="col-5 py-4 pl-5 pr-0">
                                <div style='background: url("https://blog.refeed.id/content/images/size/w600/2021/02/platform-ecommerce.jpg") no-repeat scroll center / cover transparent; min-height: 150px'></div>
                            </div>
                            <div class="col-7 py-4 pl-4 pr-5">
                                <h4 class="p-0">Feb 15, 2021
                                    <span>Platform E-Commerce Indonesia</span>
                                </h4>
                            </div>
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-6 col-md-6 mb-5">
                    <a href="https://blog.refeed.id/jenis-dan-kelebihan-platform-toko-online-indonesia/" target="_blank" class="img-card news-card mw-100 m-0">
                        <div class="row">
                            <div class="col-5 py-4 pl-5 pr-0">
                                <div style='background: url("https://blog.refeed.id/content/images/size/w600/2021/02/2741840.jpg") no-repeat scroll center / cover transparent; min-height: 150px'></div>
                            </div>
                            <div class="col-7 py-4 pl-4 pr-5">
                                <h4 class="p-0">Feb 08, 2021
                                    <span>Jenis dan Kelebihan Platform Toko Online Indonesia</span>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-6 col-md-6 mb-5">
                    <a href="https://blog.refeed.id/4-strategi-psikologi-menentukan-harga-produk-bisnis-anda/" class="img-card news-card mw-100 m-0" target="_blank">
                        <div class="row">
                            <div class="col-5 py-4 pl-5 pr-0">
                                <div style='background: url("https://blog.refeed.id/content/images/size/w600/2020/08/4-Strategi-Psikologi-Menentukan-Harga-Produk.jpg") no-repeat scroll center / cover transparent; min-height: 150px'></div>
                            </div>
                            <div class="col-7 py-4 pl-4 pr-5">
                                <h4 class="p-0">Agt 20, 2020
                                    <span>4 Strategi Psikologi Menentukan Harga Produk Bisnis Anda</span>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-6 col-md-6 mb-5">
                    <a href="https://blog.refeed.id/4-langkah-awal-merintis-jualan-online/" class="img-card news-card mw-100 m-0" target="_blank">
                        <div class="row">
                            <div class="col-5 py-4 pl-5 pr-0">
                                <div style='background: url("https://blog.refeed.id/content/images/size/w600/2020/08/Langkah-Awal-Merintis-Jualan-Online.jpg") no-repeat scroll center / cover transparent; min-height: 150px'></div>
                            </div>
                            <div class="col-7 py-4 pl-4 pr-5">
                                <h4 class="p-0">Agt 13, 2020
                                    <span>4 Langkah Awal Merintis Jualan Online</span>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-6 col-md-6 mb-5">
                    <a href="https://blog.refeed.id/9-warna-strategi-psikologi-pada-desain-logo/" class="img-card news-card mw-100 m-0" target="_blank">
                        <div class="row">
                            <div class="col-5 py-4 pl-5 pr-0">
                                <div style='background: url("https://blog.refeed.id/content/images/size/w600/2020/08/4052727.jpg") no-repeat scroll center / cover transparent; min-height: 150px'></div>
                            </div>
                            <div class="col-7 py-4 pl-4 pr-5">
                                <h4 class="p-0">Agt 11, 2020
                                    <span>9 Warna Strategi Psikologi pada Desain Logo</span>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-6 col-md-6 mb-5">
                    <a href="https://blog.refeed.id/6-bagian-penting-dari-sebuah-logo/" class="img-card news-card mw-100 m-0" target="_blank">
                        <div class="row">
                            <div class="col-5 py-4 pl-5 pr-0">
                                <div style='background: url("https://blog.refeed.id/content/images/size/w600/2020/08/Bagian-Penting-Dari-Sebuah-Logo.jpg") no-repeat scroll center / cover transparent; min-height: 150px'></div>
                            </div>
                            <div class="col-7 py-4 pl-4 pr-5">
                                <h4 class="p-0">Agt 06, 2020
                                    <span>6 Bagian Penting Dari Sebuah Logo</span>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-12 text-center">
                    <a href="https://blog.refeed.id" target="_blank" class="custom-btn secondary-btn">Artikel Lainnya</a>
                </div>
                <!-- End of .text-center -->
            </div>
            <!-- End of .row -->

        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .latest-news -->

<!-- customer-reviews starts -->
<section class="customer-reviews section-gap light-grey-bg">
    <div class="container">
        <h2 class="section-title text-center">Testimoni</h2>
        <div class="grid-wrapper">
            <div class="merchant-carousel-wrapper owl-two owl-carousel row justify-content-center">
            <?php foreach ($soms_redux['merchantkami2'] as $value):?> 
                <div class="item">
                     <div class="img-card review-card text-left white-bg">
                        <div class="media align-items-center">
                            <img class="img-fluid " src="<?php echo $value['image'] ?>" style="height: 55px; width: auto;" alt="reviewer image">
                            <div class="media-body">
                                <h5><?php echo $value['title'] ?></h5>
                                <p><?php echo $value['url'] ?></p>
                            </div>
                        </div>
                        <!-- End of .media -->
                        <p><?php echo $value['description'] ?></p>
                    </div>
                </div>
                    <!-- End of .col-lg-4 -->
                <?php endforeach ?>
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .customer-reviews -->

<div class="clients">
    <div class="container">
        <h2 class="section-title text-center mb-5">Metode Pembayaran & Pengiriman</h2>
        <div class="row align-items-center payment-carousel-wrapper owl-one owl-carousel">
            <?php foreach ($soms_redux['metodepembayaran'] as $value):?> 
                <div class="item px-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img class="payment-img-sm" src="<?php echo $value['image'] ?>" alt="clients' logo">
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="row align-items-center payment-carousel-wrapper owl-one owl-carousel">
            <?php foreach ($soms_redux['metodepengiriman'] as $value):?> 
                <div class="item px-3">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <img class="payment-img-sm" src="<?php echo $value['image'] ?>" alt="clients' logo">
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!-- End of .clients-carousel-wrapper -->
    </div>
    <!-- End of .container -->
</div>

<div class="clients pt-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Partner Kami</h2>
        <div class="row align-items-center clients-carousel-wrapper owl-two owl-carousel">
        <?php foreach ($soms_redux['partnerkami'] as $value):?>     
            <div class="item px-3">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img class="client-img-sm" src="<?php echo $value['image'] ?>" alt="clients' logo">
                        <hr class="w-50 mx-auto mb-3 mt-5">
                        <div class="text-left pt-4 px-1">
                            <h5 class="text-secondary mb-3"><?php echo $value['title'] ?></h5>
                            <p class="regular small text-secondary text-client"><?php echo $value['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <!-- End of .clients-carousel-wrapper -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .clients -->

<div class="modal fade team-modal" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body text-center">
                <!-- <img src="" alt="team modal image" class="img-fluid modal-feat-img"> -->
                <div class="modal-title">
                    <h4>Steve Johnson
                        <span>Chief Exicutive Officer</span>
                    </h4>
                </div>
                <!-- End of .modal-title -->
                <p>To be fair, in certain contexts, your professional bio does need to be more formal, like Mr. Erickson's up there. But in many cases, writing a bio that's readable  even conversational is actually a really good thing. But once created, this bio should represent who you are in the eyes.</p>

                <ul class="social-icons">
                    <li>
                        <a href="http://www.behance.net/" target="_blank" rel="noopener">
                            <i class="fab fa-behance"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://dribbble.com/" target="_blank" rel="noopener">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
                <!-- End of .social-icons -->
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<!-- End of .team-modal -->

<!-- Product Modal Starts -->
<div class="modal fade full-width-modal product-modal" id="product-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="modal-img text-center">
                            <!-- <img src="" alt="product-modal" class="img-fluid"> -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="modal-body__inner-content">
                            <h4>
                                <span>Chief Exicutive Officer</span>
                                Creative Web Design
                            </h4>
                            <p>In the early years of the commercial web, we were all Web Designers. Digital interactions, at that stage, were not incredibly sophisticated: most websites were structured as a set of individual pages connected to each other via buttons and links.</p>

                            <p>In more complex websites and information-heavy systems, the web designer would pair with an Information Architect to make sure content was organized in a way that made for that.</p>
                            <a href="about.html" class="hyperlink">Launch Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<!-- End of .portfolio-modal -->

<!-- Quote modal starts
    ================================= -->
<div class="modal fade full-width-modal quote-modal" id="quote-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content white-bg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body d-flex align-items-center justify-content-center text-center">
                <div class="quote-form-wrapper text-center">
                    <h3>Get a Free Quote</h3>
                    <form method="POST" class="quote-form text-center row" action="#">
                        <div class="col-lg-6">
                            <input type="text" name="fname" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="email" placeholder="Email">
                        </div>

                        <div class="col-lg-6">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="website" placeholder="Website">
                        </div>
                        <div class="col-lg-12">
                            <textarea placeholder="Message" name="message"></textarea>
                            <button type="submit" class="custom-btn secondary-btn w-100">GET A QUOTE</button>
                            <div class="social-icons-wrapper d-flex justify-content-center">
                                <p>Follow us:</p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="http://www.facebook.com/" target="_blank" rel="noopener">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://twitter.com/" target="_blank" rel="noopener">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://youtube.com/" target="_blank" rel="noopener">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End of .social-icons -->
                            </div>
                            <!-- End of .social-icons-wrapper -->
                        </div>
                    </form>
                    <!-- End of .quote-form -->
                </div>
                <!-- End of .quote-form-wrapper -->
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<style>
        .client-img {
            height: 55px;
            width: auto;
            margin-top: 15px !important;
            margin-bottom: 5px !important;
        }
        .client-img-sm {
            height: 45px;
            width: auto;
            margin-top: 20px !important;
            margin-bottom: 10px !important;
        }
        .payment-img-sm {
            height: 45px;
            width: auto;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }
        .client3-img-sm {
            height: 45px;
            width: auto;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }
        .text-client {
            line-height: 1.5 !important;
        }

        .clients2-carousel-wrapper .owl-stage-outer {
            padding-right: 0rem !important;
        }
    </style>

<?php get_footer();
