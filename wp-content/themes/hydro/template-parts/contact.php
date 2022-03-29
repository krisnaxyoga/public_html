<?php /* Template Name: Contact-s */ ?>
<?php get_header(); ?>
<section>
	<!-- banner starts -->
	<div class="banner d-flex align-items-center light-grey-bg">

	<!-- Breadcrumb starts -->
	<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('landing_v2.index')}}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contact</li>
			</ol>
		</div>
	</nav>


	<div class="container">
		<div class="row no-gutters align-items-center">
			<div class="col-lg-6 text-center text-lg-left">
				<h1>Refeed siap membantu Anda kapan saja</h1>
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
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6">				
				<?php echo do_shortcode( '[contact-form-7 id="96" title="Contact form 1"]' ); ?>
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>