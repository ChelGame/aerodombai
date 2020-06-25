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

  </head>

  <body>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/handler.php') ?>

    <header class="header__container">
      <img class="header_bg" src="img/slider_bg.png">
      <img id="slider_copter1" class="slider_copter dis_none" src="img/slider_copter1.png">
      <img id="slider_copter2" class="slider_copter " src="img/slider_copter2.png">
      <img id="slider_copter3" class="slider_copter dis_none" src="img/slider_copter3.png">

      <div class="header">
        <div id="header_pop" class="header_pop dis_none">
          <form class="order__form" action="arenda.php" method="post">
            <div class="input_arrows al_c copter_type_container">
              <select class="form_input border mb-20 mr-20 w-160" name="copter_type" placeholder="Тип вертолета">
                <option value="">AS-350</option>
                <option value="">BO-105</option>
              </select>
            </div>

            <div class="input_arrows al_c">
              <input class="form_input border quantity-num1 mr-20  mb-20 w-75" type="number" name="number" value="" placeholder="Число">
              <button class="quantity-arrow-minus1 arrow-minus" type="button" name="button"></button>
              <button class="quantity-arrow-plus1 arrow-plus" type="button" name="button"></button>
            </div>

            <div class="input_arrows al_c">
              <input type="text" class="datepicker-here border form_input mr-20  mb-20 w-130" data-min-view="months" data-view="months" data-date-format="MM" placeholder="Месяц" name="month"/>
            </div>

            <div class="input_arrows al_c">
              <input class="form_input border quantity-num2 mr-20  mb-20 w-130" type="text" name="time" value="" placeholder="Время ">
              <button class="quantity-arrow-minus2 arrow-minus" type="button" name="button"></button>
              <button class="quantity-arrow-plus2 arrow-plus" type="button" name="button"></button>
            </div>

            <input class="form_input border al_c mb-20 w-240" type="text" name="phone" value="" placeholder="Номер телефона">

            <textarea class="form_area border" name="discript" rows="8" cols="80" placeholder="Описание авиационных работ"></textarea>

            <input class="form_submit input_arrows border as_s mr_6" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>

        <div class="header__head">
          <div class="header__logo">
            <p class="logo_name mb-25">AeroDumbay</p>

            <p class="logo_dis t-up">ваш путеводитель по небу кавказа</p>
          </div>

          <div class="header_burger"></div>

          <a class="header_phone" target="_blank" href="tel: +79252913787"></a>

          <div class="header__navigation header__navigation_i">
            <nav>
              <ul class="nav_list ml-70">
                <li class="nav_item"><a class="nav_link t-up" href="index.php">Главная</a></li>
                <li class="nav_item"><a class="nav_link t-up l-act" href="arenda.php">Аренда</a></li>
                <li class="nav_item"><a class="nav_link t-up" href="contacts.php">Контакты</a></li>
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

    <section class="order">
      <h2 class="order__heading">On-line заказ:</h2>

      <form class="order__form" action="arenda.php" method="post">
        <div class="input_arrows al_c copter_type_container">
          <select class="form_input border mb-20 mr-20 w-160" name="copter_type" placeholder="Тип вертолета" required>
            <option value="">AS-350</option>
            <option value="">BO-105</option>
          </select>
        </div>

        <div class="input_arrows al_c">
          <input class="form_input quantity-num1 mr-20  mb-20 w-75" type="number" name="number" value="" placeholder="Число" required>
          <button class="quantity-arrow-minus1 arrow-minus" type="button" name="button"></button>
          <button class="quantity-arrow-plus1 arrow-plus" type="button" name="button"></button>
        </div>

        <div class="input_arrows al_c">
          <input type="text" class="datepicker-here form_input mr-20  mb-20 w-130" name="month" data-min-view="months" required data-view="months" data-date-format="MM yyyy" placeholder="Месяц" />
        </div>

        <div class="input_arrows al_c">
          <input class="form_input quantity-num2 mr-20  mb-20 w-130" type="text" name="time" value="" placeholder="Время " required>
          <button class="quantity-arrow-minus2 arrow-minus" type="button" name="button"></button>
          <button class="quantity-arrow-plus2 arrow-plus" type="button" name="button"></button>
        </div>

        <input class="form_input al_c mb-20 w-240" type="text" name="phone" value="" placeholder="Номер телефона" required>

        <textarea class="form_area" name="discript" rows="8" cols="80" placeholder="Описание авиационных работ" required></textarea >

        <input class="form_submit input_arrows" type="submit" name="submit" value="Подать заявку">
      </form>
    </section>

    <section class="geo">
      <div class="geo__data">
        <h2 class="geo__heading">Наша география:</h2>
        <ul class="geo_name">
          <li>Архыз</li>
          <li>Эльбрус</li>
          <li>Красная поляна</li>
          <li>аэропорт
          Минеральные Воды</li>
          <li>Нальчик</li>
          <li>Черкесск</li>
          <li>Кисловодск</li>
          <li>и тд.</li>
        </ul>
      </div>

      <div class="geo__path">
        <h2 class="geo__heading">Маршруты облетов:</h2>
        <ul class="geo_name">
          <li class="geo_item">Домбай — Архыз — Эльбрус— Домбай </li>
          <li>Домбай — вокруг Эльбруса— Домбай </li>
        </ul>
      </div>
    </section>

    <section class="price">
      <h2 class="price__heading">Цены на короткие полеты*:</h2>

      <div class="price__container">
        <div class="price_info">
          <p class="info_time">5 мин</p>
          <p class="info_money">От 5 000 р. </p>
        </div>

        <div class="price_info">
          <p class="info_time">10 мин</p>
          <p class="info_money">От 8 000 р. </p>
        </div>

        <div class="price_info">
          <p class="info_time">20 мин</p>
          <p class="info_money">От 12 000 р. </p>
        </div>

        <div class="price_info">
          <p class="info_time">30 мин</p>
          <p class="info_money">От 17 000 р. </p>
        </div>

        <div class="price_info">
          <p class="info_time">40 мин</p>
          <p class="info_money">От 20 000 р. </p>
        </div>

        <div class="price_info">
          <p class="info_time">60 мин</p>
          <p class="info_money">От 30 000 р. </p>
        </div>
      </div>

      <p class="price__dop">*Цена за 1 человека при полной посадке – 5 человек</p>
    </section>

    <section class="picnic">
      <div class="picnic__container">
        <h2 class="picnic__heading">Хочешь полетать, но нет компании?</h2>
        <p class="picnic__info">Мы поможем собрать мини-группу для короткого полета. Заполни заявку: укажи желаемую дату полета, длительность полета&nbsp;и количество человек. При наборе группы, мы свяжемся с тобой&nbsp;и обсудим детали. </p>
      </div>

      <div class="mini_group">
        <form class="group_form" action="arenda.php" method="post">
          <div class="input_arrows mlr-20">
            <input class="form_input quantity-num3 mb-20 mr-20 w-160" name="count_people" placeholder="Кол-во чел." required>
            <button class="quantity-arrow-minus3 arrow-minus" type="button" name="button"></button>
            <button class="quantity-arrow-plus3 arrow-plus" type="button" name="button"></button>
          </div>

          <div class="input_arrows mlr-20">
            <input class="form_input quantity-num4 mr-20  mb-20 w-75" type="number" name="number" value="" placeholder="Число" required>
            <button class="quantity-arrow-minus4 arrow-minus" type="button" name="button"></button>
            <button class="quantity-arrow-plus4 arrow-plus" type="button" name="button"></button>
          </div>

          <div class="input_arrows mlr-20">
            <input type="text" class="datepicker-here form_input mr-20  mb-20 w-130" name="month" data-min-view="months" data-view="months" required data-date-format="MM yyyy" placeholder="Месяц" />
          </div>

          <div class="input_arrows mlr-20">
            <input class="form_input quantity-num5 mr-20  mb-20 w-130" type="text" name="time" value="" placeholder="Время " required>
            <button class="quantity-arrow-minus5 arrow-minus" type="button" name="button"></button>
            <button class="quantity-arrow-plus5 arrow-plus" type="button" name="button"></button>
          </div>

          <input class="form_input mb-20 w-240 mlr-20" type="text" name="phone"  placeholder="Номер телефона" required>

          <div class="group__input_container">
            <input class="group__input" type="submit" name="group" value="Подать заявку на мини-группу">
          </div>
        </form>
      </div>

      <button class="picnic__button" type="button" name="picnic">Подать заявку на мини-группу</button>

      <div class="picnic__dop">
        <h2 class="dop_heading">Heli-picnic</h2>
        <p class="dop_price">От 60 000 р.</p>
      </div>

      <div class="picnic__container">
        <p class="container_text">Мы доставим вас на одну из красивейших вершин Кавказких гор, где вы сможете насладиться бутылочкой холодного игристого вина и легкими закусками.</p>
        <p class="container_text2">Испытайте непердаваемые ощущения, когда огромные природные просторы лежат у ваших ног!</p>
      </div>

      <div class="picnic__advantages">
        <span class="advantages1">Romantic</span>
        <span class="advantages2">Family time</span>
        <span class="advantages3">Wedding story</span>
      </div>

      <div class="order__picnic">
        <form class="group_form" action="arenda.php" method="post">
          <div class="input_arrows mlr-20">
            <input class="form_input quantity-num6 mb-20 mr-20 w-160" name="count_people" placeholder="Кол-во чел." required>
            <button class="quantity-arrow-minus6 arrow-minus" type="button" name="button"></button>
            <button class="quantity-arrow-plus6 arrow-plus" type="button" name="button"></button>
          </div>

          <div class="input_arrows mlr-20">
            <input class="form_input quantity-num7 mr-20  mb-20 w-75" type="number" name="number" value="" placeholder="Число" required>
            <button class="quantity-arrow-minus7 arrow-minus" type="button" name="button"></button>
            <button class="quantity-arrow-plus7 arrow-plus" type="button" name="button"></button>
          </div>

          <div class="input_arrows mlr-20">
            <input type="text" name="month" class="datepicker-here form_input mr-20  mb-20 w-130" data-min-view="months" data-view="months" required data-date-format="MM yyyy" placeholder="Месяц" />
          </div>

          <input class="form_input mb-20 w-240 mlr-20" type="text" name="phone"  placeholder="Номер телефона" required>

          <div class="group__input_container">
            <input class="group__input" type="submit" name="order__picnic" value="Заказать пикник" required>
          </div>
        </form>
      </div>
      <button class="picnic__order" type="button" name="order__picnic">Заказать пикник</button>
    </section>

    <section class="place">
      <div class="place__element">
        <div class="element_img_container">
          <span class="element_text">Архыз</span>
          <img class="element_img" src="img/place1.png" alt="">
        </div>

        <div class="place__info">
          <p class="info_text">Долина Архыз расположена на&nbsp;высоте между 1440 и 3300 метров над уровнем моря.&nbsp;Ар­хыз в пе­ре­во­де с ка­ра­ча­ев­ско­го язы­ка озна­ча­ет «кра­си­вая де­вуш­ка». Высшие точки региона — горы Пшиш и София.</p>
          <form class="info_form" action="arenda.php" method="post">
            <div class="input_info_arrows">
              <select class="info_input info1" type="text" name="copter_type" value="" placeholder="AS-350 (до 5 чел)" required>
                <option value="">AS-350 (до 5 чел)</option>
                <option value="">BO-105 (до 4 чел)</option>
              </select>
            </div>
            <input type="text" class="datepicker-here info_input info2" name="month" data-min-view="months" required data-view="months" data-date-format="MM yy" />
            <input class="info_input info3" type="text" name="phone" value="" placeholder="Номер телефона" required>
            <input class="info_input info4" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>
      </div>

      <div class="place__element">
        <div class="element_img_container">
          <span class="element_text">Эльбрус</span>
          <img class="element_img" src="img/place2.png" alt="">
        </div>

        <div class="place__info">
          <p class="info_text">Стратовулкан на Кавказе&nbsp;(5642 метра над уровнем&nbsp;моря) — самая высокая горная вершина России и Европы. Входит в список высочайших вершин частей света «Семь вершин».</p>
          <form class="info_form" action="arenda.php" method="post">
            <div class="input_info_arrows">
              <select class="info_input info1" type="text" name="copter_type" value="" placeholder="AS-350 (до 5 чел)" required>
                <option value="">AS-350 (до 5 чел)</option>
                <option value="">BO-105 (до 4 чел)</option>
              </select>
            </div>
            <input type="text" class="datepicker-here info_input info2" name="month" data-min-view="months" required data-view="months" data-date-format="MM yyyy" />
            <input class="info_input info3" type="text" name="phone" value="" placeholder="Номер телефона" required>
            <input class="info_input info4" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>
      </div>

      <div class="place__element">
        <div class="element_img_container">
          <span class="element_text">Красная поляна</span>
          <img class="element_img" src="img/place3.png" alt="">
        </div>

        <div class="place__info">
          <p class="info_text">Посёлок со всех сторон окружён высокими горами:&nbsp;с северо-запада горой Ачишхо и её отрогами, с юго-востока — хребтом Аибга (его высшей точкой является гора Каменный Столб (2509,7 м).</p>
          <form class="info_form" action="arenda.php" method="post">
            <div class="input_info_arrows">
              <select class="info_input info1" type="text" name="copter_type" value="" placeholder="AS-350 (до 5 чел)" required>
                <option value="">AS-350 (до 5 чел)</option>
                <option value="">BO-105 (до 4 чел)</option>
              </select>
            </div>
            <input type="text" class="datepicker-here info_input info2" name="month" data-min-view="months" required data-view="months" data-date-format="MM yyyy" / >
            <input class="info_input info3" type="text" name="phone" value="" placeholder="Номер телефона" required>
            <input class="info_input info4" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>
      </div>

      <div class="place__element">
        <div class="element_img_container">
          <span class="element_text">Ваш маршрут</span>
          <img class="element_img" src="img/place4.png" alt="">
        </div>

        <div class="place__info">
          <p class="info_text">Вы можете придумать свой маршрут. Увидеть с высоты птичего полета любую вершину горного Кавказа. </p>
          <form class="info_form" action="arenda.php" method="post">
            <div class="input_info_arrows">
              <select class="info_input info1" type="text" name="copter_type" value="" required>
                <option value="">AS-350 (до 5 чел)</option>
                <option value="">BO-105 (до 4 чел)</option>
              </select>
            </div>
            <input type="text" class="datepicker-here info_input info2" name="month" data-min-view="months" required data-view="months" data-date-format="MM yyyy" />
            <input class="info_input info3" type="text" name="phone" required value="" placeholder="Номер телефона">
            <input class="info_input info4" type="submit" name="submit" value="Подать заявку">
          </form>
        </div>
      </div>
    </section>

    <section class="another">
      <h2 class="another__headig">А так же:</h2>

      <div class="another__container">
        <div class="another__block">
          <img src="img/ano1.png" alt="">
          <p class="another_text">Бизнес встречи</p>
        </div>

        <div class="another__block">
          <img src="img/ano2.png" alt="">
          <p class="another_text">Фото-сессии</p>
        </div>

        <div class="another__block">
          <img src="img/ano3.png" alt="">
          <p class="another_text">Свадьбы</p>
        </div>

        <div class="another__block">
          <img src="img/ano4.png" alt="">
          <p class="another_text">Кино-съемки</p>
        </div>
      </div>

      <button class="another_btn" type="button" name="price_list">Скачать прайс-лист</button>
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

    <script src="dist/js/datepicker.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>

  </body>

</html>
