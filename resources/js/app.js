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

$('.mv-item').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    console.log("ERerer");
    $(this).addClass("active");
    $('.mv-cell').not($($(this).parent())).fadeOut("slow", () => {
        $(this).animate({
            width: "868px"
        }, 800, function() {
            $(this).find(".mv-text").fadeIn("slow", function() {});
            $('.close-button').show()
        });
    });

});

$(".close-button").on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $($(this).siblings()[1]).fadeOut(800, () => {
        var mv_item = $(this).parent().parent()
        $(mv_item).animate({
            width: "267px"
        }, 800, function() {
            $(mv_item).removeClass("active")
            $('.mv-cell').not($($(this).parent())).fadeIn("slow", () => {});
            $('.close-button').hide()
        });
    });
});

var draggie = new Draggabilly('.draggable', {});