document.addEventListener("DOMContentLoaded", function () {
	let scrollpos = document.documentElement.scrollTop;
	if (scrollpos > 50) {
		if (window.screen.width > 992) {
			document.querySelector('header').classList.add('sticky-active');
		}
	} else {
		if (window.screen.width > 992) {
			document.querySelector('header').classList.remove('sticky-active');
		}
	}

	document.querySelector(".navbar-toggler").addEventListener('click', function () {
		if (window.screen.width < 992) {
			document.querySelector("nav").classList.toggle("show");
		}
	});

	var last = 0;
	stickyImage(last);

	window.addEventListener('scroll', function (event) {
		if (window.scrollY > 50) {
			if (window.screen.width > 992) {
				document.querySelector('header').classList.add('sticky-active');
			}
		} else {
			if (window.screen.width > 992) {
				document.querySelector('header').classList.remove('sticky-active');
			}
		}

		stickyImage(last);
		last = window.scrollY;
	});

});


function stickyImage(last) {
	var curr = parseInt(window.scrollY);
	var stickyelement = document.querySelectorAll(".process-list li");
	stickyelement.forEach((el, index) => {
		let stepcontent = el.offsetTop;
		if (curr > last) {
			// scrolldown
			let stepcontent = el.offsetTop - 550;
			if (curr > stepcontent && curr < stepcontent + 100) {
				removeStickyClass(index);
			}
		} else {
			// scrollup
			if (curr > stepcontent && curr < stepcontent + 300) {
				removeStickyClass(index);
			}
		}
	});
}

function removeStickyClass(index) {
	var imagecontent = document.querySelectorAll('.step-image .image-content');
    imagecontent.forEach((el, index) => {
		el.classList.remove('active');
	});

	document.querySelector(".step-image .image-content.image-" + index).classList.add("active");
}