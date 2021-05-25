/**
 * Main JavaScript file.
 */
import skipLinkFocus from "./skip-link-focus-fix.js";

window.addEventListener("load", () => {
	let vh = window.innerHeight * 0.01;
	let fullVH = window.innerHeight;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
	document.documentElement.style.setProperty("--fullVH", `${fullVH}px`);
});

window.addEventListener("resize", () => {
	let vh = window.innerHeight * 0.01;
	let fullVH = window.innerHeight;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
	document.documentElement.style.setProperty("--fullVH", `${fullVH}px`);
});

document.addEventListener("DOMContentLoaded", () => {
	skipLinkFocus();

	/* 	Navigation */

	let isMenuOpen = false;

	function toggleMenu(e) {
		isMenuOpen = !isMenuOpen;

		/* Burger animation */
		isMenuOpen
			? (menuToggleButton.classList.add("menu--open"),
			  menuToggleButton.classList.add("menu-toggle--light"))
			: (menuToggleButton.classList.remove("menu--open"),
			  menuToggleButton.classList.remove("menu-toggle--light"));

		!isMenuOpen
			? menuToggleButton.classList.add("menu--closed")
			: menuToggleButton.classList.remove("menu--closed");

		/* Menu animation */

		const mainNavigation = document.querySelector(".main-navigation");

		isMenuOpen
			? mainNavigation.classList.add("main-navigation--open")
			: mainNavigation.classList.remove("main-navigation--open");
	}

	const menuToggleButton = document.querySelector(".menu-toggle");
	menuToggleButton.addEventListener("click", toggleMenu);

	const allMenuItems = document.querySelectorAll(".menu-item");

	const textMultipliedHolder = document.createElement("SPAN");
	textMultipliedHolder.classList.add("text-multiplied");

	if (allMenuItems) {
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
});
