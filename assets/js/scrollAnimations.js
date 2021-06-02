import isElementInViewport from "./helperFunctions.js";

export default function scrollAnimations() {
	document.addEventListener("scroll", () => {
		/* Section: 'Center Point' */
		const centerPointStructure = document.querySelector(
			".center-point__structure"
		);

		centerPointStructure && isElementInViewport(centerPointStructure)
			? [...centerPointStructure.children].forEach(node => {
					node.classList.add("animated");
			  })
			: "";

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

		howDoesItWorkStructureDesktop &&
		isElementInViewport(howDoesItWorkStructureDesktop)
			? (howDoesItWorkStructureDesktop.classList.add(
					"how-does-it-work--in-viewport"
			  ),
			  //   [...stepPathsDesktop].map(
			  // (stepPath, i) => {
			  // 	stepPath.style.transition = `all 1s ease-in`;
			  // 	stepPath.style.transitionDelay = `${i / 2}s`;
			  // 	stepPath.classList.add("filled-with-color");
			  // },
			  [...stepBoxesDesktop].map((stepBox, i) => {
					stepBox.style.transition = `all 0.5s ease-in`;
					stepBox.style.transitionDelay = `${1 + i}s`;
					stepBox.classList.add("text__red");
			  }))
			: "";

		const howDoesItWorkStructureMobile = document.querySelector(
			".how-does-it-work__structure--mobile"
		);

		const stepPathsMobile = howDoesItWorkStructureMobile?.querySelectorAll(
			".step__path path"
		);

		const stepBoxesMobile = howDoesItWorkStructureMobile?.querySelectorAll(
			".step__box"
		);

		howDoesItWorkStructureMobile &&
		isElementInViewport(howDoesItWorkStructureMobile)
			? (howDoesItWorkStructureMobile.classList.add(
					"how-does-it-work--in-viewport"
			  ),
			  [...stepBoxesMobile].map((stepBox, i) => {
					stepBox.style.transition = `all 0.5s ease-in`;
					stepBox.style.transitionDelay = `${1 + i}s`;
					stepBox.classList.add("text__red");
			  }))
			: "";

		/*Section: 'How AI helps us' */

		const howAiHelpsUsTrigger = document.querySelector(".how-ai__description");
		const howAiHelpsUs = document.querySelector(".how-ai__structure__wrapper");

		howAiHelpsUsTrigger && isElementInViewport(howAiHelpsUsTrigger)
			? howAiHelpsUs.classList.add("how-ai__structure__wrapper--animate")
			: "";

		/*Section: 'Products' */

		const allProducts = document.querySelectorAll(".product-holder");

		allProducts &&
			allProducts.forEach(product => {
				isElementInViewport(product)
					? product.classList.add("animate-product")
					: "";
			});

		/* Footer */
		const subscribeWrapper = document.querySelector(
			".subscribe-info__subscribe"
		);
		const subscribeButton = document.querySelector(".subscribe-info .button");

		subscribeButton && isElementInViewport(subscribeButton)
			? (subscribeButton.classList.add("button-slided"),
			  subscribeWrapper.classList.add(
					"subscribe-info__subscribe--in-viewport"
			  ))
			: "";
	});
}
