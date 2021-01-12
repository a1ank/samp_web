<html>
<head>
<title>Первый сайт на PHP</title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<body>
  
  <header>
    <a class="logo">Logo</a>
    <nav>
      <ul class="nav_links">
        <li><a href="index.php"> Главная</a></li>
        <li><a href="#">Как начать играть?</a></li>
        <li><a href="#contact">Форум</a></li>
        <li><a href="#home">Новости</a></li>
      </ul>
    </nav>
    <div class="don-log">
      <ul>
        <li><a href="#about">Донат</a></li>
        <li><a class="login" href="login.php">Личный кабинет</a></li>
      </ul>
    </div>
  </header>

  <div class="auth_pg">
    <?php
    $name = $_POST["firstname"];
    $surname = $_POST["lastname"];
    echo "Ваше имя: <b>".$name . " " . $surname . "</b>";
    ?>
  </div>

  <footer>
  <div class="ft">
    <div class="logo-ft">
      <img class="logo" src="icons/logo.svg" alt=""></img>
    </div>
    <div class="contacts">
      <h>Контакты</h>
      <a href="#" class="ft-txt">contact@gmail.com</a>
    </div>
    <div class="important">
      <h>Важное</h>
      <a href="#">Форум</a>
    </div>
    <div class="for-users">
      <h>Для пользователей</h>
      <a href="#" class="ft-txt">Положение о конфиденциальности</a>
      <a href="#" class="ft-txt">Пользовательское соглашение</a>
    </div>
    <div class="socials">
      <h>Мы в соц.сетях</h>
      <div class="icons-ft">
        <a href="https://discord.gg/sEzgAnezgX" target="_blank"><img class="icons-header" src="icons/discord-or.svg"></a>
        <a href="#"><img class="icons-header" src="icons/youtube-wh.svg"></a>
        <a href="https://vk.com/s.montanarp" target="_blank"><img class="icons-header" src="icons/vk-logo-wh.svg"></a>
        <a href="#"><img class="icons-header" src="icons/telegram-wh.svg"></a>
      </div>
    </div>
  </div>
  </footer>

</body>
</html>
