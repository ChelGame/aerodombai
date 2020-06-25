<?php
  if (!isset($_POST['copter_type'])) {
    include ($_SERVER["DOCUMENT_ROOT"] . '/handler.php');
  }
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

    <link href="https://fonts.googleapis.com/css?family=Federo&display=swap" rel="stylesheet">
  </head>

  <body>
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . '/handler.php') ?>

    <header class="header__container">
      <img class="header_bg" src="img/slider_bg.png">
      <img id="slider_copter1" class="slider_copter dis_none" src="img/slider_copter1.png">
      <img id="slider_copter2" class="slider_copter " src="img/slider_copter2.png">
      <img id="slider_copter3" class="slider_copter dis_none" src="img/slider_copter3.png">
      <div class="header">
        <div id="header_pop" class="header_pop dis_none">
          <form class="order__form" action="contacts.php" method="post">
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

            <textarea class="form_area border" name="discript" rows="8" cols="80" required placeholder="Описание авиационных работ"></textarea>

            <input class="form_submit input_arrows border as_s mr_6" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>

        <div class="header__head">
          <div class="header__logo">
            <p class="logo_name mb-25">AeroDombay</p>

            <p class="logo_dis t-up">ваш путеводитель по небу кавказа</p>
          </div>

          <div class="header_burger"></div>

          <a class="header_phone" target="_blank" href="tel: +79252913787"></a>

          <div class="header__navigation header__navigation_i">
            <nav>
              <ul class="nav_list ml-70">
                <li class="nav_item"><a class="nav_link t-up" href="index.php">Главная</a></li>
                <li class="nav_item"><a class="nav_link t-up" href="arenda.php">Аренда</a></li>
                <li class="nav_item"><a class="nav_link t-up l-act" href="contacts.php">Контакты</a></li>
              </ul>
            </nav>
          </div>

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
            <div class="header__navigation header__navigation_i_mob header__navigation_i">
              <nav>
                <ul class="nav_list_i nav_list ml-70">
                  <li class="nav_item"><a class="nav_link t-up" href="index.php">Главная</a></li>
                  <li class="nav_item"><a class="nav_link t-up" href="arenda.php">Аренда</a></li>
                  <li class="nav_item"><a class="nav_link t-up" href="contacts.php">Контакты</a></li>
                </ul>
              </nav>
            </div>

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

            <div id="slider_text_m2" class="slider_text_m slider_text_m2">
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

            <div class="header__slide header__slide_cont header__slide_contacts">
              <button class="arend_btn contacts_btn arend_btn_i" type="button" name="arend">Арендовать</button>
              <div class="slide_btns">
                <button class="slide_btn slide_btn1" type="button" name="slide1"></button>
                <button class="slide_btn slide_btn2 s-act" type="button" name="slide2"></button>
                <button class="slide_btn slide_btn3" type="button" name="slide3"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="address">
      <div class="cloud">
        <img src="img/cloud.png" alt="">
      </div>

      <div class="address_container">
        <p class="address_address">Курорт Домбай,  Трасса Мин. Воды – Домбай, не&nbsp;доезжая 800 м. до курорта, с правой сторны</p>
        <div class="address_tel">
          <p class="f_d">тел.: +7 (925) 979 08 18</p>
          <p>+7 (925) 291 37 87</p>
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
