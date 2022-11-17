

if(accordion) {
  for (let item of accordion) {
    item.addEventListener('click', function (e) {
      // если клик по ссылке - то добавляем item класс active
      if(e.target.classList.contains('accordion__top')) {
        e.target.classList.toggle('active');
      }
    });
  };
}


