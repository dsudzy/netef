require('./bootstrap');
var Draggabilly = require('draggabilly');

$('.menu-icon').on('click', function() {
    $('.primary-nav').toggleClass("active");
    $('.nav-home').toggle();
    if ($('.primary-nav.active').length) {
        $('.mobile-white-logo').show()
        $('.mobile-black-logo').hide()
    } else {
        $('.mobile-white-logo').hide()
        $('.mobile-black-logo').show()
    }
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
jQuery(function() {
    if ($(window).outerWidth() < 768) {
        $('.menu-bar').hide();
    } else {
        $('.menu-bar').show();
        $('.top-bar').hide();
    }

    if (window.page) {
        $('.menu-item[data-page-name="' + window.page + '"]').addClass('active');
    }
});

$('.mv-item-wrapper').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).css({ "overflow": "visible" });
    if (window.innerWidth > 767) {
        $('.middle').css({ "margin": 0 })
    }
    $($(this).find('.mv-close')).show()
});

$(".mv-close").on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $('.mv-item-wrapper').css({ "overflow": "hidden" });
    if (window.innerWidth > 767) {
        $('.middle').css({ "margin": '0 1rem' })
    }
    $(this).hide()
});

var draggie = new Draggabilly('.draggable', {});