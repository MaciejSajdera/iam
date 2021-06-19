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
	var howDoesitWorkPage = new Swiper(".swiper-container-how-does-it-work", {
		direction: "horizontal",
		loop: false,
		// parallax: true,
		effect: "fade",
		fadeEffect: {
			crossFade: true
		},
		centeredSlides: true,
		slidesPerView: 1,
		spaceBetween: 50,
		initialSlide: 0,
		speed: 300,
		grabCursor: true,
		observer: true,
		observeParents: true,
		// breakpoints: {
		// 	992: {
		// 		slidesPerView: 1.5,
		// 		centeredSlides: true
		// 	}
		// },

		pagination: {
			el: `.swiper-pagination-how-does-it-work`,
			clickable: true,

			renderBullet: function(index, className) {
				return `<span id="go-to-slide-${index}" class="${className}"></span>`;
			}
		},

		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		}
	});

	const howDoesItWorkSubpage = document.querySelector(
		".how-does-it-work--subpage"
	);

	const allStepsDesktop = document.querySelectorAll(
		".how-does-it-work__structure--desktop .step"
	);

	const allStepsMobile = document.querySelectorAll(
		".how-does-it-work__structure--mobile .step"
	);

	howDoesItWorkSubpage &&
		allStepsDesktop.forEach((step, i) => {
			step.addEventListener("click", e => {
				document.querySelector(`#go-to-slide-${i}`).click();

				allStepsDesktop.forEach((step, i) => {
					step.classList.remove("step-active");
				});
				e.target.closest(".step").classList.add("step-active");

				// document
				// 	.querySelector(`.how-does-it-work__structure--desktop .step-${i - 1}`)
				// 	.classList.add("how-does-it-work--in-viewport");
			});
		});

	howDoesItWorkSubpage &&
		allStepsMobile.forEach((step, i) => {
			step.addEventListener("click", e => {
				document.querySelector(`#go-to-slide-${i}`).click();

				console.log(e.target);

				allStepsMobile.forEach((step, i) => {
					step.classList.remove("step-active");
				});
				e.target.closest(".step").classList.add("step-active");

				//modal

				const howDoesItWorkSwiper = document.querySelector(
					".how-does-it-work__description--sticky-content"
				);

				const markup = howDoesItWorkSwiper.cloneNode(true);
				// const wrapper = document.createElement("DIV");
				// const myImg = document.createElement("IMG");
				const closeButton = document.createElement("A");

				// wrapper.classList.add("markup-wrapper");
				// wrapper.style.padding = "2em";

				closeButton.classList.add("close-lightbox");
				closeButton.style.top = "-2em";
				closeButton.style.right = "1em";

				markup.appendChild(closeButton);
				// markup.appendChild(wrapper);
				// wrapper.appendChild(myImg);

				const instance = basicLightbox.create(markup, {
					onShow: instance => {
						instance.element().querySelector("a").onclick = instance.close;
					}
				});

				instance.show();

				// document
				// 	.querySelector(`.how-does-it-work__structure--desktop .step-${i - 1}`)
				// 	.classList.add("how-does-it-work--in-viewport");
			});
		});

	howDoesItWorkSubpage &&
		document.querySelectorAll(".swiper-slide img").forEach(productImage => {
			productImage.onclick = function() {
				let myUrl = productImage.src;

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

	var testimonials = new Swiper(".swiper-container-testimonials", {
		direction: "horizontal",
		loop: false,
		// parallax: true,
		centeredSlides: true,
		spaceBetween: 300,
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

	const swiperPrevTestimonial = document.querySelector(
		".swiper-prev-testimonial"
	);
	const swiperNextTestimonial = document.querySelector(
		".swiper-next-testimonial"
	);

	swiperPrevTestimonial
		? (swiperPrevTestimonial.querySelector("IMG").src = document.querySelector(
				".prev-testimonial-thumbnail--0 img"
		  ).src)
		: "";

	swiperNextTestimonial
		? (swiperNextTestimonial.querySelector("IMG").src = document.querySelector(
				".next-testimonial-thumbnail--0 img"
		  ).src)
		: "";

	const currentTestimonialLogoMobile = document.querySelector(
		".current-testimonial__logo-holder img"
	);

	let currentTestimonialLogo = document.querySelector(
		".swiper-slide .single-testimony__image img"
	);

	currentTestimonialLogo
		? (currentTestimonialLogoMobile.src = currentTestimonialLogo.src)
		: "";

	testimonialsPageSwiper.on("slideChange", function() {
		console.log(testimonialsPageSwiper.activeIndex);

		let count = testimonialsPageSwiper.activeIndex;

		let allSlides = document.querySelectorAll(
			".swiper-container-testimonials-page .swiper-slide"
		);

		let currentSlide = allSlides[count];
		let currentSlideLogo = currentSlide.querySelector(
			".single-testimony__image IMG"
		).src;

		let nextSlide = allSlides[count + 1] || allSlides[count];
		let nextSlideLogo = nextSlide.querySelector(".single-testimony__image IMG")
			.src;

		let prevSlide = allSlides[count - 1] || allSlides[0];
		let prevSlideLogo = prevSlide.querySelector(".single-testimony__image IMG")
			.src;

		currentTestimonialLogoMobile.src = currentSlideLogo;

		swiperNextTestimonial.querySelector("IMG").src && nextSlideLogo
			? (swiperNextTestimonial.querySelector("IMG").src = nextSlideLogo)
			: "";

		swiperPrevTestimonial.querySelector("IMG").src && prevSlideLogo
			? (swiperPrevTestimonial.querySelector("IMG").src = prevSlideLogo)
			: "";
	});

	/* 	Products */

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
			fadeEffect: {
				crossFade: true
			},

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
			fadeEffect: {
				crossFade: true
			},
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
			fadeEffect: {
				crossFade: true
			},

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
			fadeEffect: {
				crossFade: true
			},
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
			}

			// on: {
			// 	slideChange: function() {
			// 		console.log(this);
			// 	}
			// }
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
			myImg.style.maxHeight = "600px";
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
