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
	initHeight();
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

	window.addEventListener("resize", function () {
		initHeight();
	}, true);

	// Form
	const progress = (value) => {
		document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
	}

	let step = document.getElementsByClassName('step');
	let prevBtn = document.getElementById('prev-btn');
	let nextBtn = document.getElementById('next-btn');
	let submitBtn = document.getElementById('submit-btn');
	let form = document.getElementsByTagName('form')[0];

	form.onsubmit = () => { return false }

	let current_step = 0;
	let stepCount = 3
	step[current_step].classList.add('d-block');
	if (current_step == 0) {
		prevBtn.classList.add('d-none');
		submitBtn.classList.add('d-none');
		nextBtn.classList.add('d-inline-block');
	}


	nextBtn.addEventListener('click', () => {
		current_step++;
		let previous_step = current_step - 1;
		if ((current_step > 0) && (current_step <= stepCount)) {
			prevBtn.classList.remove('d-none');
			prevBtn.classList.add('d-inline-block');
			step[current_step].classList.remove('d-none');
			step[current_step].classList.add('d-block');
			step[previous_step].classList.remove('d-block');
			step[previous_step].classList.add('d-none');
			if (current_step == stepCount) {
				submitBtn.classList.remove('d-none');
				submitBtn.classList.add('d-inline-block');
				prevBtn.classList.add('d-none');
				nextBtn.classList.remove('d-inline-block');
				nextBtn.classList.add('d-none');
			}
		} else {
			if (current_step > stepCount) {
				form.onsubmit = () => { return true }
			}
		}
		progress((100 / stepCount) * current_step);
	});

	prevBtn.addEventListener('click', () => {
		if (current_step > 0) {
			current_step--;
			let previous_step = current_step + 1;
			prevBtn.classList.add('d-none');
			prevBtn.classList.add('d-inline-block');
			step[current_step].classList.remove('d-none');
			step[current_step].classList.add('d-block')
			step[previous_step].classList.remove('d-block');
			step[previous_step].classList.add('d-none');
			if (current_step < stepCount) {
				submitBtn.classList.remove('d-inline-block');
				submitBtn.classList.add('d-none');
				nextBtn.classList.remove('d-none');
				nextBtn.classList.add('d-inline-block');
				prevBtn.classList.remove('d-none');
				prevBtn.classList.add('d-inline-block');
			}
		}

		if (current_step == 0) {
			prevBtn.classList.remove('d-inline-block');
			prevBtn.classList.add('d-none');
		}
		progress((100 / stepCount) * current_step);
	});

});

function initHeight() {
	let homemain = ".letter-section";
	let homeimage = ".letter-section .person-image img";
	heightChecker(homemain, homeimage, 70);
}

function heightChecker(copy, clone, offset) {
	if (document.querySelector(copy) !== null) {
		let wrapperheight = document.querySelector(copy).offsetHeight;
		document.querySelector(clone).style.height = wrapperheight + offset + "px";
	}
}

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