require('./bootstrap');
var Draggabilly = require('draggabilly');


$('.menu-icon').on('click', function() {
    $('.primary-nav').toggleClass("active");
    $('.nav-home').toggle();
});

$(window).on('resize', function() {
    if ($(window).outerWidth() > 767) {
        $('.primary-nav').removeClass("active");
        $('.nav-home').show();
    }
    // if ($(window).outerWidth() < 963) {
    //     $('.title-bar').css({ "display": "flex" });
    //     $('.top-bar').css({ "display": "none" });
    // } else {
    //     $('.title-bar').css({ "display": "none" });
    //     $('.top-bar').css({ "display": "flex" });
    // }


});

var draggie = new Draggabilly('.draggable', {});