
// homepage
$('.play-button').on('click', () => {
    console.log("ererere", $(window).outerWidth())
    if ($(window).outerWidth() < 767) {
        $('.fa-play-circle').fadeOut("slow")
        $('.header-text').fadeOut("slow")
        $('.header-image').fadeOut("slow", function() {
            var src = $('.vimeo-teaser').find("iframe").attr("src");
            $('.vimeo-teaser').find("iframe").attr("src", src + "&autoplay=1");
            setTimeout(function()  {
                $('.vimeo-wrapper').show()
                register_event()
            }, 140);
        });
    } else {
        $('.fa-play-circle').hide()
        $('.header-text').fadeOut("slow", function() {
            $('.header-img-container').css({"padding-bottom": '5%'})
            $(".header-image-overlay").animate({
                width: '100%',
                opacity: '.8'
            }, 1500, function() {
                $('.header-image > img').fadeOut("fast", function() {
                    $('.header-image-overlay').hide()
                    var src = $('.vimeo-teaser').find("iframe").attr("src");
                    $('.vimeo-teaser').find("iframe").attr("src", src + "&autoplay=1");
                    setTimeout(function()  {
                        $('.vimeo-wrapper').show()
                        register_event()
                    }, 140);
                })
            })
        });
    }
    
})

function register_event() {
    var iframe = document.getElementById('vimeo-teaser-iframe');
    var player = new Vimeo.Player(iframe);

    player.on('ended', function() {
        console.log("ended")
        if ($(window).outerWidth() < 767) {
            $('.vimeo-teaser').fadeOut(1300, function() {
                $('.fa-play-circle').fadeIn("slow")
                $('.header-text').fadeIn("slow")
                $('.header-image').fadeIn("slow")
            })
        } else {
            $('.vimeo-teaser').fadeOut(1300, function() {
                $('.header-image > img').fadeIn("slow", function() {
                    $(".header-image-overlay").css({width: '50%',opacity: '-.1'})
                    $('.header-text').fadeIn("slow", function() {
                        $('.header-image-playable').css({'margin-bottom': '0'});
                        $('.fa-play-circle').show()
                    })
                })
            })
        }
    });
}