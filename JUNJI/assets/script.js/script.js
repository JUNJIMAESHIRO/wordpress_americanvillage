  $(function() {
        var mySwiper = new Swiper ('.main_swiper-container', {
          effect: "fade",
          loop: true,
          autoplay: {
              delay: 3000,
              disableOnInteraction: false
          },
          speed: 1500,
          simulateTouch: false,
        })
      });