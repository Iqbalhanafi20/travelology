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

// AOS Effect
AOS.init();
AOS.init({
    duration: 900,
    delay: 0
});

// carrousel
$('.carousel').carousel();

// slick carousel automate
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

// trigger change color
// $(".navbar-toggler").click(function(){
//   $(".navbar").addClass("navbar-putih")
// })
