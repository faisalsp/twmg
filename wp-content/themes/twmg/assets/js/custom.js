document.addEventListener("DOMContentLoaded", function () {
	// Init Tooltip
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	if (jQuery("body").hasClass("blog-page")) {
		jQuery('.card-article .slider').slick({
			dots: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			prevArrow: '<button class="prev-arrow"><i class="fa-solid fa-angle-left"></i></button>',
			nextArrow: '<button class="next-arrow"><i class="fa-solid fa-angle-right"></i></button>',
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}

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

	var last = 0;
	initHeight();
	stickyImage(last);


	window.addEventListener('scroll', function (event) {
		if (window.scrollY > 50) {
			if (window.screen.width > 992) {
				jQuery('.home-page .main-header').addClass('sticky-active');
			}
		} else {
			if (window.screen.width > 992) {
				jQuery('.home-page .main-header').removeClass('sticky-active');
			}
		}

		stickyImage(last);
		last = window.scrollY;
	});

	window.addEventListener("resize", function () {
		initHeight();
	}, true);

});

function initHeight() {
	// let whymain = ".home-page .why-section .why-wrapper";
	// let whyimage = ".home-page .why-section .service-image img";
	// heightChecker(whymain, whyimage, 160);

	let homemain = ".home-page .letter-section";
	let homeimage = ".home-page .letter-section .person-image img";
	heightChecker(homemain, homeimage, 100);

	let lettermain = ".about-us-page .letter-section";
	let letterimage = ".about-us-page .letter-section .person-image img";
	heightChecker(lettermain, letterimage, 100);
}

function heightChecker(copy, clone, offset) {
	let wrapperheight = jQuery(copy).outerHeight();
	jQuery(clone).css("height", wrapperheight + offset + "px");
}

function stickyImage(last) {
	var curr = parseInt(window.scrollY);
	
	jQuery(".step-content").each(function (index) {
		let stepcontent = jQuery(this).offset().top;
		if (curr > last ){
			let stepcontent = jQuery(this).offset().top - 300;
			if (parseInt(window.scrollY) > parseInt(stepcontent) && parseInt(window.scrollY) < parseInt(stepcontent) + 100) {
				jQuery(".step-image .image-content").not(".image-" + index).removeClass("active");
				jQuery(".step-image .image-content.image-" + index).addClass("active");
			}
		} else {
			if (parseInt(window.scrollY) > parseInt(stepcontent) && parseInt(window.scrollY) < parseInt(stepcontent) + 300) {
				jQuery(".step-image .image-content").not(".image-" + index).removeClass("active");
				jQuery(".step-image .image-content.image-" + index).addClass("active");
			}
		}
		
	});
}