<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Список грузовиков</title>
  <meta name="description"
    content="SINOTRUK INTERNATIONAL была основана в ноябре 2001 года и является дочерней компанией China National Heavy Duty Truck Group и является единственным официальным каналом внешней торговли для всей группы.">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>
<!-- ВАЖНО! тут дополнительный класс, для корректной стилизации слайдера в первом экране  -->

<body class="body slider-mod">
  <?php
  // шапка сайта
  include './components/header.php';
  // мобильное меню
  include './components/mobile-menu.php';
  ?>

  <main>
    <?php include './components/home_slider.php'?>

    <section class="catalog-preview catalog-preview--mod section-grid">
      <div class="wrapper">

        <div class="section-grid__content">

          <div class="section-grid__left">
            <div class="sticky-content">
              <h2 class="title title--mod">С7H</h2>
              <p class="text">Техника под брендом SITRAK производится концерном грузовых автомобилей SINOTRUK
                INTERNATIONAL на основе лицензионных технологий немецкого автоконцерна MAN.
                Серия SITRAK - прекрасная альтернатива для замены седельных тягачей и самосвалов европейских брендов.
              </p>
              <!-- <a class="button" href="#">
                <span>Каталог грузовиков</span>
                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="line" d="M8.5 5L0 5" stroke="#FFF100" stroke-width="2"></path>
                  <path d="M12 9L16 5M16 5L12 1M16 5L8 5" stroke="#FFF100" stroke-width="2"></path>
                </svg>
              </a> -->
            </div>

          </div>

          <!-- правый блок  -->
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
  </main>
  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
