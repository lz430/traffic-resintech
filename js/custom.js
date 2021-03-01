jQuery(window).scroll(function (event) {
  var scroll = jQuery(window).scrollTop();
  if (scroll > 10) {
    jQuery('header').removeClass('no-scroll').addClass('scrolled');
  } else {
    jQuery('header').removeClass('scrolled').addClass('no-scroll');
  }
});