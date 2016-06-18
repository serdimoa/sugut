function openPopup(el) {
    // get the class name in arguments here

    switch (el) {
        case 1:
        case "1":
            $.magnificPopup.open({
                items: {
                    src: '#small-dialog1'

                },
                type: 'inline'
            });
            break;
        case 2:
        case "2":
            $.magnificPopup.open({
                items: {
                    src: '#small-dialog'

                },
                type: 'inline'
            });
            break;

    }


}

(function ($) {
    $.fn.goTo = function () {
        $('html, body').animate({
            scrollTop: $(this).offset().top + 'px'
        }, 1500);
        return this; // for chaining...
    }
})(jQuery);

$(document).ready(function () {
    $('#header__phone').mask("+7 (999) 999-9999");
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image'
        , closeOnContentClick: true
        , mainClass: 'mfp-img-mobile'
        , image: {
            verticalFit: true
        }

    });
    $('.photogalery').magnificPopup({
        delegate: 'a'
        , type: 'image'
        , tLoading: 'Loading image #%curr%...'
        , mainClass: 'mfp-img-mobile'
        , gallery: {
            enabled: true
            , navigateByImgClick: true
            , preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        }
        , image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            , titleSrc: function (item) {
                return item.el.attr('title') + '';
            }
        }
    });


    if ($('.bank').length)
        $('.bank').mouseenter(function () {
            $(this).find(".toanim").slideUp();
        }).mouseleave(function () {
            $(this).find(".toanim").slideDown();
        });

    if ($('.toManager').length)
        $('.toManager').click(function (e) {
            e.preventDefault();
            $('#baner').goTo()

        });
    if ($('#scrollToabout').length)
        $('#scrollToabout').click(function (e) {
            e.preventDefault();
            if ($('#about__micro').length)
                $('#about__micro').goTo();
        });


    $('#headerForm').submit(function (e) {
        e.preventDefault();
        if (checkActive()) {
            var url = "/header_form";
            var $post = {};
            $post.form_name='форма с шапки';
            $post.page=window.location.href;
            $post.name = $(this).find($('#header__name')).val();
            $post.phone = $(this).find($('#header__phone')).val();
            console.log($post.phone);
            var xnr = $.ajax({
                type: "post",
                url: url,
                data: $post,
                success: function (data) {
                    openPopup(data);
                    xnr.abort();
                    return data;
                }
            });
        }
        return false;
    });

});

function checkActive() {
    if (Cookies.get('isActive') === undefined) {
        // Cookies.set('isActive', 'true', {expires: 1});
        openPopup(1);
        return true;
    } else {
        openPopup(2);
        return false;
    }
}