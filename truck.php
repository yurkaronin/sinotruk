<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>c7h6x2 тягач</title>
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

        <div class="page__top top-grid">
          <div class="top-grid__left">
            <ul class="breadcrumbs">
              <li>
                <a href="#">
                  <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="line" d="M8.5 5L0 5" stroke="#FFF100" stroke-width="2"></path>
                    <path d="M12 9L16 5M16 5L12 1M16 5L8 5" stroke="#FFF100" stroke-width="2"></path>
                  </svg>
                  <span>Назад к списку</span></a>
              </li>
            </ul>
            <h1 class="title">c7h6x2 тягач</h1>
          </div>
          <div class="top-grid__right">
            <span class="price">от 4 000 000 ₽</span>
            <button class="button" type="submit" id="button" name="button">
              <span>получить консультацию</span>
              <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="line" d="M8.5 5L0 5" stroke="#FFF100" stroke-width="2"></path>
                <path d="M12 9L16 5M16 5L12 1M16 5L8 5" stroke="#FFF100" stroke-width="2"></path>
              </svg>
            </button>
          </div>

        </div>

      </div>
    </section>
    <section class="truck-card">
      <div class="wrapper">
        <div class="truck-card__grid">
          <div class="truck-card-slider">
            <!-- тут будет кастомный слайдер  -->
          </div>
          <div class="truck-card__details">
            <ul class="truck-card__list">

              <?php
    // аккордеон
    include 'components/item/accordion.php';
    include 'components/item/accordion.php';
    include 'components/item/accordion.php';
    include 'components/item/accordion.php';
    include 'components/item/accordion.php';
    include 'components/item/accordion.php';
    ?>


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
