import router from "./util/Router";
import common from "./routes/common";

const routes = new router({
	common
});

document.addEventListener("DOMContentLoaded", function () {
	routes.loadEvents();
}, false);