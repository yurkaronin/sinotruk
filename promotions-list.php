<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Акции - все</title>
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
      <div class="page__top">
        <div class="wrapper">
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
          <h1 class="title">Акции</h1>
        </div>
      </div>

      <?php
      // анонсы акций полная ширина
    include './components/sale_preview-full.php';
    ?>
    </section>

    </div>

  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
