window.addEventListener("DOMContentLoaded", function () {
	const form = document.querySelector("form");
	if (form) {
		form.addEventListener("submit", function (event) {
			const email = form.email.value.trim();
			const password = form.password.value.trim();
			let valid = true;
			let errorMessage = "";
			if (email === "") {
				valid = false;
				errorMessage += "Email tidak boleh kosong.\n";
			}
			if (password === "") {
				valid = false;
				errorMessage += "Password tidak boleh kosong.\n";
			}
			if (!valid) {
				event.preventDefault();
				alert(errorMessage);
			}
		});
	}
});

window.addEventListener("DOMContentLoaded", function () {
	const loginForm = document.querySelector("form");
	if (loginForm) {
		loginForm.addEventListener("submit", function (event) {
			const username = loginForm.username.value.trim();
			const password = loginForm.password.value.trim();
			let valid = true;
			let errorMessage = "";
			if (username === "") {
				valid = false;
				errorMessage += "Username tidak boleh kosong.\n";
			}
			if (password === "") {
				valid = false;
				errorMessage += "Password tidak boleh kosong.\n";
			}
			if (!valid) {
				event.preventDefault();
				alert(errorMessage);
			}
		});
	}
});

window.addEventListener("DOMContentLoaded", function () {
	const registerForm = document.querySelector("form");
	if (registerForm) {
		registerForm.addEventListener("submit", function (event) {
			const username = registerForm.username.value.trim();
			const password = registerForm.password.value.trim();
			const confirmPassword = registerForm.confirm_password.value.trim();
			let valid = true;
			let errorMessage = "";
			if (username === "") {
				valid = false;
				errorMessage += "Username tidak boleh kosong.\n";
			}
			if (password === "") {
				valid = false;
				errorMessage += "Password tidak boleh kosong.\n";
			}
			if (password !== confirmPassword) {
				valid = false;
				errorMessage += "Password dan konfirmasi password tidak sesuai.\n";
			}
			if (!valid) {
				event.preventDefault();
				alert(errorMessage);
			}
		});
	}
});
