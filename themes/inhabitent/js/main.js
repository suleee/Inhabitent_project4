(function ($) {
    $('.fa-search').on('click', function () {
        $('span .serach-header').animate({
            width: 'toggle'
        }, 500);
    });

    $('span .serach-header').on('blur', function () {
        $('span .serach-header').animate({
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