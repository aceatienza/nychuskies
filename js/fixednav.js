/* Fix nav bar to the top of all pages
*/
var fixednav = document.querySelector('.navbar');
var origOffsetY = fixednav.offsetTop;

function onScroll(e) {
  window.scrollY >= origOffsetY ? fixednav.classList.add('fixed') : fixednav.classList.remove('fixed');
}

document.addEventListener('scroll', onScroll);