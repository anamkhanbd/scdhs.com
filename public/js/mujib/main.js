(function($) {
    "use strict";

    $('.drop-down > a').click(function(e) {
        var elem = e.target;
        console.log(elem);
        if ($(e.target).is("a")) {
            location.href = this.href;
        }

    });

    // Preloader (if the #preloader div exists)
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function() {
                $(this).remove();
            });
        }
    });

    // Back to top button
    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Initiate the wowjs animation library
    new WOW().init();

    // Header scroll class
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
    }

    // Smooth scroll for the navigation and links with .scrollto classes
    $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-scrolled')) {
                        top_space = top_space - 20;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.main-nav, .mobile-nav').length) {
                    $('.main-nav .active, .mobile-nav .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                    $('.mobile-nav-overly').fadeOut();
                }
                return false;
            }
        }
    });

    // Navigation active state on scroll
    var text = $('.menu').attr("data-value");
    console.log(text);
    var main_nav = $('.main-nav, .mobile-nav');
    var i = 0;
    $(".drop-down")
        .mouseover(function() {
            i += 1;
            main_nav.find("li").removeClass("active");
        })
        .mouseout(function() {
            if (text == "/") {
                $('#mujib').addClass('active')
            }
            if (text == "timeline") {
                $('#mujib').addClass('active')
            }
            if (text == "speeches") {
                $('#mujib').addClass('active')
            }
            if (text == "recognition") {
                $('#mujib').addClass('active')
            }
            if (text == "photo-archive") {
                $('#mujib').addClass('active')
            }
            if (text == "graphic-novel") {
                $('#mujib').addClass('active')
            }
            if (text == "celebration") {
                $('#celebration').addClass('active')
            }
            if (text == "stamp") {
                $('#celebration').addClass('active')
            }
            if (text == "contribute") {
                $('#celebration').addClass('active')
            }
            if (text == "resources") {
                $('#resources').addClass('active')
            }
            if (text == "book-publications") {
                $('#resources').addClass('active')
            }
            if (text == "documentaries") {
                $('#resources').addClass('active')
            }
            if (text == "letters") {
                $('#resources').addClass('active')
            }
            if (text == "events") {
                $('#events').addClass('active')
            }
            if (text == "committee") {
                $('#committee').addClass('active')
            }
            if (text == "media-news") {
                $('#media').addClass('active')
            }
            if (text == "logo") {
                $('#logo-com').addClass('active')
            }
            if (text == "contact-us") {
                $('#contact-us').addClass('active')
            }
            if (text == "mujib") {
                $('#mujib').addClass('active')
            }

        });

    var data = $('.menu').attr("data-value");
    // alert(data);
    if (data == "/") {
        $('#mujib').addClass('active')
    }
    if (data == "timeline") {
        $('#mujib').addClass('active')
    }
    if (data == "speeches") {
        $('#mujib').addClass('active')
    }
    if (data == "recognition") {
        $('#mujib').addClass('active')
    }
    if (data == "photo-archive") {
        $('#mujib').addClass('active')
    }
    if (data == "graphic-novel") {
        $('#mujib').addClass('active')
    }
    if (data == "celebration") {
        $('#celebration').addClass('active')
    }
    if (data == "stamp") {
        $('#celebration').addClass('active')
    }
    if (data == "contribute") {
        $('#celebration').addClass('active')
    }
    if (data == "resources") {
        $('#resources').addClass('active')
    }
    if (data == "book-publications") {
        $('#resources').addClass('active')
    }
    if (data == "documentaries") {
        $('#resources').addClass('active')
    }
    if (data == "letters") {
        $('#resources').addClass('active')
    }
    if (data == "events") {
        $('#events').addClass('active')
    }
    if (data == "committee") {
        $('#committee').addClass('active')
    }
    if (data == "media-news") {
        $('#media').addClass('active')
    }
    if (data == "logo") {
        $('#logo-com').addClass('active')
    }
    if (data == "contact-us") {
        $('#contact-us').addClass('active')
    }
    if (data == "mujib") {
        $('#mujib').addClass('active')
    }

    //  isotope and filter
    $(window).on('load', function() {
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item'
        });
        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({ filter: $(this).data('filter') });
        });
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        dots: true,
        loop: true,
    });

    $(document).ready(function() {
        $('html, body').hide();
        if (window.location.hash) {
            setTimeout(function() {
                $('html, body').scrollTop(0).show();
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top
                }, 1000)
            }, 0);
        } else {
            $('html, body').show();
        }
    });

})(jQuery);