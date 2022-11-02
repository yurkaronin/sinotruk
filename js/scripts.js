// Переменные
const menuButton = document.querySelector('.nav-button');
// Функции
function headerChange() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > 10) {
    document.body.classList.add('header-sticky');
  } else {
    document.body.classList.remove('header-sticky');
  }
};

document.addEventListener("DOMContentLoaded", () => {
  // Проверяем состояние прокрутки страницы. если прокрутка есть - перекрашиваем шапку
  headerChange();
// отслеживаем событие скрола страницы и перекрашиваем шапку
  document.addEventListener('scroll', e => {
    headerChange();
  });
// при клике по кнопке вызова меню - добавляем служебный класс на body
  menuButton.addEventListener('click', function () {
    document.body.classList.toggle('mob-menu-open');
    menuButton.classList.toggle('open');
  });
  // аккордеон в подвале
  const footerLink = document.querySelector('.footer__head-link');
  footerLink.addEventListener('click', function (e) {
    e.preventDefault();
    footerLink.classList.toggle('active');
  });
  // Слайдеры ///////////////////////////////////////////////////////
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
  swiperDETAILS.mousewheel.disable ();
// синхронизируем два слайдера между собой
  swiperIMG.controller.control = swiperDETAILS
  swiperDETAILS.controller.control = swiperIMG


});
