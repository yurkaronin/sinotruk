if (document.querySelector('#photo-slider')) {
  // слайдер с картинками на главной странице
  const swiperIMG = new Swiper('#photo-slider', {
    loop: false,
    speed: 2400,
    parallax: true,
  });
  // слайдер с текстовым описанием на главной странице
  const swiperDETAILS = new Swiper('#text-slider', {
    loop: false,
    speed: 2400,
    grabCursor: false,
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // },
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
  // отключаем смену слайдов при прокрутке колёсиком мыши
  swiperDETAILS.mousewheel.disable();
  // синхронизируем два слайдера между собой
  swiperIMG.controller.control = swiperDETAILS
  swiperDETAILS.controller.control = swiperIMG
};


// СЕРВИС слайдеры
if (document.querySelector('.custom-slider')) {
  // миниатюры
  var swiper3 = new Swiper(".custom-slider__small-photo .swiper", {
    spaceBetween: 16,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".custom-slider__small-photo .navigation-button-next",
      prevEl: ".custom-slider__small-photo .navigation-button-prev",
    },
    breakpoints: {
      0: { // при 0px и выше
        direction: 'horizontal',
        slidesPerView: 2,
      },
      426: { // при 0px и выше
        direction: 'horizontal',
        slidesPerView: 3,
      },
      769: { // при 768px и выше
        direction: 'vertical',
        slidesPerView: 7,
      }
    },
  });
  // большой слайдер
  var swiper4 = new Swiper(".custom-slider__big-photo .swiper", {
    spaceBetween: 32,
    loop: true,
    navigation: {
      nextEl: ".custom-slider__big-photo .navigation-button-next",
      prevEl: ".custom-slider__big-photo .navigation-button-prev",
    },
    thumbs: {
      swiper: swiper3,
    },
  });
};



