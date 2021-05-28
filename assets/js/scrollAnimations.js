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
	});
}
