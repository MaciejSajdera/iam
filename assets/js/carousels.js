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
import * as basicLightbox from "basiclightbox";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, EffectFade]);

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
		}
	);

	const allSwipersH = document.querySelectorAll(".swiper-container-h");

	[...allSwipersH].map((swiperH, i) => {
		new Swiper(`.swiper-container-h--${i}`, {
			centeredSlides: true,
			slidesPerView: 1,
			initialSlide: 0,
			grabCursor: true,
			// observer: true,
			// observeParents: true,
			effect: "fade",

			pagination: {
				el: `.swiper-pagination-h--${i}`,
				clickable: true
			}
		});
	});

	// var swiperH = new Swiper(".swiper-container-h", {
	// 	centeredSlides: true,
	// 	slidesPerView: 1,
	// 	initialSlide: 0,
	// 	grabCursor: true,
	// 	// observer: true,
	// 	// observeParents: true,
	// 	effect: "fade",

	// 	pagination: {
	// 		el: ".swiper-pagination-h--1",
	// 		clickable: true
	// 	}
	// });

	const allSwipersV = document.querySelectorAll(".swiper-container-v");

	[...allSwipersV].map((swiperV, i) => {
		new Swiper(`.swiper-container-v--${i}`, {
			direction: "vertical",
			centeredSlides: true,
			slidesPerView: 1,
			initialSlide: 0,
			grabCursor: true,
			// observer: true,
			// observeParents: true,
			effect: "fade",
			allowTouchMove: false,

			pagination: {
				el: `.swiper-pagination-v--${i}`,
				clickable: true,

				renderBullet: function(index, className) {
					let bulletColor = this.pagination.el.parentNode.querySelector(
						`.color-hex-value--${index}`
					).innerText;

					return `<span style="background: ${bulletColor}" class="${className}"></span>`;
				}
			}
		});
	});

	document
		.querySelectorAll(".swiper-slide-active .swiper-slide-active")
		.forEach(productImage => {
			productImage.onclick = function() {
				console.log(productImage.style.backgroundImage);
				let myUrl = String.raw`${productImage.style.backgroundImage}`;

				const markup = `
				<div style="background-image: ${myUrl}">

				</div>
				`;

				// const closeButton = document.createElement("A");
				// closeButton.classList.add("close-lightbox");

				// markup.appendChild(closeButton);

				const instance = basicLightbox.create(markup, {
					// onShow: instance => {
					// 	instance.element().querySelector("a").onclick = instance.close;
					// }
				});

				instance.show();
			};
		});

	// var swiperV = new Swiper(".swiper-container-v", {
	// 	direction: "vertical",
	// 	centeredSlides: true,
	// 	slidesPerView: 1,
	// 	initialSlide: 0,
	// 	grabCursor: true,
	// 	observer: true,
	// 	observeParents: true,
	// 	effect: "fade",

	// 	pagination: {
	// 		el: ".swiper-pagination-v",
	// 		clickable: true,

	// 		renderBullet: function(index, className) {
	// 			let bulletColor = this.pagination.el.parentNode.querySelector(
	// 				`.color-hex-value--${index}`
	// 			).innerText;

	// 			return `<span style="background: ${bulletColor}" class="${className}"></span>`;
	// 		}
	// 	}
	// });
};

export default initSwiper;
