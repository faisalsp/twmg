let isDown = false;
let nextIsDown = false;
let startX;
let nextStartX;
let scrollLeft;
let nextScrollLeft;
const slider = document.querySelector('.items');
const nextslider = document.querySelector('.next-items');

if (slider !== null) {
    slider.scrollLeft = 260;

    const end = () => {
        isDown = false;
        slider.classList.remove('active');
    }

    const nextend = () => {
        nextIsDown = false;
        nextslider.classList.remove('active');
    }

    const start = (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    }

    const nextstart = (e) => {
        nextIsDown = true;
        nextslider.classList.add('active');
        nextStartX = e.pageX || e.touches[0].pageX - nextslider.offsetLeft;
        nextScrollLeft = nextslider.scrollLeft;
    }

    const move = (e) => {
        if (!isDown) return;

        e.preventDefault();
        const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
        const dist = (x - startX);
        slider.scrollLeft = scrollLeft - dist;
    }

    const nextmove = (e) => {
        if (!nextIsDown) return;

        e.preventDefault();
        const nextx = e.pageX || e.touches[0].pageX - nextslider.offsetLeft;
        const nextdist = (nextx - nextStartX);
        nextslider.scrollLeft = nextScrollLeft - nextdist;
    }

    (() => {
        slider.addEventListener('mousedown', start);
        slider.addEventListener('touchstart', start);

        slider.addEventListener('mousemove', move);
        slider.addEventListener('touchmove', move);

        slider.addEventListener('mouseleave', end);
        slider.addEventListener('mouseup', end);
        slider.addEventListener('touchend', end);

        nextslider.addEventListener('mousedown', nextstart);
        nextslider.addEventListener('touchstart', nextstart);

        nextslider.addEventListener('mousemove', nextmove);
        nextslider.addEventListener('touchmove', nextmove);

        nextslider.addEventListener('mouseleave', nextend);
        nextslider.addEventListener('mouseup', nextend);
        nextslider.addEventListener('touchend', nextend);
    })();
}