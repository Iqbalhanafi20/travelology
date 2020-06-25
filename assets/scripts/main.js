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


//   counter effect
$('.num').counterUp({
    delay: 10,
    time:1000,
    
})