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
