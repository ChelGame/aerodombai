<?php
  include ($_SERVER["DOCUMENT_ROOT"] . '/handler.php');
?>

<!DOCTYPE html>
<html lang="ru">

  <head>

    <script type="text/javascript" src="js/JQuery.js"></script>

    <link href="dist/css/datepicker.min.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>AeroDombay</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/script_style.css">

    <link rel="stylesheet" href="css/media.css">

    <script src="dist/js/datepicker.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>

  </head>

  <body>

  <?php
  echo $message;
  $message = '';
  ?>

    <header class="header__container">
      <img class="header_bg" src="img/slider_bg.png">
      <img id="slider_copter1" class="slider_copter " src="img/slider_copter1.png">
      <img id="slider_copter2" class="slider_copter dis_none" src="img/slider_copter2.png">
      <img id="slider_copter3" class="slider_copter dis_none" src="img/slider_copter3.png">

      <div class="header">
        <div id="header_pop" class="header_pop dis_none">
          <form class="order__form" action="index.php" method="post">
            <div class="input_arrows al_c copter_type_container">
              <select class="form_input border mb-20 mr-20 w-160" name="copter_type" placeholder="Тип вертолета" required>
                <option value="AS-350">AS-350</option>
                <option value="BO-105">BO-105</option>
              </select>
            </div>

            <div class="input_arrows al_c">
              <input class="form_input border quantity-num1 mr-20  mb-20 w-75" type="number" name="number" value="" placeholder="Число" required>
              <button class="quantity-arrow-minus1 arrow-minus" type="button" name="button"></button>
              <button class="quantity-arrow-plus1 arrow-plus" type="button" name="button"></button>
            </div>

            <div class="input_arrows al_c">
              <input type="text" class="datepicker-here border form_input mr-20  mb-20 w-130" required data-min-view="months" data-view="months" data-date-format="MM" placeholder="Месяц" name="month"/>
            </div>

            <div class="input_arrows al_c">
              <input class="form_input border quantity-num2 mr-20  mb-20 w-130" type="text" name="time" value="" placeholder="Время " required>
              <button class="quantity-arrow-minus2 arrow-minus" type="button" name="button"></button>
              <button class="quantity-arrow-plus2 arrow-plus" type="button" name="button"></button>
            </div>

            <input class="form_input border al_c mb-20 w-240" type="text" name="phone" value="" placeholder="Номер телефона" required>

            <textarea class="form_area border" name="discript" rows="8" cols="80" placeholder="Описание авиационных работ" required></textarea>

            <input class="form_submit input_arrows border as_s mr_6" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>

        <div class="header__head">
          <div class="header__logotype"></div>

          <div class="header_burger"></div>

          <div class="header__navigation header__navigation_i">
            <nav>
              <ul class="nav_list ml-70">
                <li class="nav_item"><a class="nav_link t-up l-act" href="index.php">Главная</a></li>
                <li class="nav_item"><a class="nav_link t-up" href="arenda.php">Аренда</a></li>
                <li class="nav_item"><a class="nav_link t-up" href="contacts.php">Контакты</a></li>
              </ul>
            </nav>
          </div>

          <a class="header_phone" target="_blank" href="tel: +79252913787"></a>

          <div class="add_block add_block_i">
            <ul class="ad_list">
              <li class="mb-25"><a class="nav_add" target="_blank" href="https://yandex.ru/maps/-/CKe3yOJY">Домбай, 1км от подъемника</a></li>
              <li class="ml-40"><a class="nav_tel" target="_blank" href="tel: +79252913787">+7 (925) 291 37 87</a></li>
            </ul>

            <button class="add_but" type="button" name="request">Запросить посадку</button>
          </div>
        </div>

        <div class="header__body">
          <div class="header__price">
            <div id="slider_text1" class="slider_text dis_none dop-option t-up">
              <div class="body_text_m dop-option_2">
                хватит мечтать
              </div>
              пора летать!
            </div>

            <div id="slider_text2" class="slider_text">
              <div class="price_container mb-50">
                <span class="price_block mb-5">Аренда</span>
                <span class="price_block">Вертолета</span>
              </div>

              <div class="price_container">
                <span class="price_block mb-5">1 час -</span>
                <span class="price_block">150 000 р.</span>
              </div>
            </div>

            <div id="slider_text3" class="body_container slider_text dis_none">
              Полет на военном
              вертолете
              <div class="body_text">
                всего за 7 000 р/чел
              </div>
            </div>

            <div id="slider_text_m1" class="slider_text_m slider_text_m1 dis_none t-up">
              <div class="body_text_m">
                хватит мечтать
              </div>
              пора летать!
            </div>

            <div id="slider_text_m2" class="slider_text_m slider_text_m2 ">
              <div>
                <p class="body_text_m2">
                  Полеты от 5 000 р/чел
                </p>
              </div>

              <p class="body_text_m2">
                1 Час – 150 000 р.
              </p>
            </div>

            <div id="slider_text_m3" class="slider_text_m slider_text_m3 dis_none">
              <p class="body_text_m3 body_text_m3_1 t-up">Скидка 25%</p>
              <p class="body_text_m3 body_text_m3_2">на полет на BO-105</p>
              <p class="body_text_m3 body_text_m3_3">акция действует до 31 января 2020 года</p>
            </div>

            <div class="header__navigation header__navigation_i_mob header__navigation_i">
              <nav>
                <ul class="nav_list_i nav_list ml-70">
                  <li class="nav_item"><a class="nav_link t-up l-act" href="index.php">Главная</a></li>
                  <li class="nav_item"><a class="nav_link t-up" href="arenda.php">Аренда</a></li>
                  <li class="nav_item"><a class="nav_link t-up" href="contacts.php">Контакты</a></li>
                </ul>
              </nav>
            </div>

            <button class="arend_btn" type="button" name="arend">Арендовать</button>
          </div>

          <div class="header__slide slide_btns">
            <button class="slide_btn slide_btn1" type="button" name="slide1"></button>
            <button class="slide_btn slide_btn2 s-act " type="button" name="slide2"></button>
            <button class="slide_btn slide_btn3" type="button" name="slide3"></button>
          </div>
        </div>
      </div>
    </header>

    <section class="aerodumbay aerodumbay_media">
      <div class="aero_container">
        <h2 class="aero_heading">AeroDombay – </h2>

        <p class="aero_text">немного о нас</p>

        <img class="aero_img_left" src="img/aero1.png" alt="">
      </div>

      <div class="aero__container_i">
        <div class="aero_info">
          <p class="info_info">
            <span class="info_span">AeroDombay – &nbsp; &nbsp;</span> новая современная вертолетная площадка, расположенная на горнолыжном курорте Домбай, в 1 км от подъемника. В 15 минутах от горнолыжного курорта Архыз. Так же в непосредственной близости горнолыжные курорты Эльбруса и Красной поляны.
          </p>
        </div>

        <div class="aero_info">
          <p class="info_info">
            <span class="info_span">AeroDombay – &nbsp; &nbsp;</span> это профессиональные летчики и инженеры, имеющие все соответствующие допуски и сертификаты.
          </p>
        </div>

        <div class="aero_info">
          <p class="info_info">
            <span class="info_span">AeroDombay – &nbsp; &nbsp;</span> это надежный воздушный флот европейских производителей вертолетов: AS-350 (Франция) и BO-105 (Германия)
          </p>
        </div>
      </div>
    </section>

    <section class="aerodumbay aerodumbay_l">
      <div class="aero__container_i">
        <div class="aero_info mr_210">
          <div class="info_info">
            <div class="mb_20">
              <span class="info_span">AS-350 – &nbsp; &nbsp;</span>Французский многоцелевой вертолёт.
            </div>

            <div class="mt_20">
              Технические характеристики:
            </div>
            <p><span class="info_special">Экипаж:</span> 1–2 пилота</p>
            <p><span class="info_special">Пассажировместимость:</span> 5  пассажиров</p>
            <p><span class="info_special">Максимальная взлётная масса:</span> 2250 кг</p>
            <p><span class="info_special">Объём топливных баков:</span> 540 л</p>
            <p><span class="info_special">Мощность двигателей:</span> 1 х 847 л.с. (1 х 632 кВт)</p>

            <div class="mt_20">
              Лётные характеристики
            </div>
            <p><span class="info_special">Максимально допустимая скорость:</span> 287 км/ч</p>
            <p><span class="info_special">Максимальная скорость:</span> 259 км/ч</p>
            <p><span class="info_special">дальность полета:</span> 661 км</p>
          </div>

          <a class="arend_btn arend_btn_i aero_btn" href="#header_pop">Арендовать</a>
        </div>
      </div>

      <div class="aero_container">
        <h2 class="aero_heading aero_heading_l">Наши вертолеты: </h2>
        <p class="aero_text aero_text_l">AS-350</p>
        <img class="aero_img_left ml_170" src="img/aero2.png" alt="">
      </div>
    </section>

    <section class="aerodumbay">
      <div class="aero_container">
        <h2 class="aero_heading">Наши вертолеты: </h2>
        <p class="aero_text">BO-105</p>
        <img class="aero_img_left" src="img/aero3.png" alt="">
      </div>

      <div class="aero__container_i">
        <div class="aero_info">
          <div class="info_info">
            <div class="mb_20">
              <span class="info_span">BO-105 – &nbsp; &nbsp;</span>Немецкий демилитаризированный военный вертолет.
            </div>

            <div class="mt_20">
              Технические характеристики:
            </div>
            <p><span class="info_special">Экипаж:</span> 1–2 пилота</p>
            <p><span class="info_special">Пассажировместимость:</span> 4  пассажиров</p>
            <p><span class="info_special">Максимальная взлётная масса:</span> 2300 кг</p>
            <p><span class="info_special">Объём топливных баков:</span> 570 л</p>
            <p><span class="info_special">Мощность двигателей:</span> 2 х 400 л.с. (2 х 294 кВт) </p>

            <div class="mt_20">
              Лётные характеристики
            </div>
            <p><span class="info_special">Максимально допустимая скорость:</span> 270 км/ч</p>
            <p><span class="info_special">Максимальная скорость:</span> 232 км/ч</p>
            <p><span class="info_special">дальность полета:</span> 656 км</p>
          </div>

          <a class="arend_btn arend_btn_i aero_btn" href="#header_pop">Арендовать</a>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__menu">
        <ul class="footer_list">
          <li class="footer_item">
            <a href="#">Главная</a>
          </li>

          <ul class="item_list">
            <li class="item_item">
              <a href="#">О нас</a>
            </li>

            <li class="item_item">
              <a href="#">Наши вертолеты</a>
            </li>
          </ul>

          <li class="footer_item">
            <a href="#">Аренда</a>
          </li>

          <ul class="item_list">
            <li class="item_item">
              <a href="#">Цены</a>
            </li>

            <li class="item_item">
              <a href="#">Маршруты</a>
            </li>

            <li class="item_item">
              <a href="#">Карта полетов</a>
            </li>
          </ul>

          <li class="footer_item">
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>

      <div class="footer__logo">
        <p class="logo_name mb-25">AeroDombay</p>

        <p class="logo_dis_f t-up">ваш путеводитель по небу кавказа</p>
      </div>

      <div class="footer_soc_i">
        <a class="soc_img img1" href="#"></a>
        <a class="soc_img img2" href="#"></a>
      </div>

      <div class="footer__contacts">
        <ul class="ad_list_f">
          <li class="mb-20"><a class="nav_add_f" target="_blank" href="https://yandex.ru/maps/-/CKe3yOJY">Домбай, 1км от подъемника</a></li>
          <li><a class="nav_tel_f" target="_blank" href="tel: +79252913787">+7 (925) 291 37 87</a></li>
        </ul>

        <div class="footer_net">
          <h3 class="footer_soc up">Мы в соцсетях</h3>
          <div class="soc_container">
            <a class="soc_img img1" href="#"></a>
            <a class="soc_img img2 ml_15" href="#"></a>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
