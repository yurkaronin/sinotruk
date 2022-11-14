<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Списко грузовиков</title>
  <meta name="description"
    content="SINOTRUK INTERNATIONAL была основана в ноябре 2001 года и является дочерней компанией China National Heavy Duty Truck Group и является единственным официальным каналом внешней торговли для всей группы.">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Rubik:wght@400;600&display=swap"
    rel="stylesheet">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="./libs/swiper-bundle.min.css">
  <link rel="stylesheet" href="./libs/normalize.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body">

  <header class="header">
    <div class="wrapper">
      <div class="header__flex">
        <div class="header__logo">
          <a href="/">
            <picture>
              <source media="(max-width: 1300px)" srcset="./img/logotype-crop.png" width="140">
              <img src="./img/logotype.png" alt="Логотип" width="387">
            </picture>

          </a>
        </div>

        <nav class="header__menu">
          <ul class="list-reset">
            <li>
              <a href="#">
                <span>Грузовые автомобили</span>
                <svg class="arrow-icon" width="10" height="18" viewBox="0 0 10 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 12L5 16M5 16L9 12M5 16V8" stroke="#FFF100" stroke-width="2" />
                  <line x1="5" x2="5" y2="8" stroke="#FFF100" stroke-width="2" />
                </svg>
              </a>

              <ul class="dropdown-menu header__submenu list-reset">
                <li><a href="#"><span>C7H</span></a></li>
                <li><a href="#"><span>C7H</span></a></li>
                <li><a href="#"><span>C7H</span></a></li>
                <li><a href="#"><span>C7H</span></a></li>
                <li><a href="#"><span>C7H</span></a></li>
                <li><a href="#"><span>C7H</span></a></li>
              </ul>

            </li>
            <li><a href=""><span>Акции</span></a></li>
            <li><a href=""><span>Сервис</span></a></li>
            <li><a href=""><span>О компании</span></a></li>
            <li><a href=""><span>Контакты</span></a></li>
          </ul>
        </nav>

        <div class="header__contacts">

          <div class="header__contacts-flex">
            <div class="header__logo-two">
              <a href="#">
                <span>Юрто-Трак</span>
              </a>

            </div>

            <div class="header__tel">
              <a href="tel:88002220409">
                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.02 10.98c4.078 4.079 7.974 4.942 9.412 5.02A10.531 10.531 0 0 0 16 12.55c-.993-.968-2.44-1.955-3.765-2.51l-1.568 1.568c-.536-.144-2.007-.752-3.765-2.51C5.144 7.34 4.536 5.87 4.392 5.333l1.569-1.568C5.405 2.439 4.418.993 3.45 0 2.458.261 1.346.65 0 1.569c.079 1.437.941 5.333 5.02 9.412Z"
                    fill="#FFF100" />
                </svg>
                <span>8 800 222 04 09</span>
              </a>
            </div>

          </div>


        </div>

        <div class="header__buttons">
          <button class="nav-button" type="button">
            <span></span>
          </button>
        </div>
      </div>
    </div>

  </header>

  <main class="trucks-list">

    <section class="catalog-preview catalog-preview--mod2 section-grid">
      <div class="wrapper">

        <div class="section-grid__content">
          <div class="section-grid__left">
            <div class="sticky-content">
              <h2 class="title title--mod">С7H</h2>
              <p class="text">Техника под брендом SITRAK производится концерном грузовых автомобилей SINOTRUK
                INTERNATIONAL на основе лицензионных технологий немецкого автоконцерна MAN.
                Серия SITRAK - прекрасная альтернатива для замены седельных тягачей и самосвалов европейских брендов.
              </p>
              <!-- тут можно добавить кнопку  -->
            </div>

          </div>
          <div class="section-grid__right">
            <ul class="list-reset content-grid">
              <?php
          // анонсы карточек автомобиля
          include './components/item/cards_promo.php';
          include './components/item/cards_promo.php';
          include './components/item/cards_promo.php';
          include './components/item/cards_promo.php';
          ?>
            </ul>
          </div>
        </div>
      </div>
    </section>


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
            <form action="#"
              id="customForm" name="form" onsubmit="alert('submit!');return false">
              <ul class="list-reset content-grid">

                <li class="content-grid__card">

                  <label for="name">Ваше имя:</label>

                  <div class="input-wrap">
                    <input type="text" id="name" name="name" placeholder="Введите имя" data-reg="^[А-ЯЁ][а-яё]*$">
                  </div>
                  <p class="error-message"><strong>Ошибка:</strong> Используйте только русские буквы. Первая буква в имени - Заглавная.</p>
                </li>
                <li class="content-grid__card">
                  <label for="">Телефон:</label>
                  <div class="input-wrap">
                    <input type="tel" name="tel" placeholder="+7 (918) 098-76-54" data-reg="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$">
                  </div>
                  <p class="error-message">Используйте только цифры, пожалуйста</p>
                </li>
                <li class="content-grid__card">
                  <label class="accept" for="check-accept">
                    <input class="visually-hidden" type="checkbox" name="confirm" id="check-accept" requiered checked>
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

  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
