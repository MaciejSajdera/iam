<?php

/*
 * Template Name: Contact Page Template
 * description: >-
  Page template without sidebar
 */

get_header();
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

					<?php echo do_shortcode('[contact-form-7 id="179" title="Formularz 1"]') ?>
				</div>

				<div class="contact__info">

					<div class="contact__info--data">

						<div class="site-info__item site-info--address">
					
							<p class="site-info__item-title">Address</p>

							<p class="site-info__item-content">Dworska 11/2</p>
							<p class="site-info__item-content">	25-555 Kraków </p>
							<p class="site-info__item-content">	Polska </p>
		

						</div>

						<div class="site-info__item site-info--email">

							<p class="site-info__item-title">
								Email
							</p>
							

							<p class="site-info__item-content">
								hello@glazeprostetics.com
							</p>

						</div>


						<div class="site-info__item site-info--phone">

							<p class="site-info__item-title">
								Telephone
							</p>

							<p class="site-info__item-content">
								+48 403 304 405
							</p>

						</div>

					</div>

					<div class="contact__info--social-media">

						<a href="#" class="contact-icon contact-icon__phone" target="_blank">
							<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="svg-border" d="M6.15453 8.32704L6.10388 8.378L6.13601 8.44226C7.86812 11.9068 10.6787 14.7343 14.1227 16.477L14.1875 16.5098L14.2388 16.4583L16.0647 14.6213C16.0647 14.6213 16.0647 14.6213 16.0647 14.6213C16.2041 14.4811 16.4044 14.4218 16.5968 14.4631C16.5968 14.4631 16.5968 14.4631 16.5968 14.4631L21.5837 15.5382C21.8512 15.5959 22.0429 15.8339 22.0429 16.1102C22.0429 17.1323 21.8027 18.0993 21.3291 18.9853C20.885 19.8161 20.2407 20.5441 19.4662 21.0901C18.695 21.6337 17.8003 21.9927 16.8791 22.1287C16.5904 22.1713 16.3017 22.1926 16.0143 22.1926C15.3231 22.1926 14.6373 22.0697 13.9661 21.8244C10.976 20.7316 8.2001 18.9516 5.93899 16.6769C3.67787 14.4022 1.90843 11.6095 0.822182 8.60112C0.477018 7.64513 0.375347 6.65919 0.519607 5.6696C0.654744 4.74266 1.01177 3.84235 1.55215 3.06646C2.09491 2.28715 2.81852 1.63905 3.64424 1.19234C4.52477 0.71599 5.48566 0.47439 6.50139 0.47439C6.7748 0.47439 7.01177 0.666631 7.0693 0.936606C7.0693 0.936608 7.0693 0.93661 7.0693 0.936611L8.13792 5.95357C8.17929 6.14783 8.1199 6.34984 7.98051 6.49011L6.15453 8.32704ZM6.05523 1.75335L6.03637 1.66481L5.94638 1.6748C4.55596 1.82921 3.32186 2.56274 2.50316 3.73827C1.58231 5.06041 1.36737 6.68787 1.91387 8.20137C4.02181 14.0391 8.55913 18.6039 14.3624 20.7247C15.8673 21.2747 17.4856 21.0584 18.8001 20.1318C19.9687 19.308 20.6976 18.0666 20.851 16.6684L20.8609 16.5788L20.7727 16.5597L16.7158 15.6852L16.6624 15.6737L16.6238 15.7125L14.7169 17.6309C14.5437 17.8051 14.2809 17.8512 14.0597 17.7466L14.0596 17.7466C10.0304 15.8423 6.76864 12.5609 4.87558 8.50715C4.77129 8.2838 4.81743 8.0187 4.99069 7.84443L4.9907 7.84442L6.89766 5.92597L6.93582 5.88758L6.92454 5.83464L6.05523 1.75335Z" fill="#F1F1F1" fill-opacity="0.67" stroke="#201D1D" stroke-width="0.2"/>
							</svg>
						</a>

						<a href="#" class="contact-icon contact-icon__email" target="_blank">
							<svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="svg-border" d="M23.3694 1.61384L23.5413 1.44294H23.2989H2.88283H2.64051L2.81231 1.61384L11.4319 10.188C11.8759 10.632 12.4649 10.876 13.0909 10.876C13.7168 10.876 14.3058 10.6321 14.7484 10.1894L23.3694 1.61384ZM1.72053 15.451V15.6914L1.89101 15.522L8.3559 9.09818L8.42725 9.02729L8.35594 8.95635L1.89105 2.52552L1.72053 2.3559V2.59642V15.451ZM2.81329 16.4326L2.64126 16.6036H2.88378H23.298H23.5405L23.3685 16.4326L16.9061 10.0114L16.8356 9.94131L16.7651 10.0114L15.6636 11.1071L15.6635 11.1073C14.9772 11.7936 14.0634 12.1721 13.0909 12.1721C12.1184 12.1721 11.2046 11.7936 10.5169 11.1059L10.5167 11.1057L9.41665 10.0114L9.34617 9.94131L9.27564 10.0114L2.81329 16.4326ZM24.2907 15.522L24.4612 15.6914V15.451V2.59642V2.3559L24.2907 2.52552L17.8258 8.95635L17.7545 9.02729L17.8258 9.09818L24.2907 15.522ZM2.56856 0.146875H23.6132C24.8015 0.146875 25.7573 1.11438 25.7573 2.29097V15.7555C25.7573 16.9451 24.7879 17.8996 23.6132 17.8996H2.56856C1.39103 17.8996 0.424463 16.9411 0.424463 15.7555V2.29097C0.424463 1.11236 1.38408 0.146875 2.56856 0.146875Z" fill="#F1F1F1" fill-opacity="0.67" stroke="#201D1D" stroke-width="0.2"/>
							</svg>
						</a>

						<a href="#" class="contact-icon contact-icon__instagram" target="_blank">
							<span class="contact-icon__instagram__circle">
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle class="svg-border" cx="13" cy="13" r="12.25" stroke="#F1F1F1" stroke-opacity="0.67" stroke-width="1.5"/>
								</svg>
							</span>
							<span class="contact-icon__instagram__small-circle">
								<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle class="svg-border" cx="4" cy="4" r="3.25" stroke="#F1F1F1" stroke-opacity="0.67" stroke-width="1.5"/>
								</svg>
							</span>
						</a>

						<a href="#" class="contact-icon contact-icon__facebook" target="_blank">
							<svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="svg-border" d="M12.4441 5.64879H15V1.19715C14.5591 1.13649 13.0425 1 11.2763 1C7.59114 1 5.06667 3.31798 5.06667 7.5783V11.4992H1V16.4757H5.06667V28.9977H10.0526V16.4769H13.9548L14.5742 11.5003H10.0514V8.07176C10.0526 6.63338 10.4399 5.64879 12.4441 5.64879V5.64879Z" stroke="#F1F1F1" stroke-opacity="0.67" stroke-width="1.5"/>
							</svg>
						</a>

						<a href="#" class="contact-icon contact-icon__linkedin" target="_blank">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="svg-border" d="M24.9942 24.5602V24.5592H25V15.9186C25 11.6915 24.0955 8.4353 19.1833 8.4353C16.8219 8.4353 15.2372 9.73896 14.5903 10.9749H14.522V8.82993H9.8645V24.5592H14.7142V16.7707C14.7142 14.72 15.1006 12.737 17.625 12.737C20.1123 12.737 20.1494 15.0773 20.1494 16.9022V24.5602H24.9942Z" stroke="#C4C4C4" stroke-width="1.2"/>
								<path d="M1.96753 8.8306H6.82307V24.5599H1.96753V8.8306Z" stroke="#C4C4C4" stroke-width="1.2"/>
								<path d="M4.39329 1C2.8408 1 1.58105 2.26734 1.58105 3.82917C1.58105 5.39101 2.8408 6.68485 4.39329 6.68485C5.94577 6.68485 7.20552 5.39101 7.20552 3.82917C7.20455 2.26734 5.9448 1 4.39329 1V1Z" stroke="#C4C4C4" stroke-width="1.2"/>
							</svg>
						</a>

					</div> 

				</div>

			</div>


		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>