<?php

/*
 * Template Name: Enviroment Page Template
 * description: >-
  Page template without sidebar
 */

 $enviroment_title_1 = get_field("title_part_1");
 $enviroment_title_2 = get_field("title_part_2");

 $section_header_1 = get_field("section_header_1");
 $section_subheader_1 = get_field("section_subheader_1");
 $section_content_1 = get_field("section_content_1");


 $section_header_2 = get_field("section_header_2");
 $section_subheader_2 = get_field("section_subheader_2");
 $section_content_2 = get_field("section_content_2");

 $section_header_3 = get_field("section_header_3");
 $section_subheader_3 = get_field("section_subheader_3");
 $section_content_3 = get_field("section_content_3");

 $section_3_list_item_1 = get_field("section_3_list_item_1");
 $section_3_list_item_2 = get_field("section_3_list_item_2");
 $section_3_list_item_3 = get_field("section_3_list_item_3");


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="enviroment">

				<div class="enviroment__content">

					<div class="enviroment__content--upper">

						<div class="enviroment__title enviroment-page__title">

								<h1><?php echo $enviroment_title_1 ?> <span class="font-outline__red"><?php echo $enviroment_title_2 ?></span></h1>

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
										<p data-section-pointer="#enviromentSection1"><?php echo $section_header_1 ?></p>
										<span></span>
									</div>
									<div class="fixed-triangle fixed-triangle--2">
										<p data-section-pointer="#enviromentSection2"><?php echo $section_header_2 ?></p>
										<span></span>
									</div>
									<div class="fixed-triangle fixed-triangle--3">
										<p data-section-pointer="#enviromentSection3"><?php echo $section_header_3 ?></p>
										<span></span>
									</div>

							</div>
						</div>

						<div class="enviroment__sections">

							<div id="enviromentSection1" class="enviroment__section">
								<h3 class="text__red text__underline"><?php echo $section_header_1 ?></h3>
								<p>
								<b><?php echo $section_subheader_1 ?></b>
								<br />
								<br />
									<?php echo $section_content_1 ?>
								</p>
							</div>

							<div id="enviromentSection2" class="enviroment__section">
								<h3 class="text__red text__underline"><?php echo $section_header_2 ?></h3>
								<p>
								<b><?php echo $section_subheader_2 ?></b>
								<br />
								<br />
									<?php echo $section_content_2 ?>
								</p>
							</div>

							<div id="enviromentSection3" class="enviroment__section">
								<h3 class="text__red text__underline"><?php echo $section_header_3 ?></h3>
								<p><b><?php echo $section_subheader_3 ?></b></p>
								<ul>
									<li><p><b><?php echo $section_3_list_item_1 ?></b></p></li> 
									<li><p><b><?php echo $section_3_list_item_2 ?></b></p></li>
									<li><p><b><?php echo $section_3_list_item_3 ?></b></p></li>
								</ul>
								<p>
									<?php echo $section_content_3 ?>
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

