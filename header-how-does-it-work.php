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

				<a href="#" class="button button__cta ipad-only" target="_blank">OPEN APP</a>

				<div class="main-navigation__icons">
				
					<?php get_template_part( 'template-parts/partials/contact-icons'); ?>

				</div>
			
			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<div id="page" class="site" style="visibility: hidden">

<div class="how-does-it-work__description how-does-it-work__description--sticky-content">

<?php

$slide1 = get_field('slide_1');
$slide1_number = $slide1['number'];
$slide1_title = $slide1['title'];
$slide1_image = $slide1['image'];

$slide2 = get_field('slide_2');
$slide2_number = $slide2['number'];
$slide2_title = $slide2['title'];
$slide2_image = $slide2['image'];

$slide3 = get_field('slide_3');
$slide3_number = $slide3['number'];
$slide3_title = $slide3['title'];
$slide3_image = $slide3['image'];

$slide4 = get_field('slide_4');
$slide4_number = $slide4['number'];
$slide4_title = $slide4['title'];
$slide4_image = $slide4['image'];

$slide5 = get_field('slide_5');
$slide5_number = $slide5['number'];
$slide5_title = $slide5['title'];
$slide5_image = $slide5['image'];

$slide6 = get_field('slide_6');
$slide6_number = $slide6['number'];
$slide6_title = $slide6['title'];
$slide6_image = $slide6['image'];

?>

<!-- Slider main container -->
<div class="swiper-container swiper-container-how-does-it-work">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide">
			<?php
				echo '<p>'. $slide1_number . '</p>';
				echo '<p>'. $slide1_title . '</p>';
				echo '<img src="'. $slide1_image .'" />'
			?>	
		</div>
		<div class="swiper-slide">
			<?php
				echo '<p>'. $slide2_number . '</p>';
				echo '<p>'. $slide2_title . '</p>';
				echo '<img src="'. $slide2_image .'" />'
			?>	
		</div>
		<div class="swiper-slide">
			<?php
				echo '<p>'. $slide3_number . '</p>';
				echo '<p>'. $slide3_title . '</p>';
				echo '<img src="'. $slide3_image .'" />'
			?>	
		</div>
		<div class="swiper-slide">
			<?php
				echo '<p>'. $slide4_number . '</p>';
				echo '<p>'. $slide4_title . '</p>';
				echo '<img src="'. $slide4_image .'" />'
			?>	
		</div>
		<div class="swiper-slide">
			<?php
				echo '<p>'. $slide5_number . '</p>';
				echo '<p>'. $slide5_title . '</p>';
				echo '<img src="'. $slide5_image .'" />'
			?>	
		</div>
		<div class="swiper-slide">
			<?php
				echo '<p>'. $slide6_number . '</p>';
				echo '<p>'. $slide6_title . '</p>';
				echo '<img src="'. $slide6_image .'" />'
			?>	
		</div>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination-how-does-it-work"></div>

	<!-- If we need navigation buttons -->
	<!-- <div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div> -->

	<!-- If we need scrollbar -->
	<!-- <div class="swiper-scrollbar"></div> -->
</div>

</div>

<div class="viewport">

<div id="scroll-container" class="scroll-container">
	
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'am' ); ?></a> -->



	<div id="content" class="site-content">
