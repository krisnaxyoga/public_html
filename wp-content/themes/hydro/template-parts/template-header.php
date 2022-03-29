<?php global $soms_redux; ?>
<?php if(is_home() || is_front_page()): ?>
	<!--------------------- HEADER BANNER ----------------------->    
    <!-- <section class="bullsbrook-slider pt-6 header-banner">
        <div class="swiper-container bg-green">
            <div class="swiper-wrapper">
                <?php foreach ($soms_redux['home-slider'] as $value): ?>
                <div class="swiper-slide row">
                    <div class="col-12 col-md-6 p-4">
                        <img class="swiper-lazy" src="<?php echo $value['image'] ?>" alt="Slider" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="col-12 col-md-6 p-4 text-left">
                        <p><?php echo $value['description'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container-fluid bg-green py-3 d-flex justify-content-center align-items-center position-relative bullet-slider">
            <div class="swiper-pagination"></div>
        </div>
        <div class="btn-link-swiper container-fluid bg-orange py-3 d-flex justify-content-center align-items-center position-relative description-slider">
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($soms_redux['home-slider'] as $value): ?>
                        <div class="swiper-slide">
                            <div class="d-block">
                                <a href="<?php echo $value['url'] ?>" class="btn brown-btn"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> &nbsp; BUY NOW</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!---------------------------------------------------->

<?php elseif(is_page() && !is_front_page()): ?>
    <?php
        if(!$image_url = get_the_post_thumbnail_url( get_the_id(), 'full' )){
            $image_url = $soms_redux['default-header-image']['url'];
        }
    ?>
    <section class="bullsbrook-after-header bullsbrook-page-banner" data-parallax="scroll" data-image-src="<?php echo $image_url;?>">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="mb-0 text-white"><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

<?php elseif(is_archive()  && have_posts()): ?>
    <section class="bullsbrook-after-header bullsbrook-page-banner" data-parallax="scroll" data-image-src="<?php echo $soms_redux['archive-header-image']['url'];?>">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-left text-md-center">
                    <?php
                        the_archive_title( '<h1 class="archive-title mb-0 text-white text-uppercase">', '</h1>' );
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php elseif(is_singular()): ?>
    <section class="bullsbrook-after-header bullsbrook-page-banner" data-parallax="scroll" data-image-src="<?php echo $soms_redux['single-header-image']['url'];?>">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 text-left text-md-center">
                    <h1 class="mb-0 text-white text-uppercase"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
	