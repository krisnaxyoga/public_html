<?php /* Template Name: Custom Page */ ?>
<?php get_header(); ?>

<div class="">  
    <div class="justify-content-center">
		<div class="col-12">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );
				}
			?>
		</div>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 px-0 sidebar-menu d-none d-sm-none d-md-block">
                <div class="panel panel-default">
                    <?php dynamic_sidebar( 'sidebar-menu' ); ?>
                </div>
            </div>
            <div class="col-12 col-md-9 p-5">
                <div class="">
                    <h1> <?php echo get_the_title();?> </h1>
                </div>

                <div class="line-under-title"></div>
                
                <?php
            		while ( have_posts() ) : the_post();
            			get_template_part( 'template-parts/content', 'custom-page' );
            		endwhile;
            	?>
            </div>
        </div>
    </div>
</div>

<section class="bullsbrook-content bg-green">
	<div class="container">
        <div class="row">
            <div class="col-12 col-md-7 pt-5">
                <h2 class="mb-4 text-grey">
                    Need assistance or can't find <br>
                    what you're looking for?
                </h2>
                <p>
                    <?php echo $soms_redux['services-description']; ?>
                </p>
                <div class="py-3">
                    <a href="<?php echo $soms_redux['services-url-shop'];?>" class="btn-service-shop mr-3"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; SHOP NOW </a> <a href="tel:<?php echo $soms_redux['services-contact-us'];?>" class="btn-service-shop ml-3"> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; CONTACT US </a>
                </div>
            </div>
            <div class="col-12 col-md-5 pt-4">
                <img src="<?php echo $soms_redux['img-service']['url'];?>" alt="" class="img-services" width="70%">
            </div>
        </div>
	</div>
</section>

<?php get_footer(); ?>
