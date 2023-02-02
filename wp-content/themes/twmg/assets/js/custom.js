document.addEventListener("DOMContentLoaded", function () {
	let scrollpos = document.documentElement.scrollTop;
	if (scrollpos > 50) {
		if (window.screen.width > 992) {
			jQuery('.home-page .main-header').addClass('sticky-active');
		}
	} else {
		if (window.screen.width > 992) {
			jQuery('.home-page .main-header').removeClass('sticky-active');
		}
	}

	initHeight();

	window.addEventListener('scroll', function () {
		if (window.scrollY > 50) {
			if (window.screen.width > 992) {
				jQuery('.home-page .main-header').addClass('sticky-active');
			}
		} else {
			if (window.screen.width > 992) {
				jQuery('.home-page .main-header').removeClass('sticky-active');
			}
		}
	});

	window.addEventListener("resize", function () {
		initHeight();
	}, true);

});

function initHeight() {
	let whymain = ".home-page .why-section .why-wrapper";
	let whyimage = ".home-page .why-section .service-image img";
	heightChecker(whymain, whyimage, 160);

	let lettermain = ".about-us-page .letter-section";
	let letterimage = ".about-us-page .letter-section .person-image img";
	heightChecker(lettermain, letterimage, 100);
}

function heightChecker(copy, clone, offset) {
	let wrapperheight = jQuery(copy).outerHeight();
	jQuery(clone).css("height", wrapperheight + offset + "px");
}