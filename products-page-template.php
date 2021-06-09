<?php

/*
 * Template Name: Products Page Template
 * description: >-
  Page template without sidebar
 */

 $products_title_1 = get_field("title_part_1");
 $products_title_2 = get_field("title_part_2");

 $products_description_1 = get_field("description_part_1");
 $products_description_2 = get_field("description_part_2");

$products_cta_title_1 = get_field("cta_title_part_1");
$products_cta_title_2 = get_field("cta_title_part_2");
$products_cta_button_text = get_field("cta_button_text");

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!-- <section class="products products-page">

			<div class="products__content products-page__content">

				<div class="products__content--upper products-page__content--upper">

					<div class="products__title products-page__title">

					<svg width="71" height="72" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M57.6041 0H16.4222H12.6325C5.68462 0 0 5.68421 0 12.6316V16.4211V59.3684C0 66.3158 5.68462 72 12.6325 72H57.6041C64.552 72 70.2366 66.3158 70.2366 59.3684V12.6316C70.2366 5.68421 64.552 0 57.6041 0ZM68.3418 59.3684C68.3418 65.3053 63.5414 70.1053 57.6041 70.1053H12.6325C6.69522 70.1053 1.89487 65.3053 1.89487 59.3684V18.1895V12.6316C1.89487 6.69474 6.69522 1.89474 12.6325 1.89474H17.8118H57.4778C63.4151 1.89474 68.2154 6.69474 68.2154 12.6316V59.3684H68.3418Z" fill="white"/>
						<path d="M41.6872 46.4842C45.477 48.3789 47.1192 48.1263 47.4982 45.8526C47.8772 43.3263 50.2773 43.0737 52.2985 44.3368C54.0671 45.3473 55.583 46.9895 57.2252 48.8842C58.4885 50.4 59.3727 50.6526 59.878 48.6316C60.3833 46.6105 58.4885 41.1789 53.6881 38.4C48.6351 35.4947 43.3295 31.3263 40.9293 36.7579C38.7818 42.0631 37.8975 44.5895 41.6872 46.4842Z" fill="white"/>
						<path d="M56.3406 53.9368C49.3927 56.4631 46.1082 49.1368 45.9819 52.0421C45.8556 54.0631 43.0764 56.0842 40.4236 56.3368C37.7708 56.5894 37.2655 56.5894 38.6551 57.7263C40.0447 58.8631 46.4872 61.8947 51.7929 61.2631C57.2248 60.6315 60.8883 58.3579 61.1409 54.6947C61.3936 51.4105 58.2354 53.3052 56.3406 53.9368Z" fill="white"/>
						<path d="M44.2139 51.7895C45.0981 49.7684 43.3296 49.5158 40.8031 48.3789C36.6344 46.6105 36.0027 44.9684 37.645 40.5474C38.7819 37.2631 39.7925 35.621 40.5504 34.7368C41.3084 33.9789 41.4347 32.7158 40.6768 31.8316L40.5504 31.7053C39.7925 30.821 38.5292 30.821 37.645 31.5789C35.4974 33.6 31.455 37.3895 28.5496 40.0421C27.6653 40.9263 27.6653 42.3158 28.6759 43.0737C30.4444 44.4631 30.6971 46.2316 31.2024 48.1263C31.834 50.5263 32.8446 53.0526 35.6238 54.6947C38.4029 56.3368 43.4559 53.8105 44.2139 51.7895Z" fill="#BE272E"/>
						<path d="M35.8765 24.5053L25.2652 11.2421C23.8756 9.6 21.8544 8.58948 19.7069 8.58948H14.9066C10.8642 8.58948 7.70605 11.8737 7.70605 15.7895V20.3368C7.70605 22.3579 8.59033 24.2526 9.9799 25.6421L22.6124 37.0105C24.2546 38.779 26.4021 39.2842 27.4127 38.4L36.8871 29.5579C37.8977 28.4211 37.5187 26.2737 35.8765 24.5053Z" fill="white"/>
					</svg>

						<h1>PRO<span class="font-outline__red">DUCTS</span></h1>

					</div>

					<div class="products__description products-page__description">

						<h2>
							We offer a wide range of upper limb products in <span class="text__red">[I'am]</span> app.
						</h2>
					
						<p>From cosmetic devices to our own functional terminal devices and myoelectric solutions. Everything you need to expand your clinic offer is already here.</p>
					</div>

				</div>

				<div class="products__content--grid products-page__content--grid">


				</div>

			</div>
		</section> -->

	<section class="products">
    <div class="products__content">

        <div class="products__content--upper">

			<div class="products__title products-page__title">

				<svg width="71" height="72" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M57.6041 0H16.4222H12.6325C5.68462 0 0 5.68421 0 12.6316V16.4211V59.3684C0 66.3158 5.68462 72 12.6325 72H57.6041C64.552 72 70.2366 66.3158 70.2366 59.3684V12.6316C70.2366 5.68421 64.552 0 57.6041 0ZM68.3418 59.3684C68.3418 65.3053 63.5414 70.1053 57.6041 70.1053H12.6325C6.69522 70.1053 1.89487 65.3053 1.89487 59.3684V18.1895V12.6316C1.89487 6.69474 6.69522 1.89474 12.6325 1.89474H17.8118H57.4778C63.4151 1.89474 68.2154 6.69474 68.2154 12.6316V59.3684H68.3418Z" fill="white"/>
					<path d="M41.6872 46.4842C45.477 48.3789 47.1192 48.1263 47.4982 45.8526C47.8772 43.3263 50.2773 43.0737 52.2985 44.3368C54.0671 45.3473 55.583 46.9895 57.2252 48.8842C58.4885 50.4 59.3727 50.6526 59.878 48.6316C60.3833 46.6105 58.4885 41.1789 53.6881 38.4C48.6351 35.4947 43.3295 31.3263 40.9293 36.7579C38.7818 42.0631 37.8975 44.5895 41.6872 46.4842Z" fill="white"/>
					<path d="M56.3406 53.9368C49.3927 56.4631 46.1082 49.1368 45.9819 52.0421C45.8556 54.0631 43.0764 56.0842 40.4236 56.3368C37.7708 56.5894 37.2655 56.5894 38.6551 57.7263C40.0447 58.8631 46.4872 61.8947 51.7929 61.2631C57.2248 60.6315 60.8883 58.3579 61.1409 54.6947C61.3936 51.4105 58.2354 53.3052 56.3406 53.9368Z" fill="white"/>
					<path d="M44.2139 51.7895C45.0981 49.7684 43.3296 49.5158 40.8031 48.3789C36.6344 46.6105 36.0027 44.9684 37.645 40.5474C38.7819 37.2631 39.7925 35.621 40.5504 34.7368C41.3084 33.9789 41.4347 32.7158 40.6768 31.8316L40.5504 31.7053C39.7925 30.821 38.5292 30.821 37.645 31.5789C35.4974 33.6 31.455 37.3895 28.5496 40.0421C27.6653 40.9263 27.6653 42.3158 28.6759 43.0737C30.4444 44.4631 30.6971 46.2316 31.2024 48.1263C31.834 50.5263 32.8446 53.0526 35.6238 54.6947C38.4029 56.3368 43.4559 53.8105 44.2139 51.7895Z" fill="#BE272E"/>
					<path d="M35.8765 24.5053L25.2652 11.2421C23.8756 9.6 21.8544 8.58948 19.7069 8.58948H14.9066C10.8642 8.58948 7.70605 11.8737 7.70605 15.7895V20.3368C7.70605 22.3579 8.59033 24.2526 9.9799 25.6421L22.6124 37.0105C24.2546 38.779 26.4021 39.2842 27.4127 38.4L36.8871 29.5579C37.8977 28.4211 37.5187 26.2737 35.8765 24.5053Z" fill="white"/>
				</svg>

					<h1><?php echo $products_title_1 ?><span class="font-outline__red"><?php echo $products_title_2 ?></span></h1>

			</div>

			<div class="products__description products-page__description">

				<h2>
					<?php echo $products_description_1 ?>
				</h2>
				<p>
					<?php echo $products_description_2 ?>
				</p>
			</div>

        </div>

		<?php get_template_part( 'template-parts/single-product-mobile', 'page' ); ?>

		<?php get_template_part( 'template-parts/single-product-desktop', 'page' ); ?>


		<section class="cta-section">

			<h1>
				<?php echo $products_cta_title_1 ?><br />
				<span class="font-outline__red"><?php echo $products_cta_title_2 ?></span>
			</h1>

			<a href="#" class="button button__cta"><?php echo $products_cta_button_text ?></a>

		</section>

    </div>

</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
