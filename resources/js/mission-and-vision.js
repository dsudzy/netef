$('.mv-item-wrapper').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    if (window.innerWidth > 767) {
        $(this).css({ "overflow": "visible" });
        $($(this).find('.mv-text')).hide()
        $($(this).find('.mv-item')).css({ width: '20rem' })
        $($(this).find('.mv-item')).animate({
            width: '54rem'
        }, 1500, function() {
            $('.middle').css({ "margin": 0 })
            $($(this).find('.mv-text')).fadeIn("slow")
            $($(this).find('.mv-close')).show()
        });
    } else {
        $(this).css({ "overflow": "visible" });
        $($(this).find('.mv-item')).animate({
            height: '37rem'
        }, 1500, function() {
            $($(this).find('.mv-text')).fadeIn("slow")
            $($(this).find('.mv-text')).css({ "width": "auto" })
            $($(this).find('.mv-close')).show()
        });
    }
});

$(".mv-close").on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    if (window.innerWidth > 767) {
        $($(this).siblings()[1]).fadeOut("slow", () => {
            $(this).fadeOut("slow", () => {
                $($(this).closest('.mv-item')).animate({
                    width: '20rem'
                }, 1500, () => {
                    $('.mv-text').css({ 'width': '32rem;' })
                    $('.mv-text').show()
                    $('.mv-item-wrapper').css({ "overflow": "hidden" });
                    $('.mv-item').css({ "width": "54rem" });
                    if (window.innerWidth > 767) {
                        $('.middle').css({ "margin": '0 1rem' })
                    }
                });
            });
        });
    } else {
        $($(this).closest('.mv-item')).css({ "overflow": "hidden" });
        $($(this).closest('.mv-item')).animate({
            height: "18rem"
        }, 1500, () => {
            $($(this).siblings()[1]).fadeOut("slow")
            $(this).hide()
        })
    }
});