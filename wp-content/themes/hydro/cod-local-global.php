<?php
/* Template Name: cod-local-global */
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
                <h1>Cash On Delivery Service</h1>
                <a href="{{route('landing_v2.price')}}" class="custom-btn secondary-btn">Mulai Sekarang!</a>
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="<?php echo $soms_redux['xasqe']['url']; ?>" alt="Home banner image" class="img-fluid">
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
                        <img src="<?php echo $soms_redux['yququwq']['url']; ?>" alt="Responsive Web Design"
                            class="img-fluid">

                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-6 -->

                <div class="col-lg-6 offset-lg-1">
                    <div class="features-content">
                        <p><?php echo $soms_redux['yq1qq']; ?> </p>
                    </div>
                    <!-- End of .features-content -->
                </div>
                <!-- End of .col-lg-6 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .features-grid -->


    </div>
    <!-- End of .container -->
</section>
<!-- End of .features -->

<!-- our features starts -->
<section class="features section-gap" id="cynic-about" data-scroll-offset="165">
    <div class="container">


        <div class="features-grid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="features-content">
                        <h2 class="section-title"><?php echo $soms_redux['yquzz']; ?></h2>
                        <?php echo $soms_redux['ywaqde']; ?>
                    </div>
                    <!-- End of .features-content -->
                </div>
                <!-- End of .col-lg-6 -->

                <div class="col-lg-5 text-center text-lg-left offset-lg-1">
                    <div class="img-container">
                        <img src="<?php echo $soms_redux['ywzzz']['url']; ?>" alt="Responsive Web Design"
                            class="img-fluid">
                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-6 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .features-grid -->


    </div>
    <!-- End of .container -->
</section>
<!-- End of .features -->

<!-- our features starts -->
<section class="features section-gap" id="cynic-about" data-scroll-offset="165">
    <div class="container">


        <div class="features-grid text-center">
            <div class="row text-left">
                <div class="col-lg-6 px-5">
                    <div class="features-content">
                        <h2 class="section-title"><?php echo $soms_redux['yqz1wuzz']; ?> </h2>
                        <img src="<?php echo $soms_redux['ytyqss']['url']; ?>" class="w-100" alt="">
                    </div>
                    <!-- End of .features-content -->
                </div>
                <!-- End of .col-lg-6 -->

                <div class="col-lg-5">
                    <div class="features-content">
                        <h2 class="section-title"><?php echo $soms_redux['yqiq88']; ?></h2>
                        <p><?php echo $soms_redux['yqiq8']; ?></p>
                        <h2 class="section-title"><?php echo $soms_redux['opasaw']; ?></h2>
                        <p><?php echo $soms_redux['yq01ll']; ?> </p>
                        <h2 class="section-title"><?php echo $soms_redux['y7p01ll']; ?> </h2>
                        <?php echo $soms_redux['ypzwas'] ?> 
                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-6 -->
            </div>
            <!-- End of .row -->
            <a href="{{route('landing_v2.price')}}" class="custom-btn secondary-btn mt-5">Mulai Sekarang!</a>
        </div>
        <!-- End of .features-grid -->


    </div>
    <!-- End of .container -->
</section>

<?php get_footer();