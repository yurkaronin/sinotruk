<section class="contact-us section-grid">
  <div class="wrapper">
    <div class="section-grid__content">
      <div class="section-grid__left">
        <h2 class="title title--mod">Свяжитесь с&nbsp;нами</h2>
        <p class="text">Заполните форму и наши сотрудники свяжутся с вами или звоните по телефону</p>
        <a class="phone" href="tel:88002220409">
          <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M5.02 10.98c4.078 4.079 7.974 4.942 9.412 5.02A10.531 10.531 0 0 0 16 12.55c-.993-.968-2.44-1.955-3.765-2.51l-1.568 1.568c-.536-.144-2.007-.752-3.765-2.51C5.144 7.34 4.536 5.87 4.392 5.333l1.569-1.568C5.405 2.439 4.418.993 3.45 0 2.458.261 1.346.65 0 1.569c.079 1.437.941 5.333 5.02 9.412Z"
              fill="#FFF100" />
          </svg>
          <span>8 800 222 04 09</span>
        </a>
      </div>

      <div class="section-grid__right">
        <form action="#" id="customForm" name="form" onsubmit="alert('submit!');return false">
          <ul class="list-reset content-grid">

            <li class="content-grid__card">

              <label for="name">Ваше имя:</label>

              <div class="input-wrap">
                <input type="text" id="name" name="name" placeholder="Введите имя" data-reg="^[А-ЯЁ][а-яё]*$">
              </div>
              <p class="error-message"><strong>Ошибка: </strong> Используйте только русские буквы. Первая буква в
                имени - Заглавная.</p>
            </li>
            <li class="content-grid__card">
              <label for="">Телефон:</label>
              <div class="input-wrap">
                <input type="tel" name="tel" placeholder="+7 (918) 098-76-54"
                  data-reg="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$" required>
              </div>
              <p class="error-message">Используйте только цифры, пожалуйста</p>
            </li>
            <li class="content-grid__card">
              <label class="accept" for="check-accept">
                <input class="visually-hidden" type="checkbox" name="confirm" id="check-accept" required checked>
                <p>Даю согласие на обработку <a href="#" target="_blank">персональных данных</a>
                </p>
              </label>

            </li>
            <li class="content-grid__card">

              <button class="button" type="submit" id="button" name="button">
                <span>получить консультацию</span>
                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="line" d="M8.5 5L0 5" stroke="#FFF100" stroke-width="2"></path>
                  <path d="M12 9L16 5M16 5L12 1M16 5L8 5" stroke="#FFF100" stroke-width="2"></path>
                </svg>
              </button>

            </li>

          </ul>
        </form>
      </div>

    </div>
  </div>
</section>
