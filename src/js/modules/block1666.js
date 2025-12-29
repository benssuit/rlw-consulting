export default class Block1666 {
	constructor() {
		this.init();
	}

	init() {

		const faqItems = Array.from(document.querySelectorAll(".cs-faq-item"));
		for (const item of faqItems) {
			const onClick = () => {
				item.classList.toggle("active");
			};
			item.addEventListener("click", onClick);
		}
	}
}