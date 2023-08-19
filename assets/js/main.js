(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  const portfolioLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });
  
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // Smooth scrolling on the navbar links
  $(".navbar-nav a").on('click', function (event) {
      if (this.hash !== "") {
          event.preventDefault();

          $('html, body').animate({
              scrollTop: $(this.hash).offset().top - 45
          }, 500, 'easeInOutExpo');
      }
  });

  // Smooth scrolling on the navbar links
  $(".nav-s a").on('click', function (event) {
    if (this.hash !== "") {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 45
        }, 500, 'easeInOutExpo');
        
        if ($(this).parents('.nav-s').length) {
            $('.nav-s .active').removeClass('active');
            $(this).closest('a').addClass('active');
        }
    }
});

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });
  var cardSlider = new Swiper(".motor-slider", {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      600: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      767: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window is <= 991px
      991: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  var cardSlider = new Swiper(".about-slider", {
    autoplay: 
    // false,
    {
    	delay: 4000,
    	disableOnInteraction: false
    },
    loop: true,
   
    slidesPerView: 1,
    spaceBetween: 30,
  });


  $(".screenshot-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 500,
    loop: true,
    dots: true,
    items: 1
});

    var cardSlider = new Swiper(".service-point-slider", {
        autoplay: false,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        slidesPerView: 2,
        slidesPerColumn: 3,
        slidesPerGroup: 2,
        spaceBetween: 50,
        breakpoints: {
          // when window width is >= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window width is >= 640px
          600: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window is <= 991px
          991: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });


      $('.slick1').slick({
        rows: 3,
        loop: false,
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: false,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 580,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              rows: 3
            }
          }
        ]
      });
    

})(jQuery);
