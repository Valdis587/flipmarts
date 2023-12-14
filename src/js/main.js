$(document).ready(function(){ 

    $('.header__menu-category-box-button').click(function() {
        $('.header__menu-primary').removeClass('primary-open');
        $('.header__menu-category-nav').toggleClass('category-open');
        $('.header__menu-category-nav').addClass('category-open-mob');
    });
    $('.header__button-open').click(function(){
        $('.header__menu-category-nav').removeClass('category-open');
        $('.header__menu-category-nav').removeClass('category-open-mob');
        $('.header__menu-primary').addClass('primary-open');
    });
    $('.header__button-close').click(function() {
        $('.header__menu-category-nav').removeClass('category-open ');
        $('.header__menu-category-nav').removeClass('category-open-mob');
    });
    $('.header__button-close-primary').click(function() {
        $('.header__menu-primary').removeClass('primary-open');
    });

    $('.header__minicart-box').click(function() {
        $('.woocommerce-mini-cart').toggleClass('mini-cart-open');
    });

    $('.sub-list').click(function() {
        $('.sub-cat-list').toggleClass('cat-open');
    });


    	/* ---------------------------------------------------
		Back to Top
	-------------------------------------------------- */
		$(".footer__back").addClass("hidden-top");
        $(window).scroll(function () {
        if ($(this).scrollTop() === 0) {
            $(".footer__back").addClass("hidden-top")
        } else {
            $(".footer__back").removeClass("hidden-top")
        }
    });

    $('.footer__back').on("click", function () {
        $('body,html').animate({scrollTop:0}, 1200);
        return false;
    });
    
    $('.homeSlider__wrapper').owlCarousel({
        loop:true,
        nav:true,
        items:1,
        autoplay: true,
       autoplayTimeout:3000,
       autoplayHoverPause:false,
       dots: false,
    });

    $('.sidebar__reviews').owlCarousel({
        loop:true,
        nav:false,
        items:1,
        autoplay: true,
       autoplayTimeout:3000,
       autoplayHoverPause:false,
       dots: false,
    });

    $('.homeNews__slider').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav: false,
        responsive: {
            0: {
                    items: 1,
                    margin: 0
            },
            500: {
                    items: 2,
            },
            1000: {
                    items: 3
            },
            1200: {
                    items: 4
            },
            1500: {
                    items: 5
            }
    }
    });

    $(".homeFAQ__list li").each(function() {
        if($(this).index() > 0) {
            $(this).children(".homeFAQ__inner").css('display', 'none');
        }
        else {
            $(this).find(".homeFAQ__heading").addClass('active');
        }
        
        var ua = navigator.userAgent,
        event = (ua.match(/iPad/i)) ? "touchstart" : "click";
        $(this).children(".homeFAQ__heading").on(event, function() {
            $(this).addClass(function() {
                if($(this).hasClass("active")) return "";
                return "active";
            });
    
            $(this).siblings(".homeFAQ__inner").slideDown(350);
            $(this).parent().siblings("li").children(".homeFAQ__inner").slideUp(350);
            $(this).parent().siblings("li").find(".active").removeClass("active");
        });
    });

    $('.homeLogo__slider').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav: false,
        responsive: {
            0: {
                    items: 1,
                    margin: 0
            },
            500: {
                    items: 2,
            },
            1000: {
                    items: 3
            },
            1200: {
                    items: 4
            },
            1500: {
                    items: 5
            }
    }
    });

    $('.homeCategory__slider').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav: false,
        responsive: {
            0: {
                    items: 1,
                    margin: 0
            },
            500: {
                    items: 2,
            },
            1000: {
                    items: 3
            },
            1200: {
                    items: 4
            },
            1500: {
                    items: 5
            }
    }
    });

    $('.sidebar__carusel-product').owlCarousel({
        loop:true,
        nav:false,
        items:1,
        autoplay: true,
       autoplayTimeout:3000,
       autoplayHoverPause:false,
       dots: false,
       margin:10,
    });

    $('.home-carusel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav: false,
        responsive: {
            0: {
                    items: 1,
                    margin: 0
            },
            500: {
                    items: 2,
            },
            1000: {
                    items: 3
            },
            1200: {
                    items: 4
            },
            1500: {
                    items: 5
            }
    }
    });

});



