<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ЮРТО-ТРАК - диллер Sinotruk в России</title>
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

  <main>
  <?php
    // первый экран домашней стр
    include './components/home_slider.php';
    // анонс каталога
    include './components/catalog_preview.php';
    // анонсы акций
    include './components/sale_preview.php';
    ?>

  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
