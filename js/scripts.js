document.addEventListener("DOMContentLoaded", () => {
  const menuButton = document.querySelector('.nav-button');
  // прилипающая шапка
  window.onscroll = function () {
    if (window.pageYOffset > 10) {
      document.body.classList.add('header-sticky');
    } else {
      document.body.classList.remove('header-sticky');
    }

  };

  menuButton.addEventListener('click', function () {
    document.body.classList.toggle('mob-menu-open');
    menuButton.classList.toggle('open');
  });

  // Слайдеры
  const swiperIMG = new Swiper('#photo-slider', {
    // параметры слайдера
    loop: false,
    speed: 2400,
    parallax: true,
  });

  const swiperDETAILS = new Swiper('#text-slider', {
    // параметры слайдера
    loop: false,
    speed: 2400,
    grabCursor: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    mousewheel: {
      invert: false,
    },
    pagination: {
      el: '.home-slider .swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.home-slider .swiper-button-next',
      prevEl: '.home-slider .swiper-button-prev',
    },

    parallax: true,
  });

  swiperIMG.controller.control = swiperDETAILS
  swiperDETAILS.controller.control = swiperIMG

});
