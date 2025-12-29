import Block1666 from "../modules/block1666";
import Header from "../modules/header";

export default {
	init() {
		new Block1666();
		new Header();
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
