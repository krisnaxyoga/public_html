<?php get_header(); ?>
<div class="container">
	<div class="content-wrapper py-5">
		<div class="row">
			<div class="col-lg-12">
				<?php
					if(have_posts()):
						while ( have_posts() ) : the_post();
							get_template_part( 'templates/archive', 'post' );
						endwhile;
					endif;
				?>
			</div>

		</div>
	</div>
</div>
<?php get_footer();
