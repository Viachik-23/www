<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>
  <header>
    <div id="logo">
      <a href="/" title="Перейти на главную"><span>Н</span>овости</a>
    </div>
    <div id="menuHead">
      <a href="/about.php"><div style="margin-right: 5%">О нас</div></a>
      <a href="/feedback.php"><div>Обратная связь</div></a>
    </div>
    <div id="regAuth">
      <a href="/reg.php">Регистрация</a> | <a href="auth.php">Авторизация</a>
    </div>
  </header>

  
  <footer>
    <div id="social">

    <a href="https://vk.com/tv5priarg?ysclid=lppdz1bgfw274632583" title="Группа ВК" target="_blank">
      <img src="img/vk.png" alt="ВК" title="ВК">
    </a>

    <a href="https://ok.ru/tv5priargunsk?ysclid=lppe30v0u8686358737" title="Группа OK" target="_blank">
      <img src="img/ok.png" alt="OK" title="Одноклассники">
    </a>

    <a href="https://www.youtube.com/@VladPerminov" title="Канал" target="_blank">
      <img src="img/youtube.png" alt="YouTube" title="YouTube">
    </a>
    </div>

    <div id="rights">Все права защишены &copy <?=date ('Y')?></div>

  </footer>
    </div>
</body>
</html>