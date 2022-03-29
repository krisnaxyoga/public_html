<?php get_header(); ?>

<div class="container">
	<div class="content-wrapper py-5">
		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'templates/archive', 'post' );

			endwhile;
			?>

			<div class="pagination" role="navigation">
				<div class="nav-links">
					<?php
						echo paginate_links( array(
							'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i><span class="sr-only">' . __( 'Previous page', 'soms' ) . '</span>',
							'next_text' => '<span class="sr-only">' . __( 'Next page', 'soms' ) . '</span><i class="fa fa-chevron-right" aria-hidden="true"></i>',
							'before_page_number' => '<span class="meta-nav sr-only">' . __( 'Page', 'soms' ) . ' </span>',
							'type' => 'list'
						) );
					?>
				</div>
			</div>

		<?php endif; ?>
	</div>
</div><!-- .container -->

<?php get_footer();