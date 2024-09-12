(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".handyman-blocks-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".handyman-blocks-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".handyman-blocks-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".handyman-blocks-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".handyman-blocks-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".handyman-blocks-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".handyman-blocks-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".handyman-blocks-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".handyman-blocks-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".handyman-blocks-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".handyman-blocks-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".handyman-blocks-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".handyman-blocks-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".handyman-blocks-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".handyman-blocks-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".handyman-blocks-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".handyman-blocks-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".handyman-blocks-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".handyman-blocks-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".handyman-blocks-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".handyman-blocks-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".handyman-blocks-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".handyman-blocks-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".handyman-blocks-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".handyman-blocks-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".handyman-blocks-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".handyman-blocks-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".handyman-blocks-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".handyman-blocks-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".handyman-blocks-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".handyman-blocks-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".handyman-blocks-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".handyman-blocks-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".handyman-blocks-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".handyman-blocks-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".handyman-blocks-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".handyman-blocks-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".handyman-blocks-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".handyman-blocks-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".handyman-blocks-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".handyman-blocks-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".handyman-blocks-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".handyman-blocks-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".handyman-blocks-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".handyman-blocks-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var mightyBuildersStickyMenu = $(".handyman-blocks-sticky-menu");
    var mightyBuildersStickyNavigation = $(".handyman-blocks-sticky-navigation");

    if (mightyBuildersStickyMenu.length && scrollTop > 0) {
      mightyBuildersStickyMenu.addClass("sticky-menu-enabled handyman-blocks-zoom-in-up");
    } else {
      mightyBuildersStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".handyman-blocks-scrollto-top a").fadeIn();
    } else {
      jQuery(".handyman-blocks-scrollto-top a").fadeOut();
    }
  });
  jQuery(".handyman-blocks-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".handyman-blocks-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });
})(jQuery);
