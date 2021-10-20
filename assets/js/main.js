import smoothscroll from "smoothscroll-polyfill";
import skipLinkFocus from "./skip-link-focus-fix.js";
import initSwiper from "./carousels.js";
import scrollAnimations from "./scrollAnimations.js";
import { gsap, TweenLite } from "gsap";
import { CSSPlugin } from "gsap/CSSPlugin";
import * as basicLightbox from "basiclightbox";
import videojs from "video.js";
import "video.js/dist/video-js.min.css";

/* DOM Measurement for better RWD */

window.addEventListener("load", () => {
	let vh = window.innerHeight * 0.01;
	let fullVH = window.innerHeight;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
	document.documentElement.style.setProperty("--fullVH", `${fullVH}px`);

	const siteHeader = document.querySelector(".site-header");
	let siteHeaderHeight = siteHeader.getBoundingClientRect().height;
	document.documentElement.style.setProperty(
		"--header-height",
		`${siteHeaderHeight}px`
	);
});

window.addEventListener("resize", () => {
	let vh = window.innerHeight * 0.01;
	let fullVH = window.innerHeight;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
	document.documentElement.style.setProperty("--fullVH", `${fullVH}px`);

	const siteHeader = document.querySelector(".site-header");
	let siteHeaderHeight = siteHeader.getBoundingClientRect().height;
	document.documentElement.style.setProperty(
		"--header-height",
		`${siteHeaderHeight}px`
	);
});

/* Functionalities */

