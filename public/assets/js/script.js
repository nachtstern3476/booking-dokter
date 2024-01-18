document.addEventListener('DOMContentLoaded', function () {
	const menuToggle = document.querySelector(".menu-toggle input");
	const nav = document.querySelector("nav ul");

	menuToggle.addEventListener("click", function () {
		nav.classList.toggle("slide");
	});
});