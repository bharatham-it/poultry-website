/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

jQuery(function($){
  "use strict";
    jQuery('.menu > ul').superfish({
      delay:       500,                            
      animation:   {opacity:'show',height:'show'},  
      speed:       'fast'                         
    });

    jQuery('.search-box span i').click(function(){
        jQuery(".serach_outer").toggle();
    });
});

/* Mobile responsive Menu*/

function openNav() {
  document.getElementById("vw-mobile-app-mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("vw-mobile-app-mySidenav").style.width = "0";
}

jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});


jQuery('document').ready(function(){

  var owl = jQuery('#awesome_screenshot .owl-carousel');
        owl.owlCarousel({
        margin: 20,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: false,
        rtl:false,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });

    var owl = jQuery('#testimonials .owl-carousel');
        owl.owlCarousel({
        margin: 25,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: false,
        rtl:false,
        navText : ['<i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>','<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 2
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });
    var owl = jQuery('#latest_post .owl-carousel');
        owl.owlCarousel({
        margin: 25,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: false,
        rtl:false,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          768: {
            items: 2
          },
          1000: {
            items: 2
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });
    var owl = jQuery('#team .owl-carousel');
        owl.owlCarousel({
        margin: 30,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: false,
        rtl:false,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });
});
/* Counter */
jQuery(document).ready(function(){
  jQuery('.count').each(function () {
      jQuery(this).prop('Counter',0).animate({
          Counter: jQuery(this).text()
      }, {
          duration: 30000,
          easing: 'swing',
          step: function (now) {
             jQuery(this).text(Math.ceil(now));
          }
      });
  });
});

jQuery(function($){
    $(window).scroll(function(){
      var scrollTop = $(window).scrollTop();
      if( scrollTop > 100 ){
        $('#masthead').addClass('scrolled');
      }else{
        $('#masthead').removeClass('scrolled');
      }
        $('.main-header').css('background-position', 'center ' + (scrollTop / 2) + 'px');
    });

 });

// custom Animation
jQuery(window).scroll(function() {
  jQuery('.work_inner').each(function(){
  var imagePos = jQuery(this).offset().top;

  var topOfWindow = jQuery(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      jQuery(this).addClass("fadeInRight");
    }
  });

  jQuery('#about .container').each(function(){
  var imagePos = jQuery(this).offset().top;

  var topOfWindow = jQuery(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      jQuery(this).addClass("fadeInLeft");
    }
  });

});