document.addEventListener("DOMContentLoaded", () => {
	const myPreloader = document.querySelector(".my-preloader");
	const page = document.querySelector("#page");
	// const body = document.querySelector("body");

	setTimeout(() => {
		myPreloader.classList.add("my-preloader-off");
		page.classList.add("page-loaded");
		document.querySelector("body").classList.add("body-loaded");
	}, 1000);

	setTimeout(() => {
		page.classList.add("page-show");

		const enviromentTriangleTrack = document.querySelector(
			".enviroment__triangle-track"
		);

		if (enviromentTriangleTrack) {
			enviromentTriangleTrack.classList.add(
				"enviroment__triangle-track--initialized"
			);
		}
	}, 1001);

	setTimeout(() => {
		myPreloader.classList.add("my-preloader-none");
	}, 1300);

	smoothscroll.polyfill();
	scrollAnimations();

	/* Check if iPad */
	// const isiPad = window.navigator.userAgent.match(/iPad/i) != null;

	// if (isiPad) {
	// 	//elements that have variations for iPad
	// 	const mainNavigationAdditional = document.querySelector(
	// 		".main-navigation__additional"
	// 	);
	// 	//actions
	// 	mainNavigationAdditional.classList.add("main-navigation__for-ipad");
	// }

	// if (!isiPad) {
	// 	const iPadOnlyElements = document.querySelectorAll(".ipad-only");

	// 	iPadOnlyElements.forEach(element => {
	// 		element.style.display = "none";
	// 	});
	// }

	skipLinkFocus();

	/* SmoothScroll For Desktop */

	var html = document.documentElement;
	var body = document.body;

	var scroller = {
		target: document.querySelector("#scroll-container"),
		ease: 0.1, // <= scroll speed
		endY: 0,
		y: 0,
		resizeRequest: 1,
		scrollRequest: 0
	};

	var requestId = null;

	const initSmoothScroll = () => {
		const viewport = document.querySelector(".viewport");
		const scrollContainer = document.querySelector(".scroll-container");

		viewport.classList.add("viewport-smooth-scroll-active");
		scrollContainer.classList.add("scroll-container-smooth-scroll-active");

		// Force CSSPlugin to not get dropped during build
		gsap.registerPlugin(CSSPlugin);

		TweenLite.set(scroller.target, {
			rotation: 0.01,
			force3D: true
		});

		// window.addEventListener("load", onLoad);

		onLoad();
		onResize();
		onScroll();

		function onLoad() {
			window.focus();
			window.addEventListener("resize", onResize);
			document.addEventListener("scroll", onScroll);
		}

		window.addEventListener("resize", updateScroller);

		function updateScroller() {
			var resized = scroller.resizeRequest > 0;

			if (resized) {
				var height = scroller.target.clientHeight;
				body.style.height = height + "px";
				scroller.resizeRequest = 0;
			}

			var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

			scroller.endY = scrollY;
			scroller.y += (scrollY - scroller.y) * scroller.ease;

			if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
				scroller.y = scrollY;
				scroller.scrollRequest = 0;
			}

			TweenLite.set(scroller.target, {
				y: -scroller.y
			});

			requestId =
				scroller.scrollRequest > 0
					? requestAnimationFrame(updateScroller)
					: null;
		}

		function onScroll() {
			scroller.scrollRequest++;
			if (!requestId) {
				requestId = requestAnimationFrame(updateScroller);
			}
		}

		function onResize() {
			scroller.resizeRequest++;
			if (!requestId) {
				requestId = requestAnimationFrame(updateScroller);
			}
		}
	};

	const mediaQueryDesktop = window.matchMedia("(min-width: 992px)");
	function handleDesktopChange(e) {
		// Check if the media query is true
		if (e.matches) {
			// Then log the following message to the console
			console.log("Media Query Desktop Matched!");
			// initSmoothScroll();
		}
	}

	mediaQueryDesktop.addListener(handleDesktopChange);
	handleDesktopChange(mediaQueryDesktop);

	/* 	Navigation */

	const mainNavigation = document.querySelector(".main-navigation");
	const allMenuItems = document.querySelectorAll(".menu-item");

	//Navigation is initially hidden due to the 'transfrom: translate' delay when page is loading

	setTimeout(() => {
		mainNavigation.style.display = "flex";
	}, 100);

	let isMenuOpen = false;

	function toggleMenu(e) {
		isMenuOpen = !isMenuOpen;

		/* Burger animation */
		isMenuOpen
			? (menuToggleButton.classList.add("menu--open"),
			  menuToggleButton.classList.add("menu-toggle--light"),
			  showTextElements())
			: (menuToggleButton.classList.remove("menu--open"),
			  menuToggleButton.classList.remove("menu-toggle--light"));

		!isMenuOpen
			? (menuToggleButton.classList.add("menu--closed"), hideLinkElements())
			: menuToggleButton.classList.remove("menu--closed");

		/* Menu animation */

		isMenuOpen
			? mainNavigation.classList.add("main-navigation--open")
			: mainNavigation.classList.remove("main-navigation--open");
	}

	const menuToggleButton = document.querySelector(".menu-toggle");
	menuToggleButton.addEventListener("click", toggleMenu);

	const showTextElements = () => {
		function textRevealMenu() {
			allMenuItems.forEach(item => {
				const linkElement = item.querySelector("A");
				linkElement.classList.add("text-reveal__bottom");
			});
		}

		textRevealMenu();
	};

	const hideLinkElements = () => {
		function textUnrevealMenu() {
			allMenuItems.forEach(item => {
				const linkElement = item.querySelector("A");
				linkElement.classList.remove("text-reveal__bottom");
			});
		}

		setTimeout(() => {
			textUnrevealMenu();
		}, 500);
	};

	const menuIcons = document.querySelector(".main-navigation__icons");

	if (allMenuItems) {
		const textMultipliedHolder = document.createElement("SPAN");
		textMultipliedHolder.classList.add("text-multiplied");

		allMenuItems.forEach(item => {
			const linkElement = item.querySelector("A");

			const originalLinkText = linkElement.innerText;
			const linksFirstLetter = originalLinkText.charAt(0);
			const linkWithoutFirstLetter = originalLinkText.slice(1);

			let linksFirstLetterNode = document.createElement("SPAN");
			linksFirstLetterNode.classList.add("menu-item--first-letter");
			linksFirstLetterNode.innerText = linksFirstLetter;

			let linkWithoutFirstLetterNode = document.createElement("SPAN");
			linkWithoutFirstLetterNode.classList.add("menu-item--no-first-letter");
			linkWithoutFirstLetterNode.innerText = linkWithoutFirstLetter;

			linkElement.innerHTML = "";

			linkElement.appendChild(linksFirstLetterNode);
			linkElement.appendChild(linkWithoutFirstLetterNode);

			item.addEventListener("mouseenter", function(e) {
				this.querySelector(".menu-item--first-letter").classList.add(
					"font__red"
				);

				this.querySelector(".menu-item--no-first-letter").classList.add(
					"font-outline__red"
				);

				let textMultiplied = "";

				for (var i = 0; i < 50; i++) {
					textMultiplied += `${this.querySelector("A").innerText} `;
				}

				textMultipliedHolder.innerText = textMultiplied;

				this.appendChild(textMultipliedHolder);
			});

			item.addEventListener("mouseleave", function(e) {
				this.querySelector(".menu-item--first-letter").classList.remove(
					"font__red"
				);

				this.querySelector(".menu-item--no-first-letter").classList.remove(
					"font-outline__red"
				);

				this.removeChild(textMultipliedHolder);
			});
		});
	}

	/* Scroll Down Button */
	const scrollDownButton = document.querySelector(".welcome-view__scroll-down");

	// const smoothScrollToTarget = (trigger, target) => {
	// 	const distanceToScroll =
	// 		trigger.getBoundingClientRect().top +
	// 		target.getBoundingClientRect().top -
	// 		trigger.getBoundingClientRect().top;

	// 	console.log(`trigger distance from top of the page: ${distanceToScroll}`);

	// 	// trigger.addEventListener("click", () => {});
	// };

	// smoothScrollToTarget(scrollDownButton, secondSection);

	scrollDownButton &&
		scrollDownButton.addEventListener("click", () => {
			window.scroll({
				top: window.innerHeight,
				left: 0,
				behavior: "smooth"
			});
		});

	const readMoreScrollDown = document.querySelector(
		".welcome-view__cta-wrapper .button"
	);

	readMoreScrollDown &&
		readMoreScrollDown.addEventListener("click", () => {
			window.scroll({
				top: window.innerHeight,
				left: 0,
				behavior: "smooth"
			});
		});

	/* Center Points */

	const circleElements = document.querySelectorAll(
		".center-point__circle-element .svg-holder"
	);

	circleElements &&
		circleElements.forEach(element => {
			element.addEventListener("mouseenter", function() {
				this.classList.add("circle-animations");
			});

			element.addEventListener("mouseleave", function() {
				this.classList.remove("circle-animations");
			});
		});

	/* 	Products */

	const allProductsHome = document.querySelectorAll(
		".home-products .product-holder"
	);

	allProductsHome &&
		allProductsHome.forEach(product => {
			product.addEventListener("click", () => {
				let markup = product.cloneNode(true);

				const closeButton = document.createElement("A");
				closeButton.classList.add("close-lightbox");

				markup.appendChild(closeButton);

				const instance = basicLightbox.create(markup, {
					onShow: instance => {
						instance.element().querySelector("a").onclick = instance.close;
					}
				});

				instance.show();
			});
		});

	/* Carousels */
	const isThereAnySwiper = document.querySelector(".swiper-wrapper");
	isThereAnySwiper ? initSwiper() : "";

	/* How Does It Work */
	const myVideo = document.querySelector(".video-js");

	myVideo && videojs(myVideo);

	const allStepIcons = document.querySelectorAll(".step__icon");

	allStepIcons.forEach(icon => {
		icon.addEventListener("mouseover", function() {
			// this.closest(".step").querySelector(".step__box").style.color = "#be272e";
			this.closest(".step")
				.querySelector(".step__box")
				.classList.toggle("text__red");
		});
	});

	/* Footer */

	const scrollUpButton = document.querySelector(".footer__scroll-up");

	scrollUpButton &&
		scrollUpButton.addEventListener("click", () => {
			window.scrollTo({ top: 0, behavior: "smooth" });
		});
});
