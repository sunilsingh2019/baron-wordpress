var $ = jQuery;
var win = $(window);

'use strict';

document.addEventListener('DOMContentLoaded', function () {
    headerSticky()
    homebannerSlider()
    submenu()
    accordion()
});

//function called on window resize
win.on('resize', function () {});
win.on('load', function () {
    parallaxImg()
});


/*****  Declare your functions here  ********/
function headerSticky() {
    if ($(window).scrollTop() > 100) {
        $('.header').addClass('header-sticky')
    } else {
        $('.header').removeClass('header-sticky')
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.header').addClass('header-sticky')
        } else {
            $('.header').removeClass('header-sticky')
        }
    })
}

function homebannerSlider() {
    $('.hmbanner__slider').slick({
        fade: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        arrows: true,
        dots: false,
        responsive: [{
            breakpoint: 991,
            settings: {
                dots: false
            }
        }]
    });
}

function submenu() {
    $('.submenu li a').each(function () {
        $(this).attr('name', $(this).text())
    })

    $('.header__btn-menu').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('html').removeClass('sidemenu-open');
        } else {
            $(this).addClass('active')
            $('html').addClass('sidemenu-open');
        }
    })

    $('.has-submenu').each(function () {
        if ($(window).width() < 992) {
            return;
        }
        const submenu = $(this).children('.submenu');
        submenu.fadeIn(200, function () {
            var offLeft = submenu.offset().left + submenu.width();

            if (offLeft > $(window).width()) {
                submenu.addClass('align-left')
            }
        });
    });

    $('.has-submenu > a').click(function (e) {
        const submenu = $(this).siblings('.submenu');

        if (submenu.is(':visible')) {
            submenu.slideUp()
        } else {
            e.preventDefault();

            submenu.slideDown()
            $(this).parents('.has-submenu').siblings().find('.submenu').slideUp()
        }
    })

    $(document).mouseup(function (e) {
        var container = $('.submenu:visible');

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.slideUp();
        }
    });
}

function parallaxImg() {
    $('.img-parallax').each(function () {
        var img = $(this);
        var imgParent = $(this).parent();

        function parallaxImg() {
            var speed = img.data('speed');
            var imgY = imgParent.offset().top;
            var winY = $(this).scrollTop();
            var winH = $(this).height();
            var parentH = imgParent.innerHeight();


            // The next pixel to show on screen      
            var winBottom = winY + winH;

            // If block is shown on screen
            if (winBottom > imgY && winY < imgY + parentH) {
                // Number of pixels shown after block appear
                var imgBottom = ((winBottom - imgY) * speed);
                // Max number of pixels until block disappear
                var imgTop = winH + parentH;
                // Porcentage between start showing until disappearing
                var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
            }
            img.css({
                top: imgPercent + '%',
                transform: 'translate(0%, -' + imgPercent + '%)'
            });
        }
        $(document).on({
            scroll: function () {
                parallaxImg();
            },
            ready: function () {
                parallaxImg();
            }
        });
    });
}

function accordion() {

    $(document).ready(function () {
        $(".accordion-items").on("click", ".accordion-heading", function () {
            $(this).toggleClass("active").next().slideToggle();
    
            $(".accordion-content").not($(this).next()).slideUp(300);
    
            $(this).siblings().removeClass("active");
        });
    });
}