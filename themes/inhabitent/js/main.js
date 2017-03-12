(function ($) {
    $('.fa-search').on('click', function () {
        $('.search-field').animate({
            width: 'toggle'
        }, 500);
    });

    $('.search-field').on('blur', function () {
        $('.search-field').animate({
            width: 'toggle'
        }, 500);
    });
})(jQuery);


(function ($) {
    $(window).scroll(function (event) {
        event.preventDefault();
        var scroll = $(window).scrollTop();
        if (scroll >= 750) {
            $('.main-navigation').removeClass('reverse-navigation');
        } else {
            $('.main-navigation').addClass('reverse-navigation');
        }
    });
})(jQuery);