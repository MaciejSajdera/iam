export const isElementInViewport = el => {
	const scroll = window.scrollY || window.pageYOffset;
	const boundsTop = el.getBoundingClientRect().top + scroll;

	const viewport = {
		top: scroll,
		bottom: scroll + window.innerHeight // add multiplier (i.e * 0.75) to delay trigger
	};

	const bounds = {
		top: boundsTop,
		bottom: boundsTop + el.clientHeight
	};

	return (
		(bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom) ||
		(bounds.top <= viewport.bottom && bounds.top >= viewport.top)
	);
};

export class isElementInterSecting {
	constructor(element, action) {
		this.element = element;
		this.action = action;

		if ("IntersectionObserver" in window) {
			// IntersectionObserver Supported
			let config = {
				root: null,
				rootMargin: "0px",
				threshold: 0.1
			};

			let observer = new IntersectionObserver(onChange, config);

			observer.observe(element);

			function onChange(changes, observer) {
				changes.forEach(change => {
					if (change.intersectionRatio > 0) {
						// Stop watching and load the image
						action(change.target);
						observer.unobserve(change.target);
					}
				});
			}
		} else {
			// IntersectionObserver NOT Supported
			action(element);
		}
	}
}

export class isElementInterSectingNoThreshold {
	constructor(element, doAction, undoAction) {
		this.element = element;
		this.doAction = doAction;
		this.undoAction = undoAction;

		if ("IntersectionObserver" in window) {
			// IntersectionObserver Supported
			let config = {
				root: null,
				rootMargin: "0px",
				threshold: 0.1
			};

			let observer = new IntersectionObserver(onChange, config);

			observer.observe(element);
			function onChange(changes, observer) {
				changes.forEach(change => {
					console.log(change);

					if (change.isIntersecting) {
						doAction(change.target);
					}
					if (!change.isIntersecting) {
						undoAction(change.target);
					}
				});
			}
		} else {
			// IntersectionObserver NOT Supported
			// action(element);
			return;
		}
	}
}

export class isElementAtTopOfViewport {
	constructor(element, doAction, undoAction) {
		this.element = element;
		this.doAction = doAction;
		this.undoAction = undoAction;

		if ("IntersectionObserver" in window) {
			// IntersectionObserver Supported
			let config = {
				root: null,
				rootMargin: "0px",
				threshold: 0.5
			};

			let observer = new IntersectionObserver(onChange, config);

			observer.observe(element);

			function onChange(changes, observer) {
				changes.forEach(change => {
					console.log(change);

					if (change.isIntersecting) {
						doAction(change.target);
					}
					if (!change.isIntersecting) {
						undoAction(change.target);
					}
				});
			}
		} else {
			// IntersectionObserver NOT Supported
			return;
		}
	}
}

export class isElementLeavingViewport {
	constructor(element, doAction, undoAction) {
		this.element = element;
		this.doAction = doAction;
		this.undoAction = undoAction;

		if ("IntersectionObserver" in window) {
			// IntersectionObserver Supported
			let config = {
				root: null,
				rootMargin: "0px",
				threshold: 0.5
			};

			let observer = new IntersectionObserver(onChange, config);

			observer.observe(element);

			function onChange(changes, observer) {
				changes.forEach(change => {
					console.log(change);

					if (change.isIntersecting) {
						doAction(change.target);
					}
					if (!change.isIntersecting) {
						undoAction(change.target);
					}
				});
			}
		} else {
			// IntersectionObserver NOT Supported
			return;
		}
	}
}

export default isElementInViewport;
