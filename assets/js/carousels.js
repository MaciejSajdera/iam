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

	const allSwipersHmobile = document.querySelectorAll(
		".swiper-container-h-mobile"
	);

	[...allSwipersHmobile].map((swiperH, i) => {
		new Swiper(`.swiper-container-h-mobile--${i}`, {
			centeredSlides: true,
			slidesPerView: 1,
			initialSlide: 0,
			grabCursor: true,
			// observer: true,
			// observeParents: true,
			effect: "fade",

			pagination: {
				el: `.swiper-pagination-h-mobile--${i}`,
				clickable: true
			}
		});
	});

	const allSwipersVmobile = document.querySelectorAll(
		".swiper-container-v-mobile"
	);

	[...allSwipersVmobile].map((swiperV, i) => {
		new Swiper(`.swiper-container-v-mobile--${i}`, {
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
				el: `.swiper-pagination-v-mobile--${i}`,
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

	const allSwipersHdesktop = document.querySelectorAll(
		".swiper-container-h-desktop"
	);

	[...allSwipersHdesktop].map((swiperH, i) => {
		new Swiper(`.swiper-container-h-desktop--${i}`, {
			centeredSlides: true,
			slidesPerView: 1,
			initialSlide: 0,
			grabCursor: true,
			// observer: true,
			// observeParents: true,
			effect: "fade",

			pagination: {
				el: `.swiper-pagination-h-desktop--${i}`,
				clickable: true
			}
		});
	});

	const allSwipersVdesktop = document.querySelectorAll(
		".swiper-container-v-desktop"
	);

	[...allSwipersVdesktop].map((swiperV, i) => {
		new Swiper(`.swiper-container-v-desktop--${i}`, {
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
				el: `.swiper-pagination-v-desktop--${i}`,
				clickable: true,

				renderBullet: function(index, className) {
					let bulletColor = this.pagination.el.parentNode.querySelector(
						`.color-hex-value--${index}`
					).innerText;

					return `<span style="background: ${bulletColor}" class="${className}"></span>`;
				}
			},

			on: {
				slideChange: function() {
					console.log(this);
				}
			}
		});
	});

	document.querySelectorAll(".image-slide").forEach(productImage => {
		productImage.onclick = function() {
			let myUrl = productImage.style.backgroundImage
				.slice(4, -1)
				.replace(/"/g, "");

			console.log(myUrl);

			const markup = document.createElement("DIV");
			const wrapper = document.createElement("DIV");
			const myImg = document.createElement("IMG");
			const closeButton = document.createElement("A");

			wrapper.classList.add("markup-wrapper");
			wrapper.style.padding = "2em";
			myImg.setAttribute("src", myUrl);
			myImg.style.borderRadius = "25px";
			closeButton.classList.add("close-lightbox");

			markup.appendChild(closeButton);
			markup.appendChild(wrapper);
			wrapper.appendChild(myImg);

			const instance = basicLightbox.create(markup, {
				onShow: instance => {
					instance.element().querySelector("a").onclick = instance.close;
				}
			});

			instance.show();
		};
	});

	var productsPageMobileSwiper = new Swiper(
		".swiper-container-products-mobile",
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
};

export default initSwiper;
