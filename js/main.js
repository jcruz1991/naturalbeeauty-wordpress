$(document).ready(function () {

    const toggleBar = document.querySelector('.toggle-bar');
    const nav = document.getElementById('nb-site-navigation');

    //Toggle Nav
    toggleBar.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        toggleBar.classList.toggle('toggle');
    });
});