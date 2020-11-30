(function($) {

    /* Modal header */
    var modal__box = $('.modal__box');
    var modal__open = $('.modal__open');
    var modal__close = $('.modal__close');
    modal__open.click(function() {
        var modal__box_id = $(this).attr('data-modal-button');
        $("#" + modal__box_id).show();
    });
    modal__close.click(function() {
        modal__box.hide();
    });
    $(window).on('click', function(e) {
        if ($(e.target).is('.modal__box')) {
            modal__box.hide();
        }
    });

    /** Convert Metaslider to Owl Carousel Lazy Load  */
    $('.ml-slider.slide-home .slides').addClass('owl-carousel owl-theme');
    $('.ml-slider.slide-home .owl-carousel li').addClass('item').css('display', 'initial');
    $('.ml-slider.slide-home .owl-carousel .item img').addClass('owl-lazy');
    $('.ml-slider.slide-home .owl-carousel .owl-lazy').each(function() {
        $(this).attr('data-src', $(this).attr('src')).removeAttr('src').removeAttr('width').removeAttr('height');
    });

    $('.ml-slider.slide-home .owl-carousel').owlCarousel({
        margin: 0,
        loop: false,
        lazyLoad: true,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: false,
            },
            999: {
                items: 1,
                dots: true,
            }
        },
        navText: [
            // '<i class="fa fa-angle-left"></i>',
            // '<i class="fa fa-angle-right"></i>',
            '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#fff" width="16" height="16" viewBox="0 0 32 32"><path d="M8.409 14.591c-0.778 0.778-0.776 2.041 0 2.817l14.003 14.003c0.786 0.786 2.049 0.782 2.829 0.001 0.787-0.787 0.781-2.048-0.001-2.83l-12.583-12.583 12.583-12.583c0.787-0.786 0.782-2.049 0.001-2.829-0.786-0.787-2.048-0.781-2.829 0.001l-14.003 14.003z"></path></svg>',
            '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#fff" width="16" height="16" viewBox="0 0 32 32"><path d="M24.42 17.409c0.778-0.778 0.776-2.041 0-2.817l-14.003-14.003c-0.786-0.786-2.049-0.782-2.829-0.001-0.787 0.787-0.781 2.048 0.001 2.83l12.583 12.583-12.583 12.583c-0.787 0.786-0.782 2.049-0.001 2.829 0.786 0.787 2.048 0.781 2.829-0.001l14.003-14.003z"></path></svg>',
        ],
        // autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        // smartSpeed: 1900,
    });

    $('.sec21_col1_row1 img')
        .add('.sec21_col2_row2 img')
        // .add('.archive .list_post_cat img:not(:eq(0))')
        .add('.entry-content img:not(:eq(0))')
        .add('.posts_related img')
        .each(function() {
            $(this)
                .addClass('lazy')
                .attr('data-src', $(this).attr('src'))
                .attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7')
                .removeAttr('srcset')
                .removeAttr('sizes');
        });

    /** 5 danh muc Owl Carousel Lazy Load  */
    $('.sec15_owl.owl-carousel').owlCarousel({
        margin: 5,
        lazyLoad: true,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                loop: true,
                items: 3,
            },
            999: {
                loop: false,
                items: 5,
                dots: false,
            }
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        // autoplay: true,
        autoplayTimeout: 5000,
    });

    /**
     * testimonials_owl
     */
    $('.testimonials_owl.owl-carousel').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        lazyLoad: true,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            640: {
                items: 1,
            }
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        // autoplay: true,
        autoplayTimeout: 5000,
    });

    /* add class for div parent of iframe in single post|page */
    $('iframe[src*=youtube]').parent().addClass('iframe_parent');
    /* Remove a[href=#] on .main-menu-top */
    $('.main-menu-top a').each(function(index, el) {
        if ($(this).attr('href') == "#") {
            $(this).removeAttr('href');
        }
    });
})($);

// Lazy Load images
document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages = document.querySelectorAll("img.lazy");
    var lazyloadThrottleTimeout;

    function lazyload() {
        if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }
        lazyloadThrottleTimeout = setTimeout(function() {
            var scrollTop = window.pageYOffset;
            lazyloadImages.forEach(function(img) {
                if ( img.offsetTop < (window.innerHeight + scrollTop) ) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                }
            });
            if (lazyloadImages.length == 0) {
                document.removeEventListener("scroll", lazyload);
                window.removeEventListener("resize", lazyload);
                window.removeEventListener("orientationChange", lazyload);
            }
        }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
});

/* Add rel="noopener" && class "external" for external link */
var links = document.getElementsByTagName('a'),
    i, length;
for (i = 0, length = links.length; i < length; i++) {
    var internal = location.host.replace("www.", "");
    internal = new RegExp(internal, "i");
    var link_host = links[i].host,
        link_href     = links[i].getAttribute("href");
    link_rel      = links[i].getAttribute("rel");
    link_class    = links[i].getAttribute("class");
    /* Add rel="noopener" && class "external" for external link */
    if ( !internal.test(link_host)
        && (link_href != null)
        && (link_href.substring(0, 1) != '#')
        && (link_href.substring(0, 4) != 'tel:')
        && (link_href.substring(0, 7) != 'mailto:') ) {

        links[i].setAttribute('target', '_blank');

        if (link_class) {
            links[i].setAttribute("class", 'external ' + link_class);
        } else {
            links[i].setAttribute("class", 'external');
        }

        links[i].setAttribute("rel", 'noopener ' + link_rel);

        if (link_rel && !link_rel.includes('noopener')) {
            links[i].setAttribute("rel", 'noopener ' + link_rel);
        } else {
            links[i].setAttribute("rel", 'noopener');
        }
    }
}

$(function() {
    $('.external').children('img').parent().addClass('external_link_img');
});

