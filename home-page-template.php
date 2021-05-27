<?php

/*
 * Template Name: Home Page Template
 * description: >-
  Page template without sidebar
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/home-welcome-view', 'page' ); ?>

		<?php get_template_part( 'template-parts/home-advantages', 'page' ); ?>

		<?php get_template_part( 'template-parts/home-center-point', 'page' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
