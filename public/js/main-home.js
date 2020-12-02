(function($) {
    /** Convert Metaslider to Owl Carousel Lazy Load  */
    $('.ml-slider.slide-doingubacsi .slides').addClass('owl-carousel owl-theme');
    $('.ml-slider.slide-doingubacsi .owl-carousel li').addClass('item').css('display', 'initial');
    $('.ml-slider.slide-doingubacsi .owl-carousel .item img').addClass('owl-lazy');
    $('.ml-slider.slide-doingubacsi .owl-carousel .owl-lazy').each(function() {
        $(this).attr('data-src', $(this).attr('src')).removeAttr('src');
    });

    $('.ml-slider.slide-doingubacsi .owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        lazyLoad: true,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            }
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayTimeout: 5000,
    });

    /** Convert Metaslider to Owl Carousel Lazy Load  */
    $('.ml-slider.slide-khachhang .slides').addClass('owl-carousel owl-theme');
    $('.ml-slider.slide-khachhang .owl-carousel li').addClass('item').css('display', 'initial');
    $('.ml-slider.slide-khachhang .owl-carousel .item img').addClass('owl-lazy');
    $('.ml-slider.slide-khachhang .owl-carousel .owl-lazy').each(function() {
        $(this).attr('data-src', $(this).attr('src')).removeAttr('src');
    });

    $('.ml-slider.slide-khachhang .owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        lazyLoad: true,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
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

    // carousel Há»£p tĂ¡c chuyĂªn mĂ´n
    $('.sec_clients_row .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        lazyLoad: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                margin: 10,
                items: 2,
            },
            999: {
                margin: 20,
                items: 6,
            }
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayTimeout: 5000,
    });

    /**
     * Lazy Load Embedded YouTube Videos
     */
    (function() {
        var youtube = document.querySelectorAll(".youtube");
        for (var i = 0; i < youtube.length; i++) {
            // var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/" + youtube[i].dataset.thumb + "default.jpg";
            var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/" + youtube[i].dataset.thumb + "default.jpg";
            var image = new Image();
            image.src = source;
            image.setAttribute("alt", youtube[i].dataset.title);
            image.addEventListener("load", function() {
                youtube[i].appendChild(image);
            }(i));
            youtube[i].addEventListener("click", function() {
                var iframe = document.createElement("iframe");
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "");
                // iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1");
                iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1");
                this.innerHTML = "";
                this.appendChild(iframe);
            });
        };
    })();

    $('.sec18_col1_row2_col img')
        .add('.sec19_col1_row2 img')
        .add('.sec19_col1_row3 ul li .thumb img')
        .add('.sec19_col2_row2 .youtube img')
        .each(function() {
            $(this)
                .addClass('lazy')
                .attr('data-src', $(this).attr('src'))
                .attr('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
        });

})(jQuery);
