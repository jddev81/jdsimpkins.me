

//Add background to navigation when scrolled down
let nav = document.getElementById('nav');
let scrolled = document.addEventListener("scroll", highlightNav);
function highlightNav() {
	if(window.pageYOffset > 100) {
		nav.classList.add('scrolledDown');
	} else {
		nav.classList.remove('scrolledDown');
	}
}
