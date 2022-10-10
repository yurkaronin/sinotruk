const swiper = new Swiper('.first .swiper', {
  // Optional parameters
  loop: true,

  pagination: {
    el: ".first .swiper-pagination",
    type: "fraction",
  },

  // Navigation arrows
  navigation: {
    nextEl: '.first .swiper-button-next',
    prevEl: '.first .swiper-button-prev',
  },

});


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

});
