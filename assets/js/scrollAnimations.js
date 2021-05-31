import isElementInViewport from "./helperFunctions.js";

export default function scrollAnimations() {
	document.addEventListener("scroll", () => {
		/* Footer */
		const subscribeWrapper = document.querySelector(
			".subscribe-info__subscribe"
		);
		const subscribeButton = document.querySelector(".subscribe-info .button");

		isElementInViewport(subscribeButton)
			? (subscribeButton.classList.add("button-slided"),
			  subscribeWrapper.classList.add(
					"subscribe-info__subscribe--in-viewport"
			  ))
			: "";

		const howDoesItWorkStructureDesktop = document.querySelector(
			".how-does-it-work__structure--desktop"
		);

		const stepPathsDesktop = howDoesItWorkStructureDesktop.querySelectorAll(
			".step__path path"
		);

		isElementInViewport(howDoesItWorkStructureDesktop)
			? (howDoesItWorkStructureDesktop.classList.add(
					"how-does-it-work--in-viewport"
			  ),
			  [...stepPathsDesktop].map((stepPath, i) => {
					stepPath.style.transition = `all 0.5s ease-in`;
					stepPath.style.transitionDelay = `${i / 2}s`;
					stepPath.classList.add("filled-with-color");
			  }))
			: "";

		const howDoesItWorkStructureMobile = document.querySelector(
			".how-does-it-work__structure--mobile"
		);

		const stepPathsMobile = howDoesItWorkStructureMobile.querySelectorAll(
			".step__path path"
		);

		isElementInViewport(howDoesItWorkStructureMobile)
			? (howDoesItWorkStructureMobile.classList.add(
					"how-does-it-work--in-viewport"
			  ),
			  [...stepPathsMobile].map((stepPath, i) => {
					stepPath.style.transition = `all 0.5s ease-in`;
					stepPath.style.transitionDelay = `${i / 2}s`;
					stepPath.classList.add("filled-with-color");
			  }))
			: "";

		const howAiHelpsUsTrigger = document.querySelector(".how-ai__description");
		const howAiHelpsUs = document.querySelector(".how-ai__structure__wrapper");

		isElementInViewport(howAiHelpsUsTrigger)
			? howAiHelpsUs.classList.add("how-ai__structure__wrapper--animate")
			: "";
	});
}
