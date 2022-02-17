window.addEventListener('DOMContentLoaded', function () {
    function isEmpty(obj) {
        if (typeof obj == "number") return false;
        else if (typeof obj == "string") return obj.length === 0;
        else if (Array.isArray(obj)) return obj.length === 0;
        else if (typeof obj == "object")
            return obj == null || Object.keys(obj).length === 0;
        else if (typeof obj == "boolean") return false;
        else return !obj;
    }
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 150) {
            $('.main-nav').addClass('menu-shrink');
        } else {
            $('.main-nav').removeClass('menu-shrink');
        }
    });
    $('.mean-menu').meanmenu({
        meanScreenWidth: '991'
    });
    $('select').niceSelect();
    $(".banner-slider").owlCarousel({
        items: 1,
        rewind: true,
        loop: false,
        margin: 15,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        lazyLoad: true,
        navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
    });
    $(".testimonials-slider").owlCarousel({
        rewind: true,
        loop: false,
        center: false,
        margin: 15,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        lazyLoad: true,
        navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });
    $(".products-slider").owlCarousel({
        rewind: true,
        loop: false,
        center: false,
        margin: 15,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        lazyLoad: true,
        navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1199: {
                items: 5,
            }
        }
    });
    $(window).on('load', function () {
        jQuery('.loader').fadeOut(500);
    });
    $(window).on('scroll', function () {
        let scrolled = $(window).scrollTop();
        if (scrolled > 100) $('.go-top').addClass('active');
        if (scrolled < 100) $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function () {
        $('html, body').animate({
            scrollTop: '0'
        }, 500);
    });
});