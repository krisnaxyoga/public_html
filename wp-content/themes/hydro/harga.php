<?php
/* Template Name: Price */
?>

<?php get_header(); ?>

<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Price</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Harga Layanan</h1>
                <p class="larger-txt"><?php echo $soms_redux['moto-price']; ?></p>

            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="<?php echo $soms_redux['price_banner1']['url']; ?>" alt="Home banner image" class="img-fluid">
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

<section class="pricing section-gap light-grey-bg" id="cynic-pricing" data-scroll-offset="75" data-scroll-offset-mobile="75">
    <div class="container">
        <h2 class="section-title text-center">Harga Layanan</h2>
        <p class="larger-txt text-center">Gak Perlu Mahal untuk Bisnis Makin Gede!</p>
        <div class="grid-wrapper pricing-grid-wrapper">
            <div class="row align-items-center justify-content-md-center">

                <div class="col-lg-4">
                    <div class="pricing-group h-63">
                        <!-- End of .group-title -->
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="pricing-block text-center">
                                <h3 class="pricing-level">

                                        <?php echo $soms_redux['xqw1']; ?>
                                    </h3>
                                    <div class="price">
                                        
                                        <?php echo $soms_redux['rwe1']; ?>
                                    </div>
                                   
                                    <!-- End of .price -->
                                    <div class="facilities text-left h-29">
                                        <?php echo $soms_redux['vsa1'] ?>
                                    </div>
                                    <!-- End of .facilities -->
                                    <a href="#"
                                        class="custom-btn secondary-btn shado">Mulai Bergabung</a>   
                                </div>
                                <!-- End of .pricing-block -->
                            </div>
                            <!-- End of .col-md-6 -->
                        </div>
                        <!-- End of .row -->
                    </div>
                    <!-- End of .pricing-group -->
                </div>
                <!-- End of .col-lg-6 -->
                <div class="col-lg-4">
               
                    <div class="pricing-group pricing-group-tengah h-63">
                    <span class="favorite">
                        <span class="favorit-title">
                            Favorit
                        </span>    
                    </span>
                        <!-- End of .group-title -->
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="pricing-block text-center">
                                <h3 class="pricing-level pt-0 text-light">
                                        <?php echo $soms_redux['xqw2']; ?>
                                    </h3>
                                    <div class="price text-light">
                                    <?php echo $soms_redux['rwe2']; ?>
                                    </div>
                                   
                                    <!-- End of .price -->
                                    <div class="facilities text-left h-29 text-light">
                                        <?php echo $soms_redux['vsa2'] ?>
                                    </div>
                                    <!-- End of .facilities -->
                                    <a href="#"
                                        class="custom-btn secondary-btn shado">Mulai Bergabung</a>   
                                </div>
                                <!-- End of .pricing-block -->
                            </div>
                            <!-- End of .col-md-6 -->
                        </div>
                        <!-- End of .row -->
                    </div>
                    <!-- End of .pricing-group -->
                </div>
                <!-- End of .col-lg-6 -->
                <div class="col-lg-4">
                    <div class="pricing-group h-63">
                        <!-- End of .group-title -->
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="pricing-block text-center">
                                <h3 class="pricing-level">
                                        <?php echo $soms_redux['xqw3']; ?>
                                    </h3>
                                    <div class="price">
                                    <?php echo $soms_redux['rwe3']; ?>
                                    </div>
                                   
                                    <!-- End of .price -->
                                    <div class="facilities text-left h-29">
                                        <?php echo $soms_redux['vsa3'] ?>
                                    </div>
                                    <!-- End of .facilities -->
                                    <a href="#"
                                        class="custom-btn secondary-btn shado">Mulai Bergabung</a>   
                                </div>
                                <!-- End of .pricing-block -->
                            </div>
                            <!-- End of .col-md-6 -->
                        </div>
                        <!-- End of .row -->
                    </div>
                    <!-- End of .pricing-group -->
                </div>
                <!-- End of .col-lg-6 -->

            </div>
            <!-- End of . -->
            
        </div>
        <!-- End of .grid-wrapper -->
        <div class="alert alert-info mt-5" role="alert">
            <h5 class="alert-heading mb-2"> <?php echo $soms_redux['xqw4']; ?></h5>
            <p> <?php echo $soms_redux['rwe4']; ?> <a href="https://ipaymu.com/id/contact-sales/" target="_blank">disini</a>.</p>
        </div>

    </div>
    <!-- End of .container -->
</section>

<?php get_footer();