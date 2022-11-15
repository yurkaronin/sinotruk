<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Контакты</title>
  <meta name="description"
    content="SINOTRUK INTERNATIONAL была основана в ноябре 2001 года и является дочерней компанией China National Heavy Duty Truck Group и является единственным официальным каналом внешней торговли для всей группы.">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body">

  <?php
  // шапка сайта
  include './components/header.php';
  // мобильное меню
  include './components/mobile-menu.php';
  ?>

  <main class="inner-page">
    <section class="page">
      <div class="wrapper">
        <div class="container">

          <div class="page__top">
            <ul class="breadcrumbs">
              <li>
                <a href="#">
                  <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="line" d="M8.5 5L0 5" stroke="#FFF100" stroke-width="2"></path>
                    <path d="M12 9L16 5M16 5L12 1M16 5L8 5" stroke="#FFF100" stroke-width="2"></path>
                  </svg>
                  <span>На главную</span></a>
              </li>
            </ul>
            <h1 class="title">Контакты</h1>
          </div>

        </div>
      </div>
    </section>

    <!-- секция с интерактивной картой  -->
    <div class="map">
      <div id="map" class="map__content"></div>
    </div>


    <section class="page">
      <div class="wrapper">
        <div class="container">

          <div class="page__body">
            <ul class="content__contacts-list">
              <li>
                <span>Адрес:</span>
                350087, Россия, Краснодарский край, г. Краснодар, Ростовское шоссе 47
              </li>
              <li>
                <span>Телефоны:</span>
                <a href="tel:+78612259375">+7 (861) 225-93-75</a>; <a href="tel:+78612259375">+7 (861) 225-93-75</a>
              </li>
              <li>
                <span>Электронная почта:</span>
                <a href="mailto:service@urto-renault.ru">service@urto-renault.ru</a>, <a
                  href="mailto:parts@urto-renault.ru">parts@urto-renault.ru</a>
              </li>
              <li>
                <span>Приемка в сервис:</span>
                <a href="tel:+78612259375">+7 (861) 225-93-75</a>; <a href="tel:+78612259375">+7 (861) 225-93-75</a>
              </li>
              <li>
                <span>Отдел запасных частей:</span>
                <a href="tel:+78612259375">+7 (861) 225-93-75</a>; <a href="tel:+78612259375">+7 (861) 225-93-75</a>
              </li>
              <li>
                <span>Менеджер по работе с клиентами:</span>
                <a href="tel:+78612259375">+7 (861) 225-93-75</a>
              </li>
              <li>
                <span>Гарантийная поддержка:</span>
                <a href="tel:+78612259375">+7 (861) 225-93-75</a>
              </li>
              <li>
                <span>Сервис менеджер:</span>
                <a href="tel:+78612259375">+7 (861) 225-93-75</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <?php
  // Блок с формой обратной связи - короткая форма
  include './components/contact-us.php';
  ?>

    </div>

  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
