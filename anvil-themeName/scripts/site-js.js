jQuery(function($) {
    /*
     |----------------------------------------------------------------
     |  Mobile Trigger
     |  (targeting all .menu-trigger, so they're syncornized )
     |----------------------------------------------------------------
     */
    $('.fs-menu-trigger').click(function(e) {
        e.preventDefault();

        $('body').toggleClass('menu-opened');
        $('.main-menu').slideToggle(250);
    });

    /*
     |----------------------------------------------------------------
     |  Mobile Sub-menu Trigger
     |----------------------------------------------------------------
     */
    $(".menu-item-has-children > a")
        .append('<span class="mobile-submenu-trigger"><i class="fa fa-caret-down" aria-hidden="true"></i></span>');

    $(".mobile-submenu-trigger").click(function(e) {
        e.preventDefault();
        e.stopPropagation();

        $(this).toggleClass('opened');
        $(this).parent().siblings('.sub-menu').slideToggle();
    });

    /*
     |----------------------------------------------------------------
     |  Smooth Scrolling
     |  (targeting all [data-smooth-scroll])
     |----------------------------------------------------------------
     */
    $('.smooth-scroll, [data-smooth-scroll]').click(function(e) {
        var $target = $($(this).attr('data-smooth-scroll'));

        if (! $target.size()) {
            var href = $(this).attr('href').split("#");
            $target = $('#' + href[href.length - 1]);
        }

        if ($target.size()) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $target.offset().top - 50
            }, 250);
        }
    });

    /*
     |----------------------------------------------------------------
     |  Section Name
     |----------------------------------------------------------------
     */

})
