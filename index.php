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
  <?php include 'components/styles_include.php'?>

  <style>
  .page-list {
    min-height: 100vh;
    padding-top: 101px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
  }

  .page-list a {
    font-size: 2em;
  }
  </style>
</head>

<body class="body">

  <!--  шапка сайта -->
  <?php include 'components/header.php'?>
  <main>

    <section class="page-list">
      <div class="wrapper">
        <ul class="list-reset">
          <li><a href="./home.php" target="_blank">Главная страница</a></li>
          <li><a href="./trucks-list.php" target="_blank">Список грузовиков</a></li>
          <li><a href="./trucks-list-2.html" target="_blank">Список грузовиков 2</a></li>
        </ul>
      </div>
    </section>
  </main>
  <!--  подвал сайта -->
  <?php
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
