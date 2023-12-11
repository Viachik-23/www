<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
  $title = "Обратная связь";
  require_once "blocks/head.php"; 
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>

  <div id="wrapper">

    <div id="leftCol">
        <input type="text" placeholder="Имя" id="name" name="name"><br />
        <input type="text" placeholder="Email" id="email" name="email"><br />
        <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
        <textarea name="message" id="message" placeholder="Введите ваше сообщение"></textarea><br />
        <input type="button" id="done" name="done" value="Отправить">
    </div>

<?php require_once "blocks/rightCol.php" ?>

  </div>

<?php require_once "blocks/footer.php" ?>
</body>
</html>