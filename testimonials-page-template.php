<?php

/*
 * Template Name: Testimonials Page Template
 * description: >-
  Page template without sidebar
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/testimonials-page-testimonials', 'page' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
