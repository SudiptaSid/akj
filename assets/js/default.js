// ==================== Smooth Scroll ====================
// Select all links with hashes
$('.scroll')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
            });
        }
    }
});
// ================= To Top =================
$(document).ready(function(){ 
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#scrollup').fadeIn();
        } else {
            $('#scrollup').fadeOut();
        }
    }); 
    $('#scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 2000);
        return false;
    });
});

// ================= Search Toggle =================
$("#cs_search_icon").click(function(){
    $(".search_container").addClass("view");
});
$("#close_search").click(function(){
    $(".search_container").removeClass("view");
});

// ================= Search Inner Toggle =================
$("#in_search").click(function(){
    $("#search_box").slideToggle(600);
});

// ================= Cart =================
$("#pd_cart").click(function(){
    $("#cart_drp").slideDown(600);
});
$("#cls_pd_cart").click(function(){
    $("#cart_drp").slideUp(600);
});

// ================= Lightbox =================
$(function(){
    var $gallery = $('.gallery_page a').simpleLightbox();
    $gallery.on('show.simplelightbox', function(){
        console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
        console.log('Shown');
    })
    .on('close.simplelightbox', function(){
        console.log('Requested for closing');
    })
    .on('closed.simplelightbox', function(){
        console.log('Closed');
    })
    .on('change.simplelightbox', function(){
        console.log('Requested for change');
    })
    .on('next.simplelightbox', function(){
        console.log('Requested for next');
    })
    .on('prev.simplelightbox', function(){
        console.log('Requested for prev');
    })
    .on('nextImageLoaded.simplelightbox', function(){
        console.log('Next image loaded');
    })
    .on('prevImageLoaded.simplelightbox', function(){
        console.log('Prev image loaded');
    })
    .on('changed.simplelightbox', function(){
        console.log('Image changed');
    })
    .on('nextDone.simplelightbox', function(){
        console.log('Image changed to next');
    })
    .on('prevDone.simplelightbox', function(){
        console.log('Image changed to prev');
    })
    .on('error.simplelightbox', function(e){
        console.log('No image found, go to the next/prev');
        console.log(e);
    });
});
// ================= Mega Menu =================
$(document).ready(function () {
        "use strict";
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\"></a>");
        $(".menu > ul > li").hover(function (e) {
                if ($(window).width() > 943) {
                        $(this).children("ul").stop(true, false).fadeToggle(150);
                        e.preventDefault();
                }
        });
        $(".menu > ul > li").click(function () {
                if ($(window).width() <= 943) {
                        $(this).children("ul").fadeToggle(150);
                }
        });
        $(".menu-mobile").click(function (e) {
                $(".menu > ul").toggleClass('show-on-mobile');
                e.preventDefault();
        });
});
$(window).resize(function () {
        $(".menu > ul > li").children("ul").hide();
        $(".menu > ul").removeClass('show-on-mobile');
});
// ================= On Scroll Add Class =================
$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('#cs_navbar').addClass('sticky');
    } else {
       $('#cs_navbar').removeClass('sticky');
    }
});
// ================= Widget Toggle =================
$("#wd_prc_t").click(function(){
    $("#wid_prc").slideToggle(600);
});
$("#wd_clr_t").click(function(){
    $("#wid_Clr").slideToggle(600);
});
$("#wd_typ_t").click(function(){
    $("#wid_typ").slideToggle(600);
});
$("#wd_colec_t").click(function(){
    $("#wid_colec").slideToggle(600);
});
$("#wd_gndr_t").click(function(){
    $("#wid_gndr").slideToggle(600);
});

// ================= Product Detaols Thumbnail ================= 
if (window.matchMedia('(min-width: 992px)').matches) {
     /* light box */
    jQuery("#zoom_image").elevateZoom({
    cursor: 'crosshair',
            borderColour:"#e4dddd",
            zoomType: "window",
            lensShape : "round",
            lensSize    : 200,
            lensOpacity:0,
            gallery:'more_imgs',
            galleryActiveClass: 'active',
            imageCrossfade: true,
            easing: false,
    });
};
/* light box */
$('.colorbox').magnificPopup({
type:'image',
    delegate: 'a',
    gallery: {
    enabled:true
    }
});