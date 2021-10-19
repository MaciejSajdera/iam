<?php

/*
 * Template Name: Enviroment Page Template
 * description: >-
  Page template without sidebar
 */

 $enviroment_title_1 = get_field("title_part_1");
 $enviroment_title_2 = get_field("title_part_2");

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="enviroment">

				<div class="enviroment__content">

					<div class="enviroment__content--upper">

						<div class="enviroment__title enviroment-page__title">

								<h1><?php echo $enviroment_title_1 ?><span class="font-outline__red"><?php echo $enviroment_title_2 ?></span></h1>

						</div>

						<div class="enviroment__description enviroment-page__description">

							<p>
								<?php the_content(); ?>
							</p>

						</div>

					</div>

					<div class="enviroment__content--main">

						<div class="enviroment__triangle-track">
							<div id="fixedTriangle" class="fixed-triangle--state-1">

									<div class="fixed-triangle fixed-triangle--1">
										<p data-section-pointer="#enviromentSection1">FABRICATION</p>
										<span></span>
									</div>
									<div class="fixed-triangle fixed-triangle--2">
										<p data-section-pointer="#enviromentSection2">PRODUCTS</p>
										<span></span>
									</div>
									<div class="fixed-triangle fixed-triangle--3">
										<p data-section-pointer="#enviromentSection3">TECHNOLOGY</p>
										<span></span>
									</div>

							</div>
						</div>

						<div class="enviroment__sections">

							<div id="enviromentSection1" class="enviroment__section">
								<h3 class="text__red text__underline">FABRICATION</h3>
								<p>
								<b>In the 21st century, we want to utilize 21st-century methods of fabrication.</b>
								<br />
								<br />
								HP’s Multi Jet Fusion is a state-of-the-art cutting-edge technology that is giving us amazing precision and what we are looking for - consistency in the manufacturing process.
								HP MJF doesn’t have a bad day, you can bet on it. 
								</p>
							</div>

							<div id="enviromentSection2" class="enviroment__section">
								<h3 class="text__red text__underline">PRODUCTS</h3>
								<p>
								<b>Glaze product portfolio is a wide range of cutting-edge upper limb prosthetic devices.</b>
								<br />
								<br />
								We have it all, trans-humeral and trans-radial passive, body-powered, and myoelectric prosthesis. All of the above-elbow devices are based on the revolutionary first in the world interchangeable elbow system. 
								</p>
							</div>

							<div id="enviromentSection3" class="enviroment__section">
								<h3 class="text__red text__underline">TECHNOLOGY</h3>
								<p><b>We have few goals:</b></p>
								<ul>
									<li><p><b>being always on time</b></p></li>
									<li><p><b>delivering the best possible fit</b></p></li>
									<li><p><b>go way beyond your and your patient expectations</b></p></li>
								</ul>
								<p>
									For this to happen we brought the machine learning and artificial intelligence algorithms to the table. Taking into consideration the alignment and all of the patient’s measurements our script is modeling the Glaze in real-time. This makes it possible to deliver dozens of devices to patients around the world in a matter of days.
								</p>
							</div>

						</div>


					</div>

				</div>

			</section>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php

get_footer();
?>

