(function() {
  window.addEventListener('DOMContentLoaded', (e) => {
    const hamburgerMenu = document.querySelector('.navbar-burger.burger');
    const nav = document.querySelector('#mainNav');

    hamburgerMenu.addEventListener('click', (e) => {
      if (hamburgerMenu.classList.contains('is-active')) {
        hamburgerMenu.classList.remove('is-active');
        nav.classList.remove('is-active');
      } else {
        hamburgerMenu.classList.add('is-active');
        nav.classList.add('is-active');
      }
    });
  });
}());
