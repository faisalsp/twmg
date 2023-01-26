document.addEventListener("DOMContentLoaded", function () {
	window.addEventListener('scroll', function () {
		if (window.scrollY > 50) {
			if (window.screen.width > 992) {
				document.querySelector('.home-page .main-header').classList.add('sticky-active');
			}
		} else {
			if (window.screen.width > 992) {
				document.querySelector('.home-page .main-header').classList.remove('sticky-active');
			}
		}
	});
}); 