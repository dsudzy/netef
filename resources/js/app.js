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
    if ($(window).outerWidth() < 768) {
        $('.menu-bar').hide();
    } else {
        $('.menu-bar').show();
        $('.top-bar').hide();
    }
});
$(document).ready(function() {
    if ($(window).outerWidth() < 768) {
        $('.menu-bar').hide();
    } else {
        $('.menu-bar').show();
        $('.top-bar').hide();
    }
});


var draggie = new Draggabilly('.draggable', {});