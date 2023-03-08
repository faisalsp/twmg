let isDown = false;
let nextIsDown = false;
let startX;
let nextStartX;
let scrollLeft;
let nextScrollLeft;
const slider = document.querySelector('.items');
const nextslider = document.querySelector('.next-items');

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
    console.log(slider.scrollLeft);
}

const nextmove = (e) => {
    if (!nextIsDown) return;

    e.preventDefault();
    const nextx = e.pageX || e.touches[0].pageX - nextslider.offsetLeft;
    const nextdist = (nextx - nextStartX);
    nextslider.scrollLeft = nextScrollLeft - nextdist;
}

(() => {
    slider.addEventListener('mousedown', start, {passive: true});
    slider.addEventListener('touchstart', start, {passive: true});

    slider.addEventListener('mousemove', move, {passive: true});
    slider.addEventListener('touchmove', move, {passive: true});

    slider.addEventListener('mouseleave', end, {passive: true});
    slider.addEventListener('mouseup', end, {passive: true});
    slider.addEventListener('touchend', end, {passive: true});

    nextslider.addEventListener('mousedown', nextstart, {passive: true});
    nextslider.addEventListener('touchstart', nextstart, {passive: true});

    nextslider.addEventListener('mousemove', nextmove, {passive: true});
    nextslider.addEventListener('touchmove', nextmove, {passive: true});

    nextslider.addEventListener('mouseleave', nextend, {passive: true});
    nextslider.addEventListener('mouseup', nextend, {passive: true});
    nextslider.addEventListener('touchend', nextend, {passive: true});
})();
