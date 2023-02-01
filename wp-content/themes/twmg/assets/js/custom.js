document.addEventListener("DOMContentLoaded", function () {
	let scrollpos = document.documentElement.scrollTop;
	if (scrollpos > 50) {
		if (window.screen.width > 992) {
			document.querySelector('.home-page .main-header').classList.add('sticky-active');
		}
	} else {
		if (window.screen.width > 992) {
			document.querySelector('.home-page .main-header').classList.remove('sticky-active');
		}
	}
	
	heightChecker();

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

		heightChecker();
	});

});

function heightChecker(){
	let wrapperheight = jQuery(".home-page .why-section .why-wrapper").height();
	jQuery(".home-page .why-section .service-image img").css("height", wrapperheight + 140 + "px");
}