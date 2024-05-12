function menuToggle() {
	document.getElementById("navmenu").classList.toggle(`lt-md:important:top-[-500px]`);
	document.getElementById("burger-menu-button-open").classList.toggle(`hidden`);
	document.getElementById("burger-menu-button-close").classList.toggle(`hidden`);
}

document.querySelectorAll("#navmenu>li>a").forEach(elem => {
	elem.addEventListener('click', menuToggle)
})