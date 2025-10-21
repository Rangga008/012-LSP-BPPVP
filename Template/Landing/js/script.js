window.addEventListener("scroll", function () {
	const header = document.querySelector(".layout2 .header");
	const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

	// Calculate opacity based on scroll position
	const maxScroll = 200; // Adjust this value to control how much scroll affects opacity
	const opacity = Math.max(0.5, 1 - scrollTop / maxScroll);

	header.style.opacity = opacity;
});
