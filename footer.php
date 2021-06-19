<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package am
 */

	$address_1 = get_field("address_1", 74);
	$address_2 = get_field("address_2", 74);
	$address_3 = get_field("address_3", 74);

	$phone_number = get_field("phone_number", 74);
	$email_address = get_field("email_address", 74);
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="subscribe-info">
			<div class="subscribe-info__text">
				<h1>CON<span class="font-outline__red">TACT</h1>
				<p>
					You want to know something more
					or just sign up to our app? <br />
					Let us know!
				</p>
			</div>
			<div class="subscribe-info__social-and-subscribe">

				<div class="subscribe-info__subscribe">

					<?php
						echo do_shortcode('[contact-form-7 id="212" title="Subscribe"]')
					?>
					<!-- <input type="email" id="email" name="email" class="input input__red-outline" placeholder="Your email address*"></input>
					<button class="button button__cta">SUBSCRIBE</button> -->
				</div>

				<div class="subscribe-info__social">


					<?php get_template_part( 'template-parts/partials/contact-icons'); ?>


				</div>



			</div>
		</div>

		<div class="site-info">
			

				<div class="site-info__contact-info">

					<div class="site-info__item site-info--address">
				
						<p class="site-info__item-title">Address</p>
						<p class="site-info__item-content"><?php echo $address_1 ?></p>
						<p class="site-info__item-content">	<?php echo $address_2 ?> </p>
						<p class="site-info__item-content">	<?php echo $address_3 ?> </p>
	

					</div>

					<div class="site-info__item site-info--email">

						<p class="site-info__item-title">
							Email
						</p>
						

						<p class="site-info__item-content">
							<?php echo $email_address ?>
						</p>

					</div>


					<div class="site-info__item site-info--phone">

						<p class="site-info__item-title">
							Telephone
						</p>

						<p class="site-info__item-content">
							<?php echo $phone_number ?>
						</p>

					</div>

				</div>

				<div class="site-info__additional-info">

					<div class="site-info__links">
						<a href="#" class="site-info__item-title">Policy</a>
						<a href="#" class="site-info__item-title">Services</a>
						<a href="#" class="site-info__item-title">Copyrights</a>
					</div>

					<div class="footer__scroll-up square-box square-box__light-grey">
						<div class="chevron-wrapper">
							<div class="chevron"></div>
							<div class="chevron"></div>
							<div class="chevron"></div>
						</div>
					</div>

				</div>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
  </div> <!-- #scroll-container -->
 </div> <!-- viewport -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
