/**
 * Loading
 * @description
 * Render a loading overlay and icon for a given container element.
 */

export default class Loader {
	constructor(objOptions) {
		this.init(objOptions);
	}

	init(objOptions) {
		let overlay = document.createElement("div");
		overlay.className = "loader-overlay";

		let spinner = document.createElement("div");
		spinner.className = "loader-spinner";

		this.options = Object.assign({
			container: document.body, // default container is the body
			overlay: overlay, // element for the overlay
			spinner: spinner, // element for the spinner icon
			animSpeed: 0.5, // (s) TweenMax animation speed
			animEase: "Quad.easeOut", // TweenMax animation ease
			position: "fixed"
		}, objOptions);

		this.ui = {
			container: this.options.container,
			overlay: null,
			spinner: null,
		};
	}

	/**
	 * Create the elements and append them to the container
	 */
	show() {
		this.ui.overlay = this.options.overlay;
		this.ui.spinner = this.options.spinner;
		this.ui.overlay.style.position = this.options.position;

		this.ui.overlay.appendChild(this.ui.spinner);
		this.ui.container.appendChild(this.ui.overlay);

		// Animate overlay into view
		window.gsap.fromTo(this.ui.overlay, {
			duration: this.options.animSpeed,
			autoAlpha: 0,
		}, {
			autoAlpha: 1,
			ease: this.options.animEase,
		});
	}

	/**
	 * Remove the loader
	 */
	hide() {
		this.ui.overlay.remove();
	}
}
