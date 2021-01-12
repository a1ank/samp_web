<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>MontanaRp</title>
  </head>
  <body>
    <header>
        <img class="toTop" src="icons/arrow-up.svg" type="submit" id="toTop">
      <img class="logo"src="icons/logo.svg" alt=""></img>
      <nav>
        <ul class="nav_links">
          <li><a href="index.php"> Главная</a></li>
          <li><a href="#third-page">Как начать играть?</a></li>
          <li><a href="#second-page">Сервера</a></li>
          <li><a href="#fourth-page">Новости</a></li>
          <li><a href="#contact">Форум</a></li>
        </ul>
      </nav>
      <div class="don-log">
        <ul>
          <li><a onclick="show('block')" class="donat">Донат</a>
              <!-- Задний прозрачный фон -->
              <div onclick="show('none')" id="gray"></div>
              <div id="window">
              <!-- Картинка крестика -->
              <div class="form">
                <img class="close_svg" src="icons/close.svg" alt=""  onclick="show('none')">
                  <h1>ПРИОБРЕСТИ ВАЛЮТУ</h1>
                    <input type="text" placeholder="Выберите сервер" name="{NameOfYourField}" list="datalist-dogs" class="input"/>
                      <datalist id="datalist-dogs">
                          <select  name="{NameOfYourField}">
                              <option>Первый сервер</option>
                          </select>
                      </datalist>
                      <input type="text" placeholder="Выберите сервер" name="name1" class="input">
                      <input type="text" placeholder="Введите ваш логин" name="name2" class="input">
                      <input type="email" placeholder="Введите email адрес" name="email1" class="input">
                      <input type="email" placeholder="Введите сумму MontanaCoin" name="email2" class="input">
                      <input type="submit" value="Перейти к оплате" name="sab" class="button_don">
                      <h1>Информация</h1>
                      <p>Курс валют: 1р. = 1 MC = 50$.</p>
                      <p>За Montana Coins можно приобрести: уникальный транспорт, недвижимость, бизнес, игровую валюту, и многое другое. После оплаты MC будут начислены на ваш счёт на игровом сервере автоматически.</p>
                      <p>После оплаты MC будут автоматически начислены на счёт вашего игрового аккаунта на сервере. Посмотреть баланс можно в меню выбора персонажа или через настройки персонажа, выбрав пункт «донат кабинет»</p>
                      <img class="logo_don" src="icons/logo.svg" alt=""></img>
                  </form>
                </div>
              </div>
            </li>
            <li><a onclick="shows('block')" class="login">Личный кабинет</a>
              <!-- Задний прозрачный фон -->
              <div onclick="shows('none')" id="gray1"></div>
              <div id="window1">
              <!-- Картинка крестика -->
              <div class="form1">
                <img class="close_svg" src="icons/close.svg" alt="" onclick="shows('none')">
                  <h1>Войти</h1>
                  <input type="text" placeholder="Введите ваш логин" name="name1" class="input">
                  <input type="password" placeholder="Введите ваш пароль" name="name2" class="input">
                  <p><a href=#>Забыл пароль?</a></p>
                  <input type="submit" value="Войти в кабинет" name="sab" class="button_don">
                  <h2>У меня нет аккаунта</h2>

                  <!-- Задний прозрачный фон -->
                  <a onclick="shows1('block')" class="register">Зарегистрироваться</a>
                  <div onclick="shows1('none')" id="gray2"></div>
                    <div id="window2">
                    <!-- Картинка крестика -->
                    <div class="form2">
                      <img class="close_svg" src="icons/close.svg" alt="" onclick="shows('none')">
                        <h1>Регистрация</h1>
                        <input type="text" placeholder="Имя пользователя" name="name1" class="input">
                        <input type="text" placeholder="Введите ваш пароль" name="name2" class="input">
                        <input type="text" placeholder="Введите ваш email" name="name3" class="input">
                        <input type="password" placeholder="Введите пароль" name="name4" class="input">
                        <input type="submit" value="Зарегистрироваться" name="sab" class="button_don">
                        <h2>У меня уже есть аккаунт</h2>
                        <a onclick="shows2()" class="register">Войти</a>

                        <div onclick="shows1('none')" id="gray"></div>
                          <div id="window1">
                          <!-- Картинка крестика -->
                          <div class="form1">
                            <img class="close_svg" src="icons/close.svg" alt="" onclick="shows('none')">
                              <h1>Войти</h1>
                              <input type="text" placeholder="Введите ваш логин" name="name1" class="input">
                              <input type="password" placeholder="Введите ваш пароль" name="name2" class="input">
                              <p><a href=#>Забыл пароль?</a></p>
                              <input type="submit" value="Войти в кабинет" name="sab" class="button_don">
                              <h2>У меня нет аккаунта</h2>

            </li>
          </ul>
        </div>
    </header>

    <div class="main-page">
      <div class="content">
        <div class="welcome">
          <p>Вас приветствует сервер <a>Montana RolePlay!</a></p>
          <p>Выбирай роль и присоединяйся!</p>
        </div>
        <div class="start">
          <div class="button-start">
            <a href="#third-page">Начни играть прямо сейчас</a>
            <div class="mask"></div>
          </div>
          <p>Общий онлайн: 9</p>
        </div>
        <div class="icons">
          <a href="https://discord.gg/sEzgAnezgX" target="_blank"><img class="icons-header" src="icons/discord-or.svg"></a>
          <a href="#"><img class="icons-header" src="icons/youtube-wh.svg"></a>
          <a href="https://vk.com/s.montanarp" target="_blank"><img class="icons-header" src="icons/vk-logo-wh.svg"></a>
          <a href="#"><img class="icons-header" src="icons/telegram-wh.svg"></a>
        </div>
      </div>
      <div class="main-pic">
        <img src="images/slider1.png">
      </div>
    </div>

    <div id="second-page" class="second-page">
      <div class="our-serv">
        <a>Наши сервера:</a>
      </div>
        <div class="img-serv">
          <div class="first-info">
            <div class="first_serv">
              <h>Первый сервер</h>
              <p>Montana RolePlay</p>
            </div>
            <div class="online">
              <div class="star">
                <img src="icons/or-star.svg">
                <p>Онлайн: </p>
              </div>
              <div class="copy">
                <img src="icons/copy-ip-wh.svg">
                <div class="alert alert-success" id="successMessage">IP Скопирован!</div>
                <a id="clickboardCopy">Скопировать IP</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="third-page">
        <div id="third-page" class="our-serv">
          <a>Как начать играть?</a>
        </div>
          <div class="imgs-serv">
            <img src="images/man.png" class="man">
              <div class="box">
                <div class="box_step">
                  <div class="box_header">
                    <h>Шаг 1</h>
                  </div>
                  <div class="box_icon">
                    <h><img class="icons-header" src="icons/download-ic.svg"></h>
                  </div>
                </div>
                <div class="box_download">
                  <h>СКАЧАЙТЕ GTA SAN ANDREAS</h>
                </div>
                <div class="box_install">
                  <h>Установите GTA San Andreas на свой компьютер в любое удобное для вас место</h>
                </div>
                <div class="box_href">
                  <a href="https://pdalife.ru/grand-theft-auto-sa2-android-a7352.html" target="_blank">Скачать игру</a>
                </div>
              </div>
              <div class="box">
                <div class="box_step">
                  <h>Шаг 2</h>
                  <h><img class="icons-header" src="icons/download-ic.svg"></h>
                </div>
                <div class="box_download">
                  <h>СКАЧАЙТЕ МУЛЬТИПЛЕЕР</h>
                </div>
                <div class="box_install">
                  <h>Установите модификацию SAMP обязательно в папку с GTA SA Запустите его и введите свое имя</h>
                </div>
                <div class="box_href">
                  <a href="https://www.sa-mp.com/download.php" target="_blank">Скачать лаунчер</a>
                </div>
              </div>
              <div class="box">
                <div class="box_step">
                  <h>Шаг 3</h>
                  <h><img class="icons-header" src="icons/search-ic.svg"></h>
                </div>
                <div class="box_download">
                  <h>ПОДКЛЮЧИТЕСЬ К СЕРВЕРУ</h>
                </div>
                <div class="box_install">
                  <h>Добавьте наши сервера в избранное и подключитесь к одному из них</h>
                </div>
                <div class="box_href">
                  <a id="clickboardInput">Скопировать IP</a>
                </div>
              </div>
            <img src="images/woman.png" class="woman">
          </div>
      </div>

      <div id="fourth-page" class="fourth-page">
        <div class="our-serv">
          <a>Новости</a>
        </div>
        <div class="slider">
          <div class="slider__wrapper">
            <div class="slider__items">
              <div class="slider__item">
                <img class="img-fluid" src="images/slider1-ft.png" alt="c1">
                <!-- <a>text</a> -->
              </div>
              <div class="slider__item">
                <img class="img-fluid" src="images/slider2-ft.png" alt="c2">
              </div>
              <div class="slider__item">
                <img class="img-fluid" src="images/slider3-ft.png" alt="c3">
              </div>
              <div class="slider__item">
                <img class="img-fluid" src="images/slider4-ft.png" alt="c4">
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="ft">
          <div class="logo-ft">
            <img class="logo" src="icons/logo.svg" alt=""></img>
          </div>
          <div class="contacts">
            <h>Контакты</h>
            <a href="mailto:test@mail.ru" class="ft-txt">contact@gmail.com</a>
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

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="js/index.js"></script>
      <script src="js/slider.js"></script>
  </body>

</html>
