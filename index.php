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

  <div id="wrapper">

<div id="leftCol">
  <div id="bigArticle">
  <img src="img/articles/art_1.png" alt="Статья 1" title="Статья 1">
  <h2>Статья 1</h2>
  <p>
    Адаптивный веб-дизайн — значительное достижение для всего Интернета. Мы больше не скованы давно устаревшей моделью «печатной страницы» со статическим содержимым, разбитым на области фиксированного размера. Сегодня Интернет способен жить, дышать и приспосабливаться, заполняя всё пространство, доступное на экранах различных устройств, начиная от мобильных телефонов — и вплоть до огромных видеодисплеев. Это то, какой и предполагалась Глобальная сеть.
    Но есть небольшая проблема. Веб-сайты зачастую содержат баннерную рекламу и традиционные баннеры, не обладающие особой гибкостью. Как flash-, так и GIF-баннеры имеют фиксированные размеры, из-за чего несовместимы с современной адаптивной вёрсткой. Нам необходим новый метод создания баннерной рекламы. Нам нужны «адаптивные» баннеры...
  </p>
  <a href="article.php"><div class="more">Далее</div> </a>
  </div>
  <div class="clear">
    <br>
  </div>
  <div class="article">
  <img src="img/articles/art_2.png" alt="Статья 1" title="Статья 1">
  <h2>Статья 1</h2>
  <p>
    Адаптивный веб-дизайн — значительное достижение для всего Интернета. Мы больше не скованы давно устаревшей моделью «печатной страницы» со статическим содержимым, разбитым на области фиксированного размера. Сегодня Интернет способен жить, дышать и приспосабливаться, заполняя всё пространство, доступное на экранах различных устройств, начиная от мобильных телефонов — и вплоть до огромных видеодисплеев. Это то, какой и предполагалась Глобальная сеть.
  </p>
  <a href="article.php"><div class="more">Далее</div> </a>
  </div>

  <div class="article">
  <img src="img/articles/art_3.png" alt="Статья 1" title="Статья 1">
  <h2>Статья 1</h2>
  <p>
    Адаптивный веб-дизайн — значительное достижение для всего Интернета. Мы больше не скованы давно устаревшей моделью «печатной страницы» со статическим содержимым, разбитым на области фиксированного размера. Сегодня Интернет способен жить, дышать и приспосабливаться, заполняя всё пространство, доступное на экранах различных устройств, начиная от мобильных телефонов — и вплоть до огромных видеодисплеев. Это то, какой и предполагалась Глобальная сеть.
  </p>
  <a href="article.php"><div class="more">Далее</div> </a>
  </div>

</div>

<div id="rightCol">

  <div class="banner">
  <img src="img/Баннер 1.jpg" alt="Баннер 1" title="Баннер 1">
  </div>

  <div class="banner">
  <img src="img/Баннер 1.jpg" alt="Баннер 2" title="Баннер 2">
  </div>

</div>

</div>

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