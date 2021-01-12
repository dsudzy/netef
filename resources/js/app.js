require('./bootstrap');

$('.menu-icon').on('click', function(){
    $('.primary-nav').toggleClass("active");
    $('.nav-home').toggle();
});

$(window).on('resize', function() {
    if ($(window).outerWidth() > 767) {
        $('.primary-nav').removeClass("active");
        $('.nav-home').show();
    }
});