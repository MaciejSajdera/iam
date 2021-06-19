import {
	isElementInViewport,
	isElementInterSecting,
	isElementAtTopOfViewport,
	isElementLeavingViewport,
	isElementInterSectingNoThreshold
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

	/*Section: 'How does it work - Home  Page' */

	const howDoesItWorkHomePage = document.querySelector(
		".how-does-it-work--home-page"
	);

	//Desktop

	const howDoesItWorkStructureDesktop = howDoesItWorkHomePage?.querySelector(
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
		// [...stepBoxesDesktop].map((stepBox, i) => {
		// 	stepBox.style.transition = `all 0.5s ease-in`;
		// 	stepBox.style.transitionDelay = `${1 + i}s`;
		// 	stepBox.classList.add("text__red");
		// });
	};

	howDoesItWorkHomePage &&
		stepBoxesDesktop &&
		new isElementInterSecting(stepBoxesDesktop[0], animateHowDoesItWorkDesktop);

	//Mobile

	const howDoesItWorkStructureMobile = howDoesItWorkHomePage?.querySelector(
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
		// [...stepBoxesMobile].map((stepBox, i) => {
		// 	stepBox.style.transition = `all 0.5s ease-in`;
		// 	stepBox.style.transitionDelay = `${1 + i}s`;
		// 	stepBox.classList.add("text__red");
		// });
	};

	howDoesItWorkHomePage &&
		stepBoxesMobile &&
		new isElementInterSecting(stepBoxesMobile[0], animateHowDoesItWorkMobile);

	/*Subpage: 'How does it work' */

	const howDoesItWorkSubpage = document.querySelector(
		".how-does-it-work--subpage"
	);

	//Desktop

	const howDoesItWorkSubpageStructureDesktop = howDoesItWorkSubpage?.querySelector(
		".how-does-it-work__structure--desktop"
	);

	const howDoesItWorkSubpageDescriptionStickyContent = document.querySelector(
		".how-does-it-work__description--sticky-content"
	);

	const howDoesItWorkSubpageDescription = howDoesItWorkSubpage?.querySelector(
		".how-does-it-work__description"
	);

	const stepPathsSubpageDesktop = howDoesItWorkSubpageStructureDesktop?.querySelectorAll(
		".step__path path"
	);

	const stepBoxesSubpageDesktop = howDoesItWorkSubpageStructureDesktop?.querySelectorAll(
		".step__box"
	);

	const animateHowDoesItWorkSubpageDesktop = () => {
		howDoesItWorkSubpageStructureDesktop.classList.add(
			"how-does-it-work--in-viewport"
		);

		let getDescriptionPosition = howDoesItWorkSubpageDescription.getBoundingClientRect()
			.y;

		howDoesItWorkSubpageDescriptionStickyContent.style.top = `${getDescriptionPosition}px`;

		// [...stepBoxesDesktop].map((stepBox, i) => {
		// 	stepBox.style.transition = `all 0.5s ease-in`;
		// 	stepBox.style.transitionDelay = `${1 + i}s`;
		// 	stepBox.classList.add("text__red");
		// });
	};

	stepBoxesSubpageDesktop &&
		new isElementInterSecting(
			stepBoxesSubpageDesktop[0],
			animateHowDoesItWorkSubpageDesktop
		);

	const nextSection = document.querySelector(".how-does-it-work-video");

	const stopStickyElement = () => {
		howDoesItWorkSubpageDescriptionStickyContent.style.opacity = 0;
		setTimeout(() => {
			howDoesItWorkSubpageDescriptionStickyContent.style.display = "none";
		}, 300);
	};

	const startStickyElement = () => {
		howDoesItWorkSubpageDescriptionStickyContent.style.display = "block";

		setTimeout(() => {
			howDoesItWorkSubpageDescriptionStickyContent.style.opacity = 1;
		}, 300);
	};

	stepBoxesSubpageDesktop &&
		new isElementInterSectingNoThreshold(
			nextSection,
			stopStickyElement,
			startStickyElement
		);

	//Mobile

	const howDoesItWorkSubpageStructureMobile = howDoesItWorkSubpage?.querySelector(
		".how-does-it-work__structure--mobile"
	);

	// const howDoesItWorkSubpageDescriptionStickyContent = document.querySelector(
	// 	".how-does-it-work__description--sticky-content"
	// );

	// const howDoesItWorkSubpageDescription = howDoesItWorkSubpage?.querySelector(
	// 	".how-does-it-work__description"
	// );

	const stepPathsSubpageMobile = howDoesItWorkSubpageStructureMobile?.querySelectorAll(
		".step__path path"
	);

	const stepBoxesSubpageMobile = howDoesItWorkSubpageStructureMobile?.querySelectorAll(
		".step__box"
	);

	const animateHowDoesItWorkSubpageMobile = () => {
		howDoesItWorkSubpageStructureMobile.classList.add(
			"how-does-it-work--in-viewport"
		);

		let getDescriptionPosition = howDoesItWorkSubpageDescription.getBoundingClientRect()
			.y;

		howDoesItWorkSubpageDescriptionStickyContent.style.top = `${getDescriptionPosition}px`;

		// [...stepBoxesDesktop].map((stepBox, i) => {
		// 	stepBox.style.transition = `all 0.5s ease-in`;
		// 	stepBox.style.transitionDelay = `${1 + i}s`;
		// 	stepBox.classList.add("text__red");
		// });
	};

	stepBoxesSubpageMobile &&
		new isElementInterSecting(
			stepBoxesSubpageMobile[0],
			animateHowDoesItWorkSubpageMobile
		);

	// const howDoesItWorkStructureMobile = document.querySelector(
	// 	".how-does-it-work__structure--mobile"
	// );

	// const stepPathsMobile = howDoesItWorkStructureMobile?.querySelectorAll(
	// 	".step__path path"
	// );

	// const stepBoxesMobile = howDoesItWorkStructureMobile?.querySelectorAll(
	// 	".step__box"
	// );

	// const animateHowDoesItWorkMobile = () => {
	// 	howDoesItWorkStructureMobile.classList.add("how-does-it-work--in-viewport");
	// 	[...stepBoxesMobile].map((stepBox, i) => {
	// 		stepBox.style.transition = `all 0.5s ease-in`;
	// 		stepBox.style.transitionDelay = `${1 + i}s`;
	// 		stepBox.classList.add("text__red");
	// 	});
	// };

	// stepBoxesMobile &&
	// 	new isElementInterSecting(stepBoxesMobile[0], animateHowDoesItWorkMobile);

	/*Section: 'How AI helps us' */

	const howAiHelpsUsTrigger = document.querySelector(".how-ai__title");
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
			const animateProduct = node => {
				node.classList.add("animate-product");
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
