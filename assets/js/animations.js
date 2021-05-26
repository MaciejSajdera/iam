import isElementInViewport from "./helperFunctions";

export class RevealChildrenOf {
	constructor(elementsParent, delayTime) {
		this.elementsParent = elementsParent;
		this.delayTime = delayTime;

		if (!elementsParent) {
			return;
		}

		this.hide();

		isElementInViewport(this.elementsParent)
			? this.reveal()
			: document.addEventListener("scroll", () => {
					this.reveal();
			  });
	}

	hide() {
		[...this.elementsParent.children].map((element, i) => {
			element.style.opacity = "0";
		});
	}

	reveal() {
		isElementInViewport(this.elementsParent)
			? [...this.elementsParent.children].map((element, i) => {
					element.style.transition = `all 0.${this.delayTime}s ease-in`;
					element.style.transitionDelay = `${i / this.delayTime}s`;
					element.style.opacity = "1";
			  })
			: "";
	}
}
