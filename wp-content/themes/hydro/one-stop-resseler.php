<?php
/* Template Name: one-stop-resseler */
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
                <h1>One Stop Reseller</h1>
                <a href="{{route('landing_v2.price')}}" class="custom-btn secondary-btn">Mulai Sekarang!</a>
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="<?php echo $soms_redux['masahsasa']['url']; ?>" alt="Home banner image" class="img-fluid">
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
                        <img src="<?php echo $soms_redux['maamshaqwwioduq8']['url']; ?>" alt="Responsive Web Design"
                            class="img-fluid">

                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-6 -->

                <div class="col-lg-6 offset-lg-1">
                    <div class="features-content">
                        <p><?php echo $soms_redux['mdwasas']; ?> </p>
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
                        <h2 class="section-title"><?php echo $soms_redux['mcaasqqq111']; ?> </h2>
                        <?php echo $soms_redux['lqx3131']; ?>
                        
                    </div>
                    <!-- End of .features-content -->
                </div>
                <!-- End of .col-lg-6 -->

                <div class="col-lg-5 text-center text-lg-left offset-lg-1">
                    <div class="img-container">
                        <img src="<?php echo $soms_redux['lncamaa']['url']; ?>" alt="Responsive Web Design"
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

<!-- Projects starts -->
<section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $soms_redux['lahwqwyq']; ?></h2>

        <div class="item-showcase grid-wrapper__small-padding text-center">
            <div class="row text-left">
            <?php foreach ($soms_redux['wqwlqq'] as $value):?>
                <div class="col-lg-3 col-md-6 ">
                    <div class="img-card portfolio-card white-bg">
                        <h4>
                            <span><?php echo $value['title']; ?></span>
                            <?php echo $value['description']; ?>
                        </h4>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->

<!-- Projects starts -->
<section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
    <div class="container">
    <h2 class="section-title text-center"><?php echo $soms_redux['mndfs']; ?></h2>
            <div class="item-showcase grid-wrapper__small-padding text-center">
                <div class="row text-left">
                <?php foreach ($soms_redux['mcdjcacaranamca9112'] as $value):?>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="img-card portfolio-card white-bg">
                            <h4>
                                <span><?php echo $value['title']; ?></span>
                                <?php echo $value['description']; ?>
                            </h4>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <a href="{{route('landing_v2.price')}}" class="custom-btn secondary-btn">Mulai Sekarang!</a>
        </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->
<?php get_footer();