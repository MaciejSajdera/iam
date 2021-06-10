import {
	isElementInViewport,
	isElementInterSecting,
	isElementAtTopOfViewport
} from "./helperFunctions.js";

export default function scrollAnimations() {
	/* Section: 'Center Point' */
	const centerPointStructure = document.querySelector(
		".center-point__structure"
	);

	const clinicsHolder = document.querySelector(".clinics__holder");

	const animateCenterPointStructure = () => {
		[...centerPointStructure.children].forEach(node => {
			node.classList.add("animated");
		});
	};

	clinicsHolder &&
		new isElementInterSecting(clinicsHolder, animateCenterPointStructure);

	/*Section: 'How does it work' */

	const howDoesItWorkStructureDesktop = document.querySelector(
		".how-does-it-work__structure--desktop"
	);

	const stepPathsDesktop = howDoesItWorkStructureDesktop?.querySelectorAll(
		".step__path path"
	);

	const stepBoxesDesktop = howDoesItWorkStructureDesktop?.querySelectorAll(
		".step__box"
	);

	const animateHowDoesItWorkDesktop = () => {
		howDoesItWorkStructureDesktop.classList.add(
			"how-does-it-work--in-viewport"
		);
		[...stepBoxesDesktop].map((stepBox, i) => {
			stepBox.style.transition = `all 0.5s ease-in`;
			stepBox.style.transitionDelay = `${1 + i}s`;
			stepBox.classList.add("text__red");
		});
	};

	stepBoxesDesktop &&
		new isElementInterSecting(stepBoxesDesktop[0], animateHowDoesItWorkDesktop);

	const howDoesItWorkStructureMobile = document.querySelector(
		".how-does-it-work__structure--mobile"
	);

	const stepPathsMobile = howDoesItWorkStructureMobile?.querySelectorAll(
		".step__path path"
	);

	const stepBoxesMobile = howDoesItWorkStructureMobile?.querySelectorAll(
		".step__box"
	);

	const animateHowDoesItWorkMobile = () => {
		howDoesItWorkStructureMobile.classList.add("how-does-it-work--in-viewport");
		[...stepBoxesMobile].map((stepBox, i) => {
			stepBox.style.transition = `all 0.5s ease-in`;
			stepBox.style.transitionDelay = `${1 + i}s`;
			stepBox.classList.add("text__red");
		});
	};

	stepBoxesMobile &&
		new isElementInterSecting(stepBoxesMobile[0], animateHowDoesItWorkMobile);

	/*Section: 'How AI helps us' */

	const howAiHelpsUsTrigger = document.querySelector(".how-ai__description");
	const howAiHelpsUs = document.querySelector(".how-ai__structure__wrapper");

	const animateHowAiHelpsUs = () => {
		howAiHelpsUs.classList.add("how-ai__structure__wrapper--animate");
	};

	howAiHelpsUsTrigger &&
		new isElementInterSecting(howAiHelpsUsTrigger, animateHowAiHelpsUs);

	/*Page: 'Products' */

	const allProductsPage = document.querySelectorAll(
		".page-template-products-page-template .product-holder"
	);

	allProductsPage &&
		allProductsPage.forEach(product => {
			const animateProduct = me => {
				me.classList.add("animate-product");
				console.log(me);
			};
			new isElementInterSecting(product, animateProduct);
		});

	/* 	Footer */

	const subscribeWrapper = document.querySelector(".subscribe-info__subscribe");
	const subscribeButton = document.querySelector(".subscribe-info .button");

	const animateSubscribeButton = () => {
		subscribeButton.classList.add("button-slided"),
			subscribeWrapper.classList.add("subscribe-info__subscribe--in-viewport");
	};

	subscribeButton &&
		new isElementInterSecting(subscribeButton, animateSubscribeButton);

	/* 	Menu */

	// const makeMenuLight = () => {
	// 	document
	// 		.querySelector(".menu-toggle")
	// 		.classList.remove(".menu-toggle--dark");
	// 	document.querySelector(".menu-toggle").classList.add("menu-toggle--light");
	// };

	// const makeMenuDark = () => {
	// 	document
	// 		.querySelector(".menu-toggle")
	// 		.classList.remove("menu-toggle--light");
	// 	document.querySelector(".menu-toggle").classList.add("menu-toggle--dark");
	// };

	// new isElementAtTopOfViewport(
	// 	document.querySelector(".home-products"),
	// 	makeMenuLight,
	// 	makeMenuDark
	// );

	document.addEventListener("scroll", () => {
		/*Section: 'Products' */
		const allProductsHome = document.querySelectorAll(
			".home-products .product-holder"
		);
		allProductsHome &&
			allProductsHome.forEach(product => {
				isElementInViewport(product)
					? product.classList.add("animate-product")
					: "";
			});

		/* 	Menu */
		// console.log(
		// 	document.querySelector(".home-products").getBoundingClientRect().top
		// );

		// if (
		// 	document.querySelector(".home-products").getBoundingClientRect().top < 50
		// ) {
		// 	makeMenuLight();
		// } else {
		// 	makeMenuDark();
		// }

		// /*Section: 'How does it work' */
		// const howDoesItWorkStructureDesktop = document.querySelector(
		// 	".how-does-it-work__structure--desktop"
		// );
		// const stepPathsDesktop = howDoesItWorkStructureDesktop?.querySelectorAll(
		// 	".step__path path"
		// );
		// const stepBoxesDesktop = howDoesItWorkStructureDesktop?.querySelectorAll(
		// 	".step__box"
		// );
		// howDoesItWorkStructureDesktop &&
		// isElementInViewport(howDoesItWorkStructureDesktop)
		// 	? (howDoesItWorkStructureDesktop.classList.add(
		// 			"how-does-it-work--in-viewport"
		// 	  ),
		// 	  //   [...stepPathsDesktop].map(
		// 	  // (stepPath, i) => {
		// 	  // 	stepPath.style.transition = `all 1s ease-in`;
		// 	  // 	stepPath.style.transitionDelay = `${i / 2}s`;
		// 	  // 	stepPath.classList.add("filled-with-color");
		// 	  // },
		// 	  [...stepBoxesDesktop].map((stepBox, i) => {
		// 			stepBox.style.transition = `all 0.5s ease-in`;
		// 			stepBox.style.transitionDelay = `${1 + i}s`;
		// 			stepBox.classList.add("text__red");
		// 	  }))
		// 	: "";
		// const howDoesItWorkStructureMobile = document.querySelector(
		// 	".how-does-it-work__structure--mobile"
		// );
		// const stepPathsMobile = howDoesItWorkStructureMobile?.querySelectorAll(
		// 	".step__path path"
		// );
		// const stepBoxesMobile = howDoesItWorkStructureMobile?.querySelectorAll(
		// 	".step__box"
		// );
		// howDoesItWorkStructureMobile &&
		// isElementInViewport(howDoesItWorkStructureMobile)
		// 	? (howDoesItWorkStructureMobile.classList.add(
		// 			"how-does-it-work--in-viewport"
		// 	  ),
		// 	  [...stepBoxesMobile].map((stepBox, i) => {
		// 			stepBox.style.transition = `all 0.5s ease-in`;
		// 			stepBox.style.transitionDelay = `${1 + i}s`;
		// 			stepBox.classList.add("text__red");
		// 	  }))
		// 	: "";
		// /*Section: 'How AI helps us' */
		// const howAiHelpsUsTrigger = document.querySelector(".how-ai__description");
		// const howAiHelpsUs = document.querySelector(".how-ai__structure__wrapper");
		// howAiHelpsUsTrigger && isElementInViewport(howAiHelpsUsTrigger)
		// 	? howAiHelpsUs.classList.add("how-ai__structure__wrapper--animate")
		// 	: "";

		/* Footer */
		// const subscribeWrapper = document.querySelector(
		// 	".subscribe-info__subscribe"
		// );
		// const subscribeButton = document.querySelector(".subscribe-info .button");
		// subscribeButton && isElementInViewport(subscribeButton)
		// 	? (subscribeButton.classList.add("button-slided"),
		// 	  subscribeWrapper.classList.add(
		// 			"subscribe-info__subscribe--in-viewport"
		// 	  ))
		// 	: "";
	});
}
