<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package am
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="my-preloader">
	<div class="preloader-content">
	<?php echo get_custom_logo() ?>
	</div>
</div>

<?php wp_body_open(); ?>

<div id="page" class="site" style="visibility: hidden">

<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
				the_custom_logo();
			 ?>
		</div><!-- .site-branding -->

		<button class="menu-toggle menu-toggle--dark <?php if (is_page(79)) : echo 'menu-toggle--light'; endif; ?>" aria-controls="primary-menu" aria-expanded="false">

			<div class="span-wrapper">

				<span class="burger-menu-piece"></span>
				<span class="burger-menu-piece"></span>
				<span class="burger-menu-piece"></span>

			</div>

		</button>

		<nav id="site-navigation" class="main-navigation">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

			<div class="main-navigation__additional"> 

				<a href="https://iam-op.com/login" class="button button__cta ipad-only button__open-app" target="_blank">OPEN APP</a>

				<div class="main-navigation__icons">
				
					<?php get_template_part( 'template-parts/partials/contact-icons'); ?>

				</div>
			
			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->



<div class="viewport">

<div id="scroll-container" class="scroll-container">
	
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'am' ); ?></a> -->



	<div id="content" class="site-content">
