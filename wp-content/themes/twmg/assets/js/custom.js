document.addEventListener("DOMContentLoaded", function () {
	let scrollpos = document.documentElement.scrollTop;
    if(scrollpos > 50) {
        if (window.screen.width > 992) {
            document.querySelector('.home-page .main-header').classList.add('sticky-active');
        }
    } else {
        if (window.screen.width > 992) {
            document.querySelector('.home-page .main-header').classList.remove('sticky-active');
        }
    }
    
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