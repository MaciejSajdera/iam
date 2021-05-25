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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'am' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
				the_custom_logo();
			 ?>
		</div><!-- .site-branding -->

		<button class="menu-toggle menu-toggle--dark" aria-controls="primary-menu" aria-expanded="false">

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

				<a href="#" class="button button__cta" target="_blank">OPEN APP</a>

				<div class="main-navigation__icons">
				
					<a href="#" class="contact-icon contact-icon__phone" target="_blank"></a>
					<a href="#" class="contact-icon contact-icon__email" target="_blank"></a>
					<a href="#" class="contact-icon contact-icon__instagram" target="_blank">
						<span class="contact-icon__instagram__circle"></span>
						<span class="contact-icon__instagram__small-circle"></span>
					</a>
					<a href="#" class="contact-icon contact-icon__facebook" target="_blank"></a>
					<a href="#" class="contact-icon contact-icon__linkedin" target="_blank"></a>

				</div>
			
			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
