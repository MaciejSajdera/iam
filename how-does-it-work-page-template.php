<?php

/*
 * Template Name: How Does It Work Page Template
 * description: >-
  Page template without sidebar
 */

get_header('how-does-it-work');

$how_does_it_work_title_1 = get_field("title_part_1");
$how_does_it_work_title_2 = get_field("title_part_2");

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="how-does-it-work how-does-it-work--subpage">
			<div class="how-does-it-work__content">

				<div class="how-does-it-work__title">
					<h1><?php echo $how_does_it_work_title_1 ?> <br /><span class="font-outline__red"><?php echo $how_does_it_work_title_2 ?></span></h1>
				</div>

				<div class="how-does-it-work__description">
					<!-- <p class="mobile-only">
						Click on a step to see more details.
					</p> -->
				</div>

				<div class="how-does-it-work__structure">

					<?php get_template_part( 'template-parts/partials/how-does-it-work-subpage-structure-mobile'); ?>

					<?php get_template_part( 'template-parts/partials/how-does-it-work-subpage-structure-desktop'); ?>

				</div>

			</div>
		</section>

		<section class="how-does-it-work-video">
			<h1>see how simple and intuitive <br /> <span class="font-outline__red">the [i’am] app is.</span></h1>
			<p>This short video tutorial will guide you through the order process.
				Relax and see how easy the transition from a traditional to a digital workflow can be.
			</p>

			<div class="video-holder">

				<div class="video-wrapper">

					<span class="line line__vertical line--vertical-1"></span>
					<span class="line line__vertical line--vertical-2"></span>
					<span class="line line__horizontal line--horizontal-1"></span>
					<span class="line line__horizontal line--horizontal-2"></span>

					<!-- <video playsinline width="100%" height="auto" id="heroVideo">
							<source src="<?php echo get_field('video') ?>" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
							<img src="<?php echo get_field('video_thumbnail') ?>" title="Your browser does not support the <video> tag">
					</video> -->

					<?php get_template_part( 'template-parts/partials/video'); ?>

				</div>

			</div>

		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
