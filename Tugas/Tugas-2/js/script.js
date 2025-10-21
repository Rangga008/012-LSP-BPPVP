window.addEventListener("scroll", function () {
	const header = document.querySelector(".layout2 .header");
	const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

	// Calculate opacity based on scroll position
	const maxScroll = 200; // Adjust this value to control how much scroll affects opacity
	const opacity = Math.max(0.5, 1 - scrollTop / maxScroll);

	header.style.opacity = opacity;
});

window.addEventListener("load", function () {
	const header = document.querySelector(".layout2 .header");
	header.style.transition = "opacity 0.5s ease-in-out";
});

window.addEventListener("DOMContentLoaded", function () {
	const backButton = document.querySelector(".back-button");
	if (backButton) {
		backButton.addEventListener("click", function () {
			history.back();
		});
	}
});

window.addEventListener("DOMContentLoaded", function () {
	const menuToggle = document.querySelector(".menu-toggle");
	const nav = document.querySelector(".layout2 .header nav");
	if (menuToggle && nav) {
		menuToggle.addEventListener("click", function () {
			nav.classList.toggle("active");
		});
	}
});

window.addEventListener("resize", function () {
	const nav = document.querySelector(".layout2 .header nav");
	if (window.innerWidth > 768) {
		nav.classList.remove("active");
	}
});

window.addEventListener("DOMContentLoaded", function () {
	const navLinks = document.querySelectorAll(".layout2 .header nav a");
	navLinks.forEach((link) => {
		link.addEventListener("click", function () {
			const nav = document.querySelector(".layout2 .header nav");
			if (nav.classList.contains("active")) {
				nav.classList.remove("active");
			}
		});
	});
});

window.addEventListener("scroll", function () {
	const backToTopButton = document.getElementById("back-to-top");
	if (window.pageYOffset > 300) {
		backToTopButton.style.display = "block";
	} else {
		backToTopButton.style.display = "none";
	}
});
document.getElementById("back-to-top").addEventListener("click", function () {
	window.scrollTo({ top: 0, behavior: "smooth" });
});

window.addEventListener("load", function () {
	const preloader = document.getElementById("preloader");
	preloader.style.display = "none";
});
window.addEventListener("DOMContentLoaded", function () {
	const preloader = document.getElementById("preloader");
	preloader.style.display = "none";
});

window.addEventListener("scroll", function () {
	const header = document.querySelector(".layout2 .header");
	const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if (scrollTop > 50) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	}
});
window.addEventListener("DOMContentLoaded", function () {
	const header = document.querySelector(".layout2 .header");
	header.classList.remove("scrolled");
});

window.addEventListener("DOMContentLoaded", function () {
	const navLinks = document.querySelectorAll(".layout2 .header nav a");
	const currentUrl = window.location.href;
	navLinks.forEach((link) => {
		if (link.href === currentUrl) {
			link.classList.add("active");
		} else {
			link.classList.remove("active");
		}
	});
});
window.addEventListener("resize", function () {
	const header = document.querySelector(".layout2 .header");
	if (window.innerWidth > 768) {
		header.classList.remove("scrolled");
	}
});
window.addEventListener("load", function () {
	const header = document.querySelector(".layout2 .header");
	header.classList.remove("scrolled");
});

window.addEventListener("resize", function () {
	const backToTopButton = document.getElementById("back-to-top");
	if (window.innerWidth < 500) {
		backToTopButton.style.right = "10px";
	} else {
		backToTopButton.style.right = "30px";
	}
});
window.addEventListener("DOMContentLoaded", function () {
	const backToTopButton = document.getElementById("back-to-top");
	if (window.innerWidth < 500) {
		backToTopButton.style.right = "10px";
	} else {
		backToTopButton.style.right = "30px";
	}
});

window.addEventListener("scroll", function () {
	const header = document.querySelector(".layout2 .header");
	const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if (scrollTop > 100) {
		header.classList.add("elevated");
	} else {
		header.classList.remove("elevated");
	}
});
window.addEventListener("DOMContentLoaded", function () {
	const header = document.querySelector(".layout2 .header");
	header.classList.remove("elevated");
});
window.addEventListener("load", function () {
	const header = document.querySelector(".layout2 .header");
	header.classList.remove("elevated");
});
window.addEventListener("resize", function () {
	const header = document.querySelector(".layout2 .header");
	if (window.innerWidth > 768) {
		header.classList.remove("elevated");
	}
});
window.addEventListener("DOMContentLoaded", function () {
	const header = document.querySelector(".layout2 .header");
	header.classList.remove("elevated");
});
