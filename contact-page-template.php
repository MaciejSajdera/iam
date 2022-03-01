<?php

/*
 * Template Name: Contact Page Template
 * description: >-
  Page template without sidebar
 */

get_header();

$address_1 = get_field("address_1", 74);
$address_2 = get_field("address_2", 74);
$address_3 = get_field("address_3", 74);

$phone_number = get_field("phone_number", 74);
$email_address = get_field("email_address", 74);

$instagram_link = get_field("instagram_link", 74);
$facebook_link = get_field("facebook_link", 74);
$linkedin_link = get_field("linkedin_link", 74);

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="contact">

			<div class="contact__content">

				<div class="contact__form">

					<h1>HAVE QUESTIONS?<br />
					<span class="font-outline__red">
					LET US KNOW!
					</span>
					</h1>

					<?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]') ?>
				</div>

				<div class="contact__info">

					<div class="contact__info--data">

						<div class="site-info__item site-info--address">
					
							<p class="site-info__item-title">Address</p>

							<p class="site-info__item-content"> <?php echo $address_1 ?> </p>
							<p class="site-info__item-content">	<?php echo $address_2 ?> </p>
							<p class="site-info__item-content">	<?php echo $address_3 ?> </p>
		

						</div>

						<div class="site-info__item site-info--email">

							<p class="site-info__item-title">
								Email
							</p>
							
							<p class="site-info__item-content">
								<a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>
							</p>

						</div>

						<div class="site-info__item site-info--phone">

							<p class="site-info__item-title">
								Telephone
							</p>

							<p class="site-info__item-content">
								<a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>
							</p>

						</div>

					</div>

					<div class="contact__info--social-media">

						<?php get_template_part( 'template-parts/partials/contact-icons'); ?>

					</div> 

				</div>

			</div>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
