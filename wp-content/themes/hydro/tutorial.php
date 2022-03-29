<?php /* Template Name: tutorial page */ ?>
<?php get_header(); ?>
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tutorial</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Tutorial Vidio</h1>

            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="<?php echo $soms_redux['nwqaqwq']['url']; ?>" alt="Home banner image" class="img-fluid">
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
    <section class="latest-news section-gap" id="cynic-news" data-scroll-offset="75">
        <div class="container">

            <div class="grid-wrapper">
                <div class="row justify-content-center">
                    
                        <div class="col-lg-6 col-md-6">
                        
                            <a href="#" class="img-card news-card">
                            <iframe class="w-100" height="200" src="<?php echo $soms_redux['vidiotutorial']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="content p-5">
                                    <h4>
                                        <span>Q & A Refeed</span>
                                    </h4>
                                </div>
                            </a>
                            <!-- End of .img-card -->
                        </div>
                    
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .grid-wrapper -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .latest-news -->
    <?php get_footer();