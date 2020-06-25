jQuery( document ).ready( function($) {
    $( window ).scroll( function () {
      if ( $(document).scrollTop() > 100 ) {
        // Navigation Bar
        $('.navbar').addClass('scroll-nav');
      } else {
        $('.navbar').removeClass('scroll-nav');
      }
    });
  });
