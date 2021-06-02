// import Swiper JS
import Swiper, {
	Navigation,
	Autoplay,
	Pagination,
	Parallax,
	EffectFade,
	Lazy
} from "swiper";
// import Swiper styles
import "swiper/swiper-bundle.css";

// configure Swiper to use modules
Swiper.use([Navigation]);

const initSwiper = () => {
	var testimonialsPage = new Swiper(".swiper-container-testimonials", {
		direction: "horizontal",
		loop: false,
		// parallax: true,
		centeredSlides: true,
		slidesPerView: 1,
		initialSlide: 0,
		speed: 1000,
		autoplay: {
			delay: 3000
		},
		grabCursor: true,
		observer: true,
		observeParents: true,
		// breakpoints: {
		// 	992: {
		// 		slidesPerView: 1.5,
		// 		centeredSlides: true
		// 	}
		// },

		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		}
	});

	var testimonialsPageSwiper = new Swiper(
		".swiper-container-testimonials-page",
		{
			direction: "horizontal",
			loop: false,
			// parallax: true,
			centeredSlides: true,
			slidesPerView: 1,
			initialSlide: 1,
			speed: 1000,
			autoplay: {
				delay: 3000
			},
			grabCursor: true,
			observer: true,
			observeParents: true,
			// breakpoints: {
			// 	992: {
			// 		slidesPerView: 1.5,
			// 		centeredSlides: true
			// 	}
			// },

			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev"
			}
		}
	);
};

export default initSwiper;
