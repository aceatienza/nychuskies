/* Fix nav bar to the top of all pages
*/
var fixednav = document.querySelector('.navbar');
var carouselHeight = (document.getElementById("myCarousel").offsetHeight) + 10; // should be (document.getElementById("thin-strip").offsetHeight) // but doesn't work properly

function onScroll(e) {
  window.scrollY >= carouselHeight ? fixednav.classList.add('fixed') : fixednav.classList.remove('fixed');
}

document.addEventListener('scroll', onScroll);