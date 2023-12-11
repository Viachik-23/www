<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
  $title = "Информация о нас";
  require_once "blocks/head.php"; 
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>

  <div id="wrapper">

    <div id="leftCol">

        <div id="about_us">
            <h2>Информация о нас</h2>
            <p>
            Еще газетами и журналами на практике доказано, что разбитый на несколько колонок текст воспринимается намного проще. На веб-страницах до недавнего времени отобразить контент таким образом было проблемой, доходило до того, что верстальщик разделял текст на несколько div'ов. Но все может стать намного проще с CSS3 Multi Column Module.
            </p>
            <img src="img/about.jpg" alt="ТВ5">
        </div>

    </div>

<?php require_once "blocks/rightCol.php" ?>

  </div>

<?php require_once "blocks/footer.php" ?>
</body>
</html>