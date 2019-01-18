$(document).ready(function () {
    /**
     * Toggle Bar click event
     */
    $('.toggle-bar').on('click', function () {
        console.log('clicked');
        $('.nb-menu').toggleClass('fade-in open');
    });
});