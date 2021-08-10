<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404">
				<header class="page-header">
					<h1 class="page-title">Oops! That page couldn't be found.</h1>
					<a class="button button__cta" href=<?php echo home_url(); ?>>Home Page</a>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

