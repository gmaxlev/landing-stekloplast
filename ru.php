<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Представительство завода Stekloplast в Киеве и области</title><!-- ===============-->
    <!-- СТИЛИ И СКРИПТЫ-->
    <!-- ===============-->
    <meta property="og:image" content="img/favicon.ico">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/mod.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
   <!-- <script src="js/wow.min.js"></script>-->
    <script src="js/jquery.validate.min.js"></script><!-- =====================-->
    <!-- ЗАГРУЗКА SVG СПРАЙТОВ-->
    <!-- =====================-->
    <script>
        $(document).ready(function() {

            var req = new XMLHttpRequest();

            req.onload = function(e) {
                var svg = document.implementation.createHTMLDocument('');
                svg.body.innerHTML = e.target.response.replace('<svg ', '<svg style="display: none"');
                document.body.appendChild(svg.body.firstElementChild);
                svg = null;
            };

            req.open('GET', './img/sprite.defs.svg', true);

            req.responseType = 'text';

            req.send();

        });
    </script>

<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          
            ga('create', 'UA-163916879-1', 'auto');
            ga('send', 'pageview');
          setTimeout("ga('send','event','Engaged users','More than 15 seconds')",15000); 
          </script>
</head>

<body>
    <!-- ============================-->
    <!-- ФОРМА "РАССЧИТАТЬ СТОИМОСТЬ"-->
    <!-- ============================-->
    <div class="modal" id="modal-1">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="win">
                <button class="win__close"></button>
                <div class="win__header">Заполните форму</div>
                <div class="win__subheader">Мы перезвоним, ответим на все вопросы, поможем с выбором и рассчитаем окончательную стоимость</div>
                <form class="win__form modal-form-simple" action="" name="Рассчитать стоимость">
                    <div class="input-text"><img src="img/icons8-male_user.png" alt="" /><input type="text" name="name" placeholder="Ваше имя" /></div>
                    <div class="input-text"><img src="img/icons8-phonelink_ring.png" alt="" /><input class="phone-input" type="text" name="phone" placeholder="Ваше имя" /></div><button class="button button_a" type="submit">Рассчитать стоимость</button>
                </form>
                <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /><span>Спасибо!</span><br>Мы вам перезвоним.</div>
                </div>
                <div class="formcomplete formcomplete_error">Не удалось отправить.</div>
                <p class="center">Или напишите в удобный мессенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div>
     <!-- ============================-->
    <!-- ФОРМА "РАССЧИТАТЬ ПОПАП"-->
    <!-- ============================-->
    <div class="modal" id="modal-5">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="win">
                <button class="win__close"></button>
                <div class="win__header">Заполните форму</div>
                <div class="win__subheader">Мы перезвоним, ответим на все вопросы, поможем с выбором и рассчитаем окончательную стоимость</div>
                <form class="win__form modal-form-simple" action="" name="Рассчитать стоимость попап">
                    <div class="input-text"><img src="img/icons8-male_user.png" alt="" /><input type="text" name="name" placeholder="Ваше имя" /></div>
                    <div class="input-text"><img src="img/icons8-phonelink_ring.png" alt="" /><input class="phone-input" type="text" name="phone" placeholder="Ваше имя" /></div><button class="button button_a" type="submit">Рассчитать стоимость</button>
                </form>
                <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /><span>Спасибо!</span><br>Мы вам перезвоним.</div>
                </div>
                <div class="formcomplete formcomplete_error">Не удалось отправить.</div>
                <p class="center">Или напишите в удобный мессенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div>
    <!-- ============================-->
    <!-- ФОРМА "ПОДОБРАТЬ ПРОФИЛЬ"-->
    <!-- ============================-->
    <div class="modal" id="modal-2">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="win">
                <button class="win__close"></button>
                <div class="win__header">Заполните форму</div>
                <div class="win__subheader">Мы перезвоним, ответим на все вопросы, поможем с выбором и рассчитаем окончательную стоимость</div>
                <form class="win__form modal-form-simple" action="" name="Подобрать профиль">
                    <div class="input-text"><img src="img/icons8-male_user.png" alt="" /><input type="text" name="name" placeholder="Ваше имя" /></div>
                    <div class="input-text"><img src="img/icons8-phonelink_ring.png" alt="" /><input class="phone-input" type="text" name="phone" placeholder="Ваше имя" /></div><button class="button button_a" type="submit">Рассчитать стоимость</button>
                </form>
                <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /><span>Спасибо!</span><br>Мы вам перезвоним.</div>
                </div>
                <div class="formcomplete formcomplete_error">Не удалось отправить.</div>
                <p class="center">Или напишите в удобный мессенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div><!-- ============================-->
    <!-- ФОРМА "ОФОРМИТЬ РАССРОЧКУ"-->
    <!-- ============================-->
    <div class="modal" id="modal-3">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="win">
                <button class="win__close"></button>
                <div class="win__header">Заполните форму</div>
                <div class="win__subheader">Мы перезвоним, ответим на все вопросы и расскажем подробнее об условиях</div>
                <form class="win__form modal-form-simple" action="" name="Оформить рассрочку">
                    <div class="input-text"><img src="img/icons8-male_user.png" alt="" /><input type="text" name="name" placeholder="Ваше имя" /></div>
                    <div class="input-text"><img src="img/icons8-phonelink_ring.png" alt="" /><input class="phone-input" type="text" name="phone" placeholder="Ваше имя" /></div><button class="button button_a" type="submit">Рассчитать стоимость</button>
                </form>
                <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /><span>Спасибо!</span><br>Мы вам перезвоним.</div>
                </div>
                <div class="formcomplete formcomplete_error">Не удалось отправить.</div>
                <p class="center">Или напишите в удобный мессенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div><!-- ============================-->
    <!-- ФОРМА "ЗАКАЗАТЬ УСЛУГУ"-->
    <!-- ============================-->
    <div class="modal" id="modal-4">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="win">
                <button class="win__close"></button>
                <div class="win__header">Заполните форму</div>
                <div class="win__subheader">Мы перезвоним, ответим на все вопросы и назначим время приезда</div>
                <form class="win__form modal-form-simple" action="" name="Заказать услугу">
                    <div class="input-text"><img src="img/icons8-male_user.png" alt="" /><input type="text" name="name" placeholder="Ваше имя" /></div>
                    <div class="input-text"><img src="img/icons8-phonelink_ring.png" alt="" /><input class="phone-input" type="text" name="phone" placeholder="Ваше имя" /></div><button class="button button_a" type="submit">Рассчитать стоимость</button>
                </form>
                <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /><span>Спасибо!</span><br>Мы вам перезвоним.</div>
                </div>
                <div class="formcomplete formcomplete_error">Не удалось отправить.</div>
                <p class="center">Или напишите в удобный мессенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div><!-- ============-->
    <!-- КНОПКА ВВЕРХ-->
    <!-- ============-->
    <div class="pageup"><span>Подняться вверх</span><img src="img/up.png" alt="" /></div><!-- =========-->
    <!-- CONTAINER-->
    <!-- =========-->
    <div class="wrapper">
        <!-- =============-->
        <!-- MOBILE HEADER-->
        <!-- =============-->
        <div class="mobheader">
            <div class="container mobheader__content">
                <div class="mobheader__logo"><img src="img/logo.png" alt="" /></div>
                <div class="mobheader__contacts">
                    <div class="mobcontacts"><a class="mobcontacts__item" href="tel:0671010313" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(067) <b>10-10-313</b></span></a><a class="mobcontacts__item" href="tel:0500350403" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(050) <b>035-04-03</b></span></a><a class="mobcontacts__item" href="tel:0639192223" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(063) <b>919-22-23</b></span></a><a class="mobcontacts__item" href="tel:0442213653" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(044) <b>221-36-53</b></span></a></div>
                </div>
            </div>
        </div><!-- ======-->
        <!-- HEADER-->
        <!-- ======-->
        <div class="header wow fadeInDown" data-wow-delay="0.2s">
            <div class="container">
                <div class="header__content">
                    <div class="header__logo">
                        <div class="logo">
                            <div class="logo__image"><img src="img/logo.png" alt="" /></div>
                            <div class="logo__text">Представительство завода Stekloplast <br>в Киеве и области. Окна по правилам с 1997 года</div>
                            <div class="logo__social"><a href="https://www.facebook.com/stekloplastkyiv"><img src="img/icons8_facebook_old_26px.png" alt="" /></a><a href="https://www.instagram.com/stekloplast_kyiv"><img src="img/icons8_instagram_26px.png" alt="" /></a><a href="/">UA</a></div>
                        </div>
                    </div>
                    <div class="header__contacts">
                        <div class="contacts"><a class="contacts__item" href="tel:0671010313" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(067) <b>10-10-313</b></span></a><a class="contacts__item" href="tel:0500350403" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(050) <b>035-04-03</b></span></a><a class="contacts__item" href="tel:0639192223" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(063) <b>919-22-23</b></span></a><a class="contacts__item" href="tel:0442213653" onclick="ga('send', 'event', 'phone', 'call')"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(044) <b>221-36-53</b></span></a></div>
                    </div>
                </div>
            </div>
        </div><!-- ===========-->
        <!-- ПРИВЕТСТВИЕ-->
        <!-- ===========-->
        <div class="welcome">
            <div class="container container_rel">
                <div class="decor decor_6"><img src="img/lines/lines1.png" alt="" /></div>
                <div class="decor decor_7"><img src="img/lines/lines2.png" alt="" /></div>
                <div class="decor decor_8"><img src="img/lines/lines3.png" alt="" /></div>
                <div class="intro">
                    <div class="intro__content">
                        <h1 class="intro__header wow fadeInUp">
                        <?php
$title = $_GET['utm_content']; 
if($title == 'balcon') {$title_text = 'Балконы и лоджии от производителя';}
elseif($title == 'balcon_slide') {$title_text = 'Раздвижные балконы от производителя';}
elseif($title == 'doors') {$title_text = 'Металлопластиковые двери от производителя';}
elseif($title == 'windows_doors') {$title_text = 'Окна и двери от производителя';}
elseif($title == 'kiev') {$title_text = 'Металлопластиковые окна в Киеве и области';}
elseif($title == 'packs') {$title_text = 'Стеклопакеты от производителя';}
elseif($title == 'install') {$title_text = 'Производство и установка пластиковых окон';}
elseif($title == 'aluplast') {$title_text = 'Окна Aluplast от производителя';}
elseif($title == 'wds') {$title_text = 'Окна WDS от производителя';}
elseif($title == 'credit') {$title_text = 'Окна в рассрочку от производителя';}
else{$title_text = 'Металлопластиковые окна от производителя';}
echo $title_text;
?> </h1>
                        <div class="intro__promo wow fadeInUp" data-wow-delay="0.2s"><img src="img/icons8_discount_50px.png" alt="" />
                            <div>Только <b>до <?php echo date('t.m'); ?></b> акция: <br>5-камерный профиль по цене 3-камерного!</div>
                        </div>
                        <div class="intro__act wow fadeInUp" data-wow-delay="0.4s"><button class="button button_a" data-modal="modal-1">Рассчитать стоимость</button></div>
                    </div>
                    <div class="intro__decor"><img class="wow fadeInRight" src="img/profile.png" alt="" data-wow-delay="0.4s" />
                        <div class="intro__badge intro__badge_1 badge wow zoomIn" style="background-image:url(img/Badge05.png)" data-wow-delay="0.8s">
                            <div class="badge__percent">0<span>%</span></div>
                            <div class="badge__name">Рассрочка</div>
                        </div>
                        <div class="intro__badge intro__badge_2 badge wow zoomIn" style="background-image:url(img/Badge06.png)" data-wow-delay="1.2s">
                            <div class="badge__image"><img src="img/badge_icon.png" alt="" /></div>
                            <div class="badge__name">Ощадний <br>дім<div class="badge__icon"><img src="img/logo_b.png" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ===========================-->
        <!-- ВЫБЕРЕТЕ ЧТО ВАС ИНТЕРЕСУЕТ-->
        <!-- ===========================-->
        <section class="section">
            <div class="container container_rel">
                <div class="decor decor_9"><img src="img/lines/lines4.png" alt="" /></div>
                <div class="decor decor_10"><img src="img/lines/lines5.png" alt="" /></div>
                <div class="header-wadd wow fadeInUp">
                    <div class="header-blcs__header">
                        <div class="section-header">Выберите, <br>что вас интересует</div>
                    </div>
                    <div class="header-wadd__add" id="countries-list"><button class="button button_b" data-counrty="germany">Германия</button> <button class="button button_c" data-counrty="ukrainer">Украина</button></div>
                </div>
                <div class="select-linelist">
                    <button with-countries class="button button_d button_d_active wow zoomIn" data-wow-delay="0.2s" data-prodtype="products-windows">Окна</button>
                    <button class="button button_d wow zoomIn" data-wow-delay="0.3s" data-prodtype="products-balconies">Балконы</button>
                    <button class="button button_d wow zoomIn" data-wow-delay="0.4s" data-prodtype="products-door">Двери</button>
                    <button class="button button_d wow zoomIn" data-wow-delay="0.5s" data-prodtype="products-partitions">Перегородки</button>
                    <button class="button button_d wow zoomIn" data-wow-delay="0.6s" data-prodtype="products-sills">Подоконники</button>
                </div>
            </div>
        </section><!-- ========-->
        <!-- ПРОДУКТЫ-->
        <!-- ========-->
        <section class="section section_light" id="allproducts">
            <div class="prodlist">
                <!-- ====-->
                <!-- ОКНА-->
                <!-- ====-->
                <div class="prodlist__item" id="products-windows">
                    <div class="countries">
                       <!-- ========-->
                        <!-- ГЕРМАНИЯ-->
                        <!-- ========-->
                        <div class="countries__item">
                                <div class="products-sliderjs">
                            <div class="container container_rel">
                                <div class="decor decor_11"><img src="img/lines/lines6.png" alt="" /></div>
                                <div class="product-nav">
                                    <div class="navbts"><button class="navbts__next" id="product-prev"></button><button class="navbts__prev" id="product-next"></button></div>
                                </div>
                                <div class="products-list"> <!-- ========-->
                                    <!-- SP 8000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title wow fadeInUp"> Окно SP 8000</div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product wow fadeInLeft"><img src="img/products/sp8000.png" alt="" /></div>
                                            </div>
                                            <div class="product__text wow fadeInRight">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для современных коттеджей, частных домов и элитных жилых комплексов</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Профиль</div>
                                                        <div class="props__value">Немецкий Aluplast Ideal 8000 (6 воздушных камер/
                                                                3 контура уплотнения/папирусно белый улотнитель)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Стеклопакет</div>
                                                        <div class="props__value">Мультифункциональный стеклопакет Guardian Clima                                    Guard Solar (48 мм + Argon)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                        <div class="props__value">1,22 c*м2/Вт</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Шумоизоляция</div>
                                                        <div class="props__value">34 дБ</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Толщина профиля</div>
                                                        <div class="props__value">85 мм</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Гарантия</div>
                                                        <div class="props__value">5 лет</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.2s">
                                                <div class="params__name">Сохранение тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.4s">
                                                <div class="params__name">Защита от солнца</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.6s">
                                                <div class="params__name">Защита от шума</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.8s">
                                                <div class="params__name">Защита от взлома</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header wow fadeInUp">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
<!-- ========-->
                                    <!-- SP 7000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title wow fadeInUp"> Окно SP 7000</div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product wow fadeInLeft"><img src="img/products/sp7000.png" alt="" /></div>
                                                </div>
                                                <div class="product__text wow fadeInRight">
                                                    <div class="props">
                                                        <div class="props__item">
                                                            <div class="props__name">Назначение</div>
                                                            <div class="props__value">Для современных коттеджей, частных домов и элитных жилых комплексов</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Профиль</div>
                                                            <div class="props__value">Немецкий Aluplast Ideal 7000 (6 воздушных камер/
                                                                    3 контура уплотнения/папирусно белый улотнитель)</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Стеклопакет</div>
                                                            <div class="props__value">Мультифункциональный стеклопакет Guardian Clima                                    Guard Solar (48 мм + Argon)</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                            <div class="props__value">1,4 c*м2/Вт</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Шумоизоляция</div>
                                                            <div class="props__value">46 дБ</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Толщина профиля</div>
                                                            <div class="props__value">85 мм</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Гарантия</div>
                                                            <div class="props__value">5 лет</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                            <div class="params">
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.2s">
                                                    <div class="params__name">Сохранение тепла</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.4s">
                                                    <div class="params__name">Защита от солнца</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.6s">
                                                    <div class="params__name">Защита от шума</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 40%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.8s">
                                                    <div class="params__name">Защита от взлома</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 100%"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="litle-header wow fadeInUp">Дополнительные опции</div>
                                            <div class="options">
                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                            </div>
                                            <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div>

<!-- ========-->
                                    <!-- SP 4000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Окно SP 4000 </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp4000.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для квартир и домов с автономным отоплением</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Профиль</div>
                                                        <div class="props__value">Немецкий профиль Aluplast Ideal 4000 (5 воздушных                                    камер/папирусно белый уплотнитель)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Стеклопакет</div>
                                                        <div class="props__value">Энергосберегающий/Мультифункциональный/с Argon</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                        <div class="props__value">0,75 c*м2/Вт</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Шумоизоляция</div>
                                                        <div class="props__value">32 дБ</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Толщина профиля</div>
                                                        <div class="props__value">70 мм</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Гарантия</div>
                                                        <div class="props__value">5 лет</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Сохранение тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от солнца</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от шума</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от взлома</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                    <!-- ========-->
                                    <!-- SP 2000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Окно SP 2000 </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp2000.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для современных коттеджей, частных домов и элитных жилых комплексов</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Профиль</div>
                                                        <div class="props__value">Немецкий Aluplast Ideal 2000 New (3 воздушных                                                 камеры/ черный уплотнитель)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Стеклопакет</div>
                                                        <div class="props__value">Однокамерный мультифункциональный

                                                                Guardian Clima Guard Solar</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                        <div class="props__value">0,6 c*м2/Вт</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Шумоизоляция</div>
                                                        <div class="props__value">30 дБ</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Толщина профиля</div>
                                                        <div class="props__value">60 мм</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Гарантия</div>
                                                        <div class="props__value">5 лет</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Сохранение тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от солнца</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от шума</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от взлома</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                         <!-- =======-->
                        <!-- УКРАИНА-->
                        <!-- =======-->
                        <div class="countries__item">
                                <div class="products-sliderjs">
                            <div class="container container_rel">
                                <div class="decor decor_11"><img src="img/lines/lines6.png" alt="" /></div>
                                <div class="product-nav">
                                    <div class="navbts"><button class="navbts__next" id="product-prev"></button><button class="navbts__prev" id="product-next"></button></div>
                                </div>
                                <div class="products-list"> <!-- =======-->
                                    <!-- SP8-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title wow fadeInUp"> Окно SP 8 SERIES </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product wow fadeInLeft"><img src="img/products/sp8.png" alt="" /></div>
                                            </div>
                                            <div class="product__text wow fadeInRight">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для современных коттеджей, частных домов и элитных жилых комплексов</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Профиль</div>
                                                        <div class="props__value">WDS 8 Series (6 воздушных камер, 3 контура уплотнения /серый уплотнитель)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Стеклопакет</div>
                                                        <div class="props__value">Мультифункциональный Guardian Clima Guard Solar (42 мм + Argon)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                        <div class="props__value">1,45 c*м2/Вт</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Шумоизоляция</div>
                                                        <div class="props__value">34 дБ</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Толщина профиля</div>
                                                        <div class="props__value">82 мм</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Гарантия</div>
                                                        <div class="props__value">5 лет</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.2s">
                                                <div class="params__name">Сохранение тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.4s">
                                                <div class="params__name">Защита от солнца</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.6s">
                                                <div class="params__name">Защита от шума</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.8s">
                                                <div class="params__name">Защита от взлома</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header wow fadeInUp">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>  <!-- =======-->
                                    <!-- SP7-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Окно SP 7 SERIES </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp7.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для квартир и домов с автономным отоплением</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Профиль</div>
                                                        <div class="props__value">WDS 7 Series (6 воздушных камер/серый уплотнитель)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Стеклопакет</div>
                                                        <div class="props__value">Двухкамерный мультифункциональный

                                                                Guardian Clima Guard Solar</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                        <div class="props__value">0,75 c*м2/Вт</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Шумоизоляция</div>
                                                        <div class="props__value">32 дБ</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Толщина профиля</div>
                                                        <div class="props__value">70 мм</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Гарантия</div>
                                                        <div class="props__value">5 лет</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Сохранение тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от солнца</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от шума</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от взлома</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div> 
                                    <!-- =======-->
                                    <!-- SP6-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title"> Окно SP 6 Series </div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product"><img src="img/products/sp500.png" alt="" /></div>
                                                </div>
                                                <div class="product__text">
                                                    <div class="props">
                                                        <div class="props__item">
                                                            <div class="props__name">Назначение</div>
                                                            <div class="props__value">Для квартир и домов с автономным отоплением, а также помещений</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Профиль</div>
                                                            <div class="props__value">WDS 6 Series (6 воздушных камер)</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Стеклопакет</div>
                                                            <div class="props__value">Двухкамерный мультифункциональный энергосберегающий стеклопакет  Guardian Clima Guard Solar</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                            <div class="props__value">0,75 c*м2/Вт</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Шумоизоляция</div>
                                                            <div class="props__value">32 дБ</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Толщина профиля</div>
                                                            <div class="props__value">70 мм</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Гарантия</div>
                                                            <div class="props__value">5 лет</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                            <div class="params">
                                                <div class="params__item">
                                                    <div class="params__name">Сохранение тепла</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item">
                                                    <div class="params__name">Защита от солнца</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item">
                                                    <div class="params__name">Защита от шума</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 40%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item">
                                                    <div class="params__name">Защита от взлома</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 100%"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="litle-header">Дополнительные опции</div>
                                            <div class="options">
                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                            </div>
                                            <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div><!-- =======-->
                                    <!-- SP5-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Окно SP 5 SERIES </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp4.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для квартир и домов с централизованным отоплением</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Профиль</div>
                                                        <div class="props__value">WDS 5 Series (5 воздушных камер/серый уплотнитель)</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Стеклопакет</div>
                                                        <div class="props__value">двухкамерный мультифункциональный

                                                                Guardian Clima Guard Solar</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Коэффициент сопротивления теплопередачи</div>
                                                        <div class="props__value">0,6 c*м2/Вт</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Шумоизоляция</div>
                                                        <div class="props__value">30 дБ</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Толщина профиля</div>
                                                        <div class="props__value">60 мм</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Гарантия</div>
                                                        <div class="props__value">5 лет</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Сохранение тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от солнца</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от шума</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Защита от взлома</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!-- =======-->
                <!-- БАЛКОНЫ-->
                <!-- =======-->
                <div class="prodlist__item" id="products-balconies">
                        <div class="products-sliderjs">
                                <div class="container container_rel">
                                    <div class="decor decor_11"><img src="img/lines/lines6.png" alt="" /></div>
                                    <div class="product-nav">
                                        <div class="navbts"><button class="navbts__next" id="product-prev"></button><button class="navbts__prev" id="product-next"></button></div>
                                    </div>
                                    <div class="products-list">
                                        <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title wow fadeInUp"> Классический </div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product wow fadeInLeft"><img src="img/products/b1.jpg" alt="" /></div>
                                                </div>
                                                <div class="product__text wow fadeInRight">
                                                    <div class="props">
                                                        <div class="props__item">
                                                            <div class="props__name">Назначение</div>
                                                            <div class="props__value">Для людей, которые хотят отремонтировать балкон за минимальные деньги и в кратчайшие сроки</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Описание</div>
                                                            <div class="props__value">наружная отделка сайдингом (по желанию заказчика);
                                                                    <br> установку пластиковой рамы на балкон (остекление);
                                                                    <br>внутренняя отделка балкона.</div>
                                                        </div>
                                                        <div class="props__item">
                                                            <div class="props__name">Преимущества</div>
                                                            <div class="props__value">Самый бюджетный и быстрый вариант</div>
                                                        </div>
                                            
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                           
                                            <div class="litle-header wow fadeInUp">Дополнительные опции</div>
                                            <div class="options">
                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                            </div>
                                            <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div>
                                        <div class="products-list__item">
                                                <div class="product-header">
                                                    <div class="product-header__title"> C выносом по подоконнику </div>
                                                    <div class="product-header__nav"> </div>
                                                </div>
                                                <div class="product">
                                                    <div class="product__image">
                                                        <div class="photo-product"><img src="img/products/b2.jpg" alt="" /></div>
                                                    </div>
                                                    <div class="product__text">
                                                        <div class="props">
                                                            <div class="props__item">
                                                                <div class="props__name">Назначение</div>
                                                                <div class="props__value">Для людей, которые хотят получить дополнительное пространство за небольшую плату.</div>
                                                            </div>
                                                            <div class="props__item">
                                                                <div class="props__name">Описание</div>
                                                                <div class="props__value">При помощи сварочных работ металлические треугольники крепятся к существующему парапету. На край конструкции монтируется пластиковая рама, а по всему периметру устанавливают увеличенный подоконник 300-400 мм.</div>
                                                            </div>
                                                            <div class="props__item">
                                                                <div class="props__name">Преимущества</div>
                                                                <div class="props__value">Увеличивается глубина подоконника, не забирая пространство.
                                                                  Жестко установленный подоконник, который выдерживает цветы и рассаду. Визуально увеличивается площадь балкона.</div>
                                                            </div>
                                                
                                                        </div>
                                                    </div>
                                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                </div>
                                               
                                                <div class="litle-header">Дополнительные опции</div>
                                                <div class="options">
                                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                                </div>
                                                <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                            </div>
                                            <div class="products-list__item">
                                                    <div class="product-header">
                                                        <div class="product-header__title"> С выносом по полу </div>
                                                        <div class="product-header__nav"> </div>
                                                    </div>
                                                    <div class="product">
                                                        <div class="product__image">
                                                            <div class="photo-product"><img src="img/products/b3.jpg" alt="" /></div>
                                                        </div>
                                                        <div class="product__text">
                                                            <div class="props">
                                                                <div class="props__item">
                                                                    <div class="props__name">Назначение</div>
                                                                    <div class="props__value">Для тех, кто хочет увеличить площадь балкона до 50%</div>
                                                                </div>
                                                                <div class="props__item">
                                                                    <div class="props__name">Описание</div>
                                                                    <div class="props__value">После демонтажа
                                                                            выполняются сварочные работы по увеличению площади балкона по полу.
                                                                            После установки нового парапета балкон снаружи обшивается сайдингом с утеплением.
                                                                           Дальше монтаж пластиковой рамы и внутренняя отделка.</div>
                                                                </div>
                                                                <div class="props__item">
                                                                    <div class="props__name">Преимущества</div>
                                                                    <div class="props__value">Площадь конструкции увеличивается в 1,5 раза, возможно обустроить спальное место или установить шкаф, использовать балкон для отдыха</div>
                                                                </div>
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                        <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                    </div>
                                                   
                                                    <div class="litle-header">Дополнительные опции</div>
                                                    <div class="options">
                                                        <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                                    </div>
                                                    <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                    <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                </div>
                                                <div class="products-list__item">
                                                        <div class="product-header">
                                                            <div class="product-header__title"> C выносом по полу и подоконнику </div>
                                                            <div class="product-header__nav"> </div>
                                                        </div>
                                                        <div class="product">
                                                            <div class="product__image">
                                                                <div class="photo-product"><img src="img/products/b4.jpg" alt="" /></div>
                                                            </div>
                                                            <div class="product__text">
                                                                <div class="props">
                                                                    <div class="props__item">
                                                                        <div class="props__name">Назначение</div>
                                                                        <div class="props__value">Для тех, кому нужен максимально просторный балкон с надежной крышей, утепленной и обесшумленой.</div>
                                                                    </div>
                                                                    <div class="props__item">
                                                                        <div class="props__name">Описание</div>
                                                                        <div class="props__value">Устанавливается металлический каркас для будущей крыши.
                                                                                Стелится OSB плита и рубероид.
                                                                                Поверх этого монтируется битумная черепица.
                                                                                Крыша утепляется пенопластом и закрывается гидробарьером.</div>
                                                                    </div>
                                                                    <div class="props__item">
                                                                        <div class="props__name">Преимущества</div>
                                                                        <div class="props__value">Максимально используемая площадь балкона, а также защита от осадков и протеканий</div>
                                                                    </div>
                                                        
                                                                </div>
                                                            </div>
                                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                        </div>
                                                       
                                                        <div class="litle-header">Дополнительные опции</div>
                                                        <div class="options">
                                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                                        </div>
                                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                    </div>
                                                    <div class="products-list__item">
                                                            <div class="product-header">
                                                                <div class="product-header__title"> Французский </div>
                                                                <div class="product-header__nav"> </div>
                                                            </div>
                                                            <div class="product">
                                                                <div class="product__image">
                                                                    <div class="photo-product"><img src="img/products/b5.jpg" alt="" /></div>
                                                                </div>
                                                                <div class="product__text">
                                                                    <div class="props">
                                                                        <div class="props__item">
                                                                            <div class="props__name">Назначение</div>
                                                                            <div class="props__value">Для тех, кто хочет иметь красивый стильный балкон с отличным видом</div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                            <div class="props__name">Описание</div>
                                                                            <div class="props__value">Существует два варианта французского балкона:
    
                                                                                   <br> ограждение красивой кованой решеткой;
                                                                                   <br>   панорамное окно.</div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                            <div class="props__name">Преимущества</div>
                                                                            <div class="props__value">Современный вид, скорость монтажа. 
                                                                                    Низ балкона можно сделать тонированными стеклопакетами, использовать стекло сатин, или же закрыть термопанелями.</div>
                                                                        </div>
                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                            </div>
                                                           
                                                            <div class="litle-header">Дополнительные опции</div>
                                                            <div class="options">
                                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                                            </div>
                                                            <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                        </div>
                                                        <div class="products-list__item">
                                                                <div class="product-header">
                                                                    <div class="product-header__title"> Французский с выносом по полу</div>
                                                                    <div class="product-header__nav"> </div>
                                                                </div>
                                                                <div class="product">
                                                                    <div class="product__image">
                                                                        <div class="photo-product"><img src="img/products/b6.jpg" alt="" /></div>
                                                                    </div>
                                                                    <div class="product__text">
                                                                        <div class="props">
                                                                            <div class="props__item">
                                                                                <div class="props__name">Назначение</div>
                                                                                <div class="props__value">Для людей, которых не устраивает ширина балкона</div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                                <div class="props__name">Описание</div>
                                                                                <div class="props__value">После демонтажных работ выполняются сварочные работы по выносу остекления.
                                                                                        Подшивается низ балкона, дальше монтаж панорамного остекления, тепло- и шумоизоляция козырька. Последний шаг - внутренняя отделка.</div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                                <div class="props__name">Преимущества</div>
                                                                                <div class="props__value">Отличный внешний вид плюс функциональность</div>
                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                                </div>
                                                               
                                                                <div class="litle-header">Дополнительные опции</div>
                                                                <div class="options">
                                                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                                                </div>
                                                                <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                            </div>
                                                            <div class="products-list__item">
                                                                    <div class="product-header">
                                                                        <div class="product-header__title"> Открытый </div>
                                                                        <div class="product-header__nav"> </div>
                                                                    </div>
                                                                    <div class="product">
                                                                        <div class="product__image">
                                                                            <div class="photo-product"><img src="img/products/b7.jpg" alt="" /></div>
                                                                        </div>
                                                                        <div class="product__text">
                                                                            <div class="props">
                                                                                <div class="props__item">
                                                                                    <div class="props__name">Назначение</div>
                                                                                    <div class="props__value">Для тех, кто хочет наслаждаться открытым видом и чистым воздухом</div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                    <div class="props__name">Описание</div>
                                                                                    <div class="props__value">Проводится полный демонтаж на балконе, включая стяжку. Устанавливается новое кованое ограждение. Укладка плитки, окрашивание задней стенки фасадной краской, установка крепления для цветов - по желанию заказчика.</div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                    <div class="props__name">Преимущества</div>
                                                                                    <div class="props__value">Ощущение простора, чистый воздух, если балкон выходит на ттихую улицу или лес.</div>
                                                                                </div>
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                        <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                                    </div>
                                                                   
                                                                    <div class="litle-header">Дополнительные опции</div>
                                                                    <div class="options">
                                                                        <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                                                    </div>
                                                                    <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                                    <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                                </div>
                                    </div>
                                </div>
                                </div>
                </div><!-- =====-->
                <!-- ДВЕРИ-->
                <!-- =====-->
                <div class="prodlist__item" id="products-door">
                                <div class="products-sliderjs">
                            <div class="container container_rel">
                                <div class="decor decor_11"><img src="img/lines/lines6.png" alt="" /></div>
                                <div class="product-nav">
                                    <div class="navbts"><button class="navbts__next" id="product-prev"></button><button class="navbts__prev" id="product-next"></button></div>
                                </div>
                                <div class="products-list">
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title wow fadeInUp"> Входные двери </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product wow fadeInLeft"><img src="img/products/d1.png" alt="" /><a class="door_types" href="img/doors.jpg"  data-fancybox="gallery-2"><img src="img/doors.jpg"></a></div>
                                            </div>
                                            <div class="product__text wow fadeInRight">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для использования в коттеджах и частных домах</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Описание</div>
                                                        <div class="props__value">Входные двери, учитывая качество и надежность, на уровень выше чем другие виды дверей.</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Преимущества</div>
                                                        <div class="props__value"> Противовзломная фурнитура делают эти двери надежными, а многозапорный механизм гарантирует отличное прижатие по всей длине двери. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                       
                                        <div class="litle-header wow fadeInUp">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Балконные двери </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/d2.png" alt="" /><a class="door_types" href="img/doors.jpg"  data-fancybox="gallery-2"><img src="img/doors.jpg"></a></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                        <div class="props__item">
                                                                <div class="props__name">Назначение</div>
                                                                <div class="props__value">Для использования в квартирах и частных домах</div>
                                                            </div>
                                                            <div class="props__item">
                                                                <div class="props__name">Описание</div>
                                                                <div class="props__value">Балконные двери ПВХ получили распространение за внешний вид и невероятно легкий уход</div>
                                                            </div>
                                                            <div class="props__item">
                                                                <div class="props__name">Преимущества</div>
                                                                <div class="props__value"> Практичность, высокая теплоизоляция и отлично подходят под любой интерьер </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        
                                        <div class="litle-header">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Двери межкомнатные</div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/d3.png" alt="" /><a class="door_types" href="img/doors.jpg"  data-fancybox="gallery-2"><img src="img/doors.jpg"></a></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                        <div class="props__item">
                                                                <div class="props__name">Назначение</div>
                                                                <div class="props__value">Для офисов, квартир и частных домов</div>
                                                            </div>
                                                            <div class="props__item">
                                                                <div class="props__name">Описание</div>
                                                                <div class="props__value">Металлопластиковые межкомнатные двери набирают популярность даже в жилых помещениях</div>
                                                            </div>
                                                            <div class="props__item">
                                                                <div class="props__name">Преимущества</div>
                                                                <div class="props__value"> Минимальный уход, высокая тепло- и шумоизоляция, отсутствие деформации </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="litle-header">Дополнительные опции</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                            
                                </div>
                            </div>
                            </div>
                        </div>
<!-- ===========-->
                <!-- ПЕРЕГОРОДКИ-->
                <!-- ===========-->
                <div class="prodlist__item" id="products-partitions">
                        <div class="products-sliderjs">
                    <div class="container container_rel">
                        <div class="decor decor_11"><img src="img/lines/lines6.png" alt="" /></div>
                        <div class="product-nav">
                            <div class="navbts"><button class="navbts__next" id="product-prev"></button><button class="navbts__prev" id="product-next"></button></div>
                        </div>
                        <div class="products-list">

                            <div class="products-list__item">
                                <div class="product-header">
                                    <div class="product-header__title"> Офисные перегородки </div>
                                    <div class="product-header__nav"> </div>
                                </div>
                                <div class="product">
                                    <div class="product__image">
                                        <div class="photo-product"><img src="img/products/p1.png" alt="" /></div>
                                    </div>
                                    <div class="product__text">
                                        <div class="props">
                                                <div class="props__item">
                                                        <div class="props__name">Назначение</div>
                                                        <div class="props__value">Для офисов, торговых помещений</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Описание</div>
                                                        <div class="props__value">Офисные перегородки ПВХ - лучший выбор для любого коммерческого помещения</div>
                                                    </div>
                                                    <div class="props__item">
                                                        <div class="props__name">Преимущества</div>
                                                        <div class="props__value"> Практичность, высокая теплоизоляция, современный внешний вид </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                </div>
                                
                                <div class="litle-header">Дополнительные опции</div>
                                <div class="options">
                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                </div>
                                <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                            </div>
                            <div class="products-list__item">
                                <div class="product-header">
                                    <div class="product-header__title"> Перегородки межкомнатные</div>
                                    <div class="product-header__nav"> </div>
                                </div>
                                <div class="product">
                                    <div class="product__image">
                                        <div class="photo-product"><img src="img/products/p2.png" alt="" /></div>
                                    </div>
                                    <div class="product__text">
                                        <div class="props">
                                                  <div class="props__item">
                                          <div class="props__name">Назначение</div>
                                                         <div class="props__value">Для квартир, частных домов</div>
                                                        </div>
                                                 <div class="props__item">
                                                        <div class="props__name">Описание</div>
                                                        <div class="props__value">Металлопластиковые перегородки это отличная альтернатива полноценным перегородкам из камня</div>
                                                        </div>
                                                         <div class="props__item">
                                                        <div class="props__name">Преимущества</div>
                                                        <div class="props__value"> Быстрота монтажа, минимальный уход, тепло- и шумоизоляция </div>
                                                        </div>
                                                        
                                        </div>
                                    </div>
                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                </div>
                                <div class="litle-header">Дополнительные опции</div>
                                <div class="options">
                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Теплая <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Защита от <br>промерзания</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохладное лето</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дождь</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Пошаговое проветривание</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фиксация створки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Устройчивость к ветру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Идеальный подоконник</span></span>
                                </div>
                                <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                            </div>
                    
                        </div>
                    </div>
                    </div></div>
                <!-- ПОДОКОННИКИ-->
                <!-- ===========-->
                <div class="prodlist__item" id="products-sills">
                        <div class="products-sliderjs">
                                <div class="container container_rel">
                                    <div class="decor decor_11"><img src="img/lines/lines6.png" alt="" /></div>
                                    <div class="product-nav">
                                        <div class="navbts"><button class="navbts__next" id="product-prev"></button><button class="navbts__prev" id="product-next"></button></div>
                                    </div>
                                    <div class="products-list">
                                        <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title wow fadeInUp"> Danke Komfort</div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product wow fadeInLeft"><img src="img/products/s1.jpg" alt="" /></div>
                                                </div>
                                                <div class="product__text wow fadeInRight">
                                                    <div class="props">
                                                            <div class="props__item">
                                                                    <div class="props__name">Описание</div>
                                                                    <div class="props__value">Komfort - красивое и прочное эконом решение, благодаря которому вы забудете про дешевые шершавые подоконники. </div>
                                                                </div>
                                                                <div class="props__item">
                                                                    <div class="props__name">Покрытие</div>
                                                                    <div class="props__value">Декоративная пленка с красивыми рисунками дерева и мрамора. В коллекции есть текстурные и абсолютно гладкие решения.</div>
                                                                </div>
                                                                <div class="props__item">
                                                                    <div class="props__name">Основа</div>
                                                                    <div class="props__value">Оригинальная фирменная конструкция ребер жесткости обеспечивает высокую прочность. Безупречная надежность и безопасное экологически чистое сырье делают Komfort самым прочным среди подоконников эконом класса.</div>
                                                                </div>
                                                                
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                        
                                            <div class="litle-header wow fadeInUp">Цвета</div>
                                            <div class="options windowsills">
                                                            <div>			<img src="./img/danke-komfort/1.jpg">Komfort Серый</div>
                                                            <div>			<img src="./img/danke-komfort/2.jpg">Komfort Орех</div>
                                                            <div>			<img src="./img/danke-komfort/3.jpg">Komfort Белый</div>
                                                            <div>			<img src="./img/danke-komfort/4.jpg">Komfort Дуб</div>
                                                            <div>			<img src="./img/danke-komfort/5.jpg">Komfort Бежевый</div>
                                                            <div>			<img src="./img/danke-komfort/6.jpg">Komfort Белый дуб</div>
    
                                            </div>
                                            <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title"> Danke Standard </div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                    <div class="product__image">
                                                        <div class="photo-product"><img src="img/products/s1.jpg" alt="" /></div>
                                                    </div>
                                                    <div class="product__text">
                                                        <div class="props">
                                                                <div class="props__item">
                                                                        <div class="props__name">Описание</div>
                                                                        <div class="props__value">"Недорого" не означает "некачественно"! Подоконник экономкласса может служить долго, если это – STANDARD. </div>
                                                                    </div>
                                                                    <div class="props__item">
                                                                        <div class="props__name">Покрытие</div>
                                                                        <div class="props__value">Износостойкая пленка Elesgo создана с учетом всех требований украинских потребителей: гладкая акриловая поверхность.</div>
                                                                    </div>
                                                                    <div class="props__item">
                                                                        <div class="props__name">Основа</div>
                                                                        <div class="props__value">Для создания подоконника используется исключительно первичное экологически безопасное сырье.</div>
                                                                    </div>
                                                                    
                                                        </div>
                                                    </div>
                                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                </div>
                                            
                                                <div class="litle-header">Цвета</div>
                                                <div class="options windowsills">
                                                        <div>			<img src="./img/danke-standard/1.jpg">Белый матовый Standard</div>
                                                        <div>			<img src="./img/danke-standard/2.jpg">Золотой дуб Standard</div>
                                                        <div>			<img src="./img/danke-standard/3.jpg">Мрамор Standard</div>
        
                                                </div>
                                            <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div>
                                        <div class="products-list__item">
                                                <div class="product-header">
                                                    <div class="product-header__title"> WDS </div>
                                                    <div class="product-header__nav"> </div>
                                                </div>
                                                <div class="product">
                                                        <div class="product__image">
                                                            <div class="photo-product"><img src="img/products/s3.jpg" alt="" /></div>
                                                        </div>
                                                        <div class="product__text">
                                                            <div class="props">
                                                                    <div class="props__item">
                                                                            <div class="props__name">Описание</div>
                                                                            <div class="props__value">Подоконники WDS сохранят свой первозданный вид долгие годы и выдержат любые бытовые нагрузки. Идеально сочетаются с окнами WDS </div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                            <div class="props__name">Покрытие</div>
                                                                            <div class="props__value">Надежное покрытие, устойчивое к высоким температурам, влаге и царапинам</div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                            <div class="props__name">Основа</div>
                                                                            <div class="props__value">Внутреннее строение обеспечивает высокую прочность конструкции</div>
                                                                        </div>
                                                                        
                                                            </div>
                                                        </div>
                                                        <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                        <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                    </div>
                                                
                                                    <div class="litle-header">Цвета</div>
                                                    <div class="options windowsills">
                                                            <div>			<img src="./img/wds/1.jpg">Античный мрамор</div>
                                                            <div>			<img src="./img/wds/2.jpg">Темная вишня</div>
                                                            <div>			<img src="./img/wds/3.jpg">Золотой дуб</div>
                                                            <div>			<img src="./img/wds/4.jpg">Дымчатый гранит</div>
                                                            <div>			<img src="./img/wds/5.jpg">Дуб Монтана</div>
                                                            <div>			<img src="./img/wds/6.jpg">Орех</div>
            
                                                    </div>
                                                <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                            </div>
                                            <div class="products-list__item">
                                                    <div class="product-header">
                                                        <div class="product-header__title"> Sauberg </div>
                                                        <div class="product-header__nav"> </div>
                                                    </div>
                                                    <div class="product">
                                                            <div class="product__image">
                                                                <div class="photo-product"><img src="img/products/s4.jpg" alt="" /></div>
                                                            </div>
                                                            <div class="product__text">
                                                                <div class="props">
                                                                        <div class="props__item">
                                                                                <div class="props__name">Описание</div>
                                                                                <div class="props__value">Современный дизайн - 13 декоров в глянцевом и матовом исполнении. Утолщенные стенки подоконника.
                                                                                        Презентабельный внешний вид - скругленный "капинос".
                                                                                        Оптимальное соотношение цены и качества. </div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                                <div class="props__name">Покрытие</div>
                                                                                <div class="props__value">Износостойкая пленка не боится прямых солнечных лучей, механических нагрузок.</div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                                <div class="props__name">Основа</div>
                                                                                <div class="props__value">Дополнительные ребра жесткости делают подоконники Sauberg невероятно прочными.</div>
                                                                            </div>
                                                                            
                                                                </div>
                                                            </div>
                                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                        </div>
                                                    
                                                        <div class="litle-header">Цвета</div>
                                                        <div class="options windowsills">
                                                                <div>			<img src="./img/sauberg/01.jpg">Белый глянец</div>
                                                                <div>			<img src="./img/sauberg/02.jpg">Белый дуб глянец</div>
                                                                <div>			<img src="./img/sauberg/03.jpg">Мрамор глянец</div>
                                                                <div>			<img src="./img/sauberg/04.jpg">Золотой дуб глянец</div>
                                                                <div>			<img src="./img/sauberg/05.jpg">Орех глянец</div>
                                                                <div>			<img src="./img/sauberg/06.jpg">Темный дуб глянец</div></div>
                                                                <p><div class="options windowsills">   <div>			<img src="./img/sauberg/07.jpg">Белый матовый</div>
                                                                <div>			<img src="./img/sauberg/08.jpg">Мрамор матовый</div>
                                                                <div>			<img src="./img/sauberg/09.jpg">Винчестер матовый</div>
                                                                <div>			<img src="./img/sauberg/10.jpg">Золотой дуб матовый</div>
                                                                <div>			<img src="./img/sauberg/11.jpg">Орех матовый</div>
                                                                <div>			<img src="./img/sauberg/12.jpg">Антрацит матовый</div>
                                                        </div>
                                                    <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                    <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                </div>
                                                <div class="products-list__item">
                                                        <div class="product-header">
                                                            <div class="product-header__title"> Plastolit </div>
                                                            <div class="product-header__nav"> </div>
                                                        </div>
                                                        <div class="product">
                                                                <div class="product__image">
                                                                    <div class="photo-product"><img src="img/products/s5.jpg" alt="" /></div>
                                                                </div>
                                                                <div class="product__text">
                                                                    <div class="props">
                                                                            <div class="props__item">
                                                                                    <div class="props__name">Описание</div>
                                                                                    <div class="props__value">Компания Plastolit выпускает ультрасовременные, сверхпрочные подоконники </div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                    <div class="props__name">Покрытие</div>
                                                                                    <div class="props__value">Ламинация Elesgo стойкая к царапинам, не выгорает на солнце, не боится влаги и повышенных температур.</div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                    <div class="props__name">Основа</div>
                                                                                    <div class="props__value">Невероятная стойкость к разнообразным механическим воздействиям</div>
                                                                                </div>
                                                                                
                                                                    </div>
                                                                </div>
                                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                            </div>
                                                        
                                                            <div class="litle-header">Цвета</div>
                                                            <div class="options windowsills">
                                                                    <div>			<img src="./img/plastolit/01.png">Белый</div>
                                                                    <div>			<img src="./img/plastolit/02.png">Мрамор</div>
                                                                    <div>			<img src="./img/plastolit/03.png">Бежевый мрамор</div>
                                                                    <div>			<img src="./img/plastolit/04.png">Золотой дуб</div>
                                                                    <div>			<img src="./img/plastolit/05.png">Рустикальный дуб</div>
                                                                    <div>			<img src="./img/plastolit/06.png">Венге</div>
                    
                                                            </div>
                                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                    </div>
                                    </div>
                                </div>
                </div>
            </div>
        </section>
        <!-- ================-->
        <!-- ЦВЕТОВЫЕ РЕШЕНИЯ-->
        <!-- ================-->
        <section class="section">
            <div class="container container_rel">
                <div class="decor decor_23"><img src="img/lines/lines13.png" alt="" /></div>
                <div class="decor decor_24"><img src="img/lines/lines14.png" alt="" /></div>
                <div class="decor decor_25"><img src="img/lines/lines15.png" alt="" /></div>
                <div class="decor decor_26"><img src="img/lines/lines10.png" alt="" /></div>
                <div class="decor decor_27"><img src="img/lines/lines16.png" alt="" /></div>
                <div class="section-header section-header_center wow fadeInUp">Цветовые решения с защитой от деформации и выгорания</div>
                <div class="section-subheader wow fadeInUp" data-wow-delay="0.2s">Для окон Stekloplast используются немецкие пленки “Сool colors” от компании Hornschuch. Специальные цветовые пигменты в их составе отражают большинство тепловых лучей. Так Stekloplast защищает свои ламинированные окна от нагревания и последующей деформации профиля и всей оконной конструкции. Так Stekloplast защитил свои ламинированные окна от проблемы, с которой сталкивается большинство производителей ламинированных конструкций</div>
                <div class="trees">
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="tree">
                            <div class="tree__img"><img src="img/colors/01.png" alt="" /></div>
                            <div class="tree__name">Золотой дуб</div>
                        </div>
                    </div>
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="tree">
                                    <div class="tree__img"><img src="img/colors/02.png" alt="" /></div>
                                    <div class="tree__name">Махагон</div>
                                </div>
                    </div>
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="tree">
                                    <div class="tree__img"><img src="img/colors/03.png" alt="" /></div>
                                    <div class="tree__name">Дуб рустикаль</div>
                                </div>
                    </div>
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tree">
                                    <div class="tree__img"><img src="img/colors/04.png" alt="" /></div>
                                    <div class="tree__name">Мореный дуб</div>
                                </div>
                    </div>
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tree">
                                <div class="tree__img"><img src="img/colors/05.png" alt="" /></div>
                                <div class="tree__name">Грецкий орех</div>
                            </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/06.png" alt="" /></div>
                                        <div class="tree__name">Светлый дуб</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/07.png" alt="" /></div>
                                        <div class="tree__name">Горная сосна</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/08.png" alt="" /></div>
                                        <div class="tree__name">Полосатый дуглас</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/09.png" alt="" /></div>
                                        <div class="tree__name">Натуральный дуб</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tree">
                                    <div class="tree__img"><img src="img/colors/010.png" alt="" /></div>
                                    <div class="tree__name">Серый</div>
                                </div>
                            </div>
                            <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="tree">
                                            <div class="tree__img"><img src="img/colors/011.png" alt="" /></div>
                                            <div class="tree__name">Зеленый мох</div>
                                        </div>
                            </div>
                            <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="tree">
                                            <div class="tree__img"><img src="img/colors/012.png" alt="" /></div>
                                            <div class="tree__name">Винно-красный</div>
                                        </div>
                            </div>
                            <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="tree">
                                            <div class="tree__img"><img src="img/colors/013.png" alt="" /></div>
                                            <div class="tree__name">Коричневый шоколадный</div>
                                        </div>
                            </div>
                </div>
            </div>
        </section><!-- ==========================-->
        <!-- ИННОВАЦИОННЫЕ СТЕКЛОПАКЕТЫ-->
        <!-- ==========================-->
        <section class="section section_light">
            <div class="container container_rel">
                <div class="decor decor_3"><img src="img/623.png" alt="" /></div>
                <div class="decor decor_28"><img src="img/lines/lines17.png" alt="" /></div>
                <div class="section-header-nav section-header-nav_alcenter wow fadeInUp">
                    <div class="section-header-nav__title">
                        <div class="section-header">Инновационные стеклопакеты</div>
                    </div>
                    <div class="section-header-nav__nav">
                        <div class="navbts"><button class="navbts__next" id="slider-types-prev"></button><button class="navbts__prev" id="slider-types-next"></button></div>
                    </div>
                </div><!-- Slider main container-->
                <div class="swiper-container" id="slider-types">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper">
                        <!-- Slides-->
                        <div class="swiper-slide">
                            <div class="types__item wow fadeInUp">
                                <div class="types__img"><img src="img/pack1.png" alt="" /></div>
                                <div class="types__name">Мультифункциональные</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="types__item wow fadeInUp">
                                <div class="types__img"><img src="img/pack2.png" alt="" /></div>
                                <div class="types__name">Энергосберегающие</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="types__item">
                                <div class="types__img"><img src="img/pack3.png" alt="" /></div>
                                <div class="types__name">Зеркальные</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="types__item">
                                <div class="types__img"><img src="img/pack4.png" alt="" /></div>
                                <div class="types__name">Противоударные</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="types__item">
                                    <div class="types__img"><img src="img/pack5.png" alt="" /></div>
                                    <div class="types__name">Со шпросами</div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- =======================-->
        <!-- КОНСТРУКЦИИ ЛЮБОЙ ФОРМЫ-->
        <!-- =======================-->
        <section class="section">
            <div class="container container_rel">
                <div class="decor decor_29"><img src="img/lines/lines18.png" alt="" /></div>
                <div class="decor decor_30"><img src="img/lines/lines19.png" alt="" /></div>
                <div class="section-header-nav section-header-nav_alcenter">
                    <div class="section-header-nav__title">
                        <div class="section-header wow fadeInUp">Конструкции любых видов</div>
                    </div>
                    <div class="section-header-nav__nav">
                        <div class="navbts"><button class="navbts__next" id="slider-forms-prev"></button><button class="navbts__prev" id="slider-forms-next"></button></div>
                    </div>
                </div><!-- Slider main container-->
                <div class="swiper-containe" id="slider-forms">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper">
                        <!-- Slides-->
                        <div class="swiper-slide">
                                <div class="forms__item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="forms__img"><img src="img/slide.jpg" alt="" /></div>
                                    <div class="forms__name">Раздвижные</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="forms__item wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="forms__img"><img src="img/vzlom.jpg" alt="" /></div>
                                    <div class="forms__name">Противовзломные</div>
                                </div>
                            </div>
                        <div class="swiper-slide">
                            <div class="forms__item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="forms__img"><img src="img/654.png" alt="" /></div>
                                <div class="forms__name">Круглые</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="forms__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="forms__img"><img src="img/655.png" alt="" /></div>
                                <div class="forms__name">Треугольные</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="forms__item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="forms__img"><img src="img/wt05.png" alt="" /></div>
                                <div class="forms__name">Трапециевидные</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- =======================-->
        <!-- НЕ ЗНАЕТЕ, КАК ВЫБРАТЬ?-->
        <!-- =======================-->
        <section class="section">
            <div class="container container_rel">
                <div class="decor decor_15"><img src="img/lines/lines9.png" alt="" /></div>
                <div class="decor decor_16"><img src="img/lines/lines10.png" alt="" /></div>
                <div class="decor decor_17"><img src="img/lines/lines11.png" alt="" /></div>
                <div class="article">
                    <div class="article__text">
                        <div class="section-header wow fadeInUp">Не знаете, <br>как выбрать?</div>
                        <div class="article-subheader article-subheader_m wow fadeInUp" data-wow-delay="0.2s">Опишите менеджеру задачу и мы поможем вам подобрать оптимальный профиль:</div>
                        <ul class="listcheck">
                            <li class="listcheck__item wow fadeInUp" data-wow-delay="0.3s">Рассчитаем теплопотери и поможем их сократить</li>
                            <li class="listcheck__item wow fadeInUp" data-wow-delay="0.4s">Вычислим нагрузку и проведем подбор по прочности</li>
                            <li class="listcheck__item wow fadeInUp" data-wow-delay="0.5s">Учтем требования по шумоизоляции и особенности эксплуатации</li>
                        </ul>
                        <div class="article-act wow fadeInUp" data-wow-delay="1s"><button class="button button_f" data-modal="modal-2">Подобрать профиль</button></div>
                    </div>
                    <div class="article__image wow fadeInRight" data-wow-delay="0.2s">
                        <div class="article-image">
                            <div class="article-image__img">
                                <div class="article-image__symb"><img src="img/icons8_question_mark_64px.png" alt="" /></div><img src="img/unnamed.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- =========================-->
        <!-- ВОСПОЛЬЗУЙТЕСЬ РАССРОЧКОЙ-->
        <!-- =========================-->
        <section class="section section_articletop">
            <div class="container container_rel">
                <div class="decor decor_18"><img src="img/lines/lines10.png" alt="" /></div>
                <div class="decor decor_19"><img src="img/lines/lines7.png" alt="" /></div>
                <div class="article article_rev">
                    <div class="article__text">
                        <div class="section-header section-header_article wow fadeInUp">Воспользуйтесь <br>рассрочкой от Stekloplast - <br><span>до 2 лет под 0%!</span></div>
                        <ul class="listcheck">
                            <li class="listcheck__item wow fadeInUp" data-wow-delay="0.2s">Без справок о доходах</li>
                            <li class="listcheck__item wow fadeInUp" data-wow-delay="0.3s">Без очередей в банках</li>
                            <li class="listcheck__item wow fadeInUp" data-wow-delay="0.4s">Без поручителей</li>
                        </ul>
                        <div class="article-comment wow fadeInUp" data-wow-delay="0.5s">Какой смысл экономить, если вы ставите окна на 50 лет, верно?</div>
                        <div class="article-act wow fadeInUp" data-wow-delay="1s"><button class="button button_f" data-modal="modal-3">Оформить рассрочку</button></div>
                    </div>
                    <div class="article__image article__image_rev fadeInLeft" data-wow-delay="0.2s">
                        <div class="article-image article-image_rev">
                            <div class="article-image__img">
                                <div class="article-image__symb"><img src="img/icons8_money_box_64px.png" alt="" /></div><img src="img/article.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ================-->
        <!-- ОКНА ПО ПРАВИЛАМ-->
        <!-- ================-->
        <section class="section section_articletop rules1997">
            <div class="container container_rel">
                <div class="decor decor_20"><img src="img/lines/lines7.png" alt="" /></div>
                <div class="decor decor_21"><img src="img/lines/lines7.png" alt="" /></div>
                <div class="article article_accent">
                    <div class="article__text">
                        <div class="articlenav">
                            <div class="navbts" id="article-image-nav"><button class="navbts__next" id="article-slides-prev"></button><button class="navbts__prev" id="article-slides-next"></button></div>
                        </div>
                        <div class="section-header wow fadeInUp">Stekloplast - <br>окна по правилам <br>с 1997 года</div>
                        <div class="article-subheader article-subheader_m article-subheader_auto wow fadeInUp" data-wow-delay="0.2s">В лице Stekloplast вы нашли надежного партнера, с которым не придется волноваться о качестве. Вся продукция идет на экспорт, поэтому проходит строжайший контроль.</div>
                        <div class="accent">
                            <div class="accent__img"><img src="img/icons8_licence_32px.png" alt="" /></div>
                            <div class="accent__text wow fadeInUp" data-wow-delay="1s">Ваши окна имеют международные сертификаты качества, ведь используются даже за границей!</div>
                        </div>
                    </div>
                    <div class="article__image wow fadeInRight" data-wow-delay="0.2s">
                        <div class="article-image">
                            <div class="article-image__img">
                                <div class="article-image__symb"><img src="img/icons8_maintenance_64px.png" alt="" /></div>
                                <div class="artimage-slides"><img class="artimage-slides__current" src="img/production/01.jpg" alt="" /><img src="img/production/02.jpg" alt="" /><img src="img/production/03.jpg" alt="" /><img src="img/production/04.jpg" alt="" /><img src="img/production/05.jpg" alt="" /><img src="img/production/06.jpg" alt="" /><img src="img/production/07.jpg" alt="" /><img src="img/production/08.jpg" alt="" /><img src="img/production/09.jpg" alt="" /><img src="img/production/010.jpg" alt="" /><img src="img/production/011.jpg" alt="" /><img src="img/production/012.jpg" alt="" /><img src="img/production/013.jpg" alt="" /><img src="img/production/014.jpg" alt="" /><img src="img/production/015.jpg" alt="" /><img src="img/production/016.jpg" alt="" /><img src="img/production/017.jpg" alt="" /><img src="img/production/018.jpg" alt="" /><img src="img/production/019.jpg" alt="" /><img src="img/production/020.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ==================================-->
        <!-- НА КАКИХ ОБЪЕКТАХ УСТАНОВЛЕНЫ ОКНА-->
        <!-- ==================================-->
        <section class="section" style="background-image: url(img/room.png)">
            <div class="container container_rel">
                <div class="decor decor_2"><img src="img/622.png" alt="" /></div>
                <div class="decor decor_22"><img src="img/lines/lines12.png" alt="" /></div>
                <div class="section-header-nav">
                    <div class="section-header-nav__title">
                        <div class="section-header section-header_rev wow fadeInUp"> Вы удивитесь, на каких объектах установлены окна Stekloplast</div>
                    </div>
                    <div class="section-header-nav__nav">
                        <div class="navbts"><button class="navbts__prev navbts__prev_b" id="slider-object-prev"></button><button class="navbts__next navbts__next_b" id="slider-object-next"></button></div>
                    </div>
                </div><!-- Slider main container-->
                <div class="swiper-container" id="slider-objects">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper">
                        <!-- Slides-->
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.2s">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/1.png" alt="" /></div>
                                <div class="object__name">ТРЦ Lavina Mall, <span>Киев</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.3s">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/2.png" alt="" /></div>
                                <div class="object__name">КВЦ «Парковый», <span>Киев</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.4s">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/3.png" alt="" /></div>
                                <div class="object__name">ЦУМ, <span>Киев</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/4.jpg" alt="" /></div>
                                <div class="object__name">ТРЦ Донецк City, <span>Донецк</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/5.jpg" alt="" /></div>
                                <div class="object__name">Гостинница Аксельхоф, <span>Днепр</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/6.jpg" alt="" /></div>
                                <div class="object__name">Бизнес-центр, <span>Донецк</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/7.jpg" alt="" /></div>
                                <div class="object__name">ЖК Амстердам, <span>Днепр</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/8.jpg" alt="" /></div>
                                <div class="object__name">ЖК Палермо, <span>Днепр</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/9.jpg" alt="" /></div>
                                <div class="object__name">Автосалон Mazda, <span>Днепр</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="object">
                                    <div class="object__img"><img src="img/objects/10.jpg" alt="" /></div>
                                    <div class="object__name">ТЦ Пассаж, <span>Днепр</span></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- =====================-->
        <!-- ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ-->
        <!-- =====================-->
        <section class="section section_light">
            <div class="container container_rel">
                <div class="mheader wow fadeInLeft">Дополнительные услуги</div>
                <div class="serv">
                    <div class="serv__content">
                        <div class="services">
                            <div class="services__item">
                                <div class="service wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="service__content">
                                        <div class="service__img">
                                            <div class="service__lines"><span></span><span></span></div><img src="img/20af468487e1e16a644de45a5f1263de.png" alt="" />
                                        </div>
                                        <div class="service__name">Монтаж по ДСТУ</div>
                                    </div>
                                    <div class="service__act"><button class="button button_f" data-modal="modal-4">Заказать</button></div>
                                </div>
                            </div>
                            <div class="services__item">
                                <div class="service wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="service__content">
                                        <div class="service__img">
                                            <div class="service__lines"><span></span><span></span></div><img src="img/507.png" alt="" />
                                        </div>
                                        <div class="service__name">Установка откосов</div>
                                    </div>
                                    <div class="service__act"><button class="button button_f" data-modal="modal-4">Заказать</button></div>
                                </div>
                            </div>
                            <div class="services__item">
                                <div class="service wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="service__content">
                                        <div class="service__img">
                                            <div class="service__lines"><span></span><span></span></div><img src="img/1514926121_remontokon.png" alt="" />
                                        </div>
                                        <div class="service__name">Ремонт и регулировка окон</div>
                                    </div>
                                    <div class="service__act"><button class="button button_f" data-modal="modal-4">Заказать</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="serv__man"><img class="wow fadeInUp" src="img/unnamed4.png" alt="" data-wow-delay="0.2s" />
                        <div class="decor decor_4"><img src="img/dots.png" alt="" /></div>
                    </div>
                </div>
            </div>
        </section><!-- =====-->
        <!-- АКЦИЯ-->
        <!-- =====-->
        <section class="section">
            <div class="container container_rel">
                <div class="decor decor_31"><img src="img/lines/lines20.png" alt="" /></div>
                <div class="decor decor_32"><img src="img/lines/lines20.png" alt="" /></div>
                <div class="promo">
                    <div class="promo__content">
                        <div class="promo__header wow jackInTheBox">Акция!</div>
                        <div class="promo__text wow jackInTheBox">Только <b>до <?php echo date('t.m'); ?></b> акция: <br>5-камерный профиль по цене 3-камерного!</div>
                        <div class="promo__img"><img class="wow fadeInRight" src="img/profile2.png" alt="" /></div>
                        <div class="promo__act wow jackInTheBox"><button class="button button_f" data-modal="modal-1">Рассчитать стоимость</button></div>
                    </div>
                   
                </div>
            </div>
        </section><!-- =============-->
        <!-- НАШИ ПАРТНЕРЫ-->
        <!-- =============-->
        <section class="section section_light">
            <div class="container">
                <div class="section-header fadeInUp">Наши партнеры</div>
                <div class="partners">
                    <div class="partners__item wow zoomIn" data-wow-delay="0.2s">
                        <div class="partners__lines"><span></span><span></span></div><img src="img/logo-wds2.png" alt="" />
                    </div>
                    <div class="partners__item wow zoomIn" data-wow-delay="0.3s">
                        <div class="partners__lines"><span></span><span></span></div><img src="img/unnamed5.png" alt="" />
                    </div>
                    <div class="partners__item wow zoomIn" data-wow-delay="0.4s">
                        <div class="partners__lines"><span></span><span></span></div><img src="img/Partner-Winkhaus-Logo.png" alt="" />
                    </div>
                    <div class="partners__item wow zoomIn" data-wow-delay="0.5s">
                        <div class="partners__lines"><span></span><span></span></div><img src="img/axor.png" alt="" />
                    </div>
                </div>
            </div>
        </section><!-- ========-->
        <!-- КОНТАКТЫ-->
        <!-- ========-->
        <section class="section">
            <div class="container">
                <div class="about">
                    <div class="about__content">
                        <div class="decor decor_32"><img src="img/lines/lines21.png" alt="" /></div>
                        <div class="mheader">Приходите к нам в офис!</div>
                        <div class="contacts-header">Представительство в Киеве:</div>
                        <div class="contacts-item"><span> <img src="img/icons8_marker_20px.png" alt="" /><span>Тверской тупик 5а</span></span></div>
                        <div class="contacts-item"><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(067) 10-10-313</span></span><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(063) 919-22-23</span></span></div>
                        <div class="contacts-item"><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(050) 035-04-03</span></span><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(044) 221-36-53</span></span></div>
                        <div class="contacts-header">Завод в Днепре:</div>
                        <div class="contacts-item"><span> <img src="img/icons8_marker_20px.png" alt="" /><span>проспект Богдана Хмельницкого 148</span></span></div>
                        <div class="contacts-item"><span> <img src="img/icons8_new_post_20px.png" alt="" /><span>stekloplast.ua</span></span></div>
                        <div class="contacts-item"><span> <img src="img/icons8_telephone_20px.png" alt="" /><span>0 (800) 501-539</span></span></div>
                    </div>
                    <div class="about__map">
                        <div class="about__map-bg"></div>
                        <div class="about__gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.3130654601996!2d30.530022678881153!3d50.42277184728509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf112e07bbcf%3A0x88d2c33d057477fc!2zNUEsINCi0LLQtdGA0YHQutC-0Lkg0YLRg9C_LiwgNdCQLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1586373205044!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    </div>
                </div>
            </div>
        </section><!-- ======-->
        <!-- FOOTER-->
        <!-- ======-->
        <footer class="footer">
               
                        <div class="hamburger animated pulse">
                            <img src="img/phone.png" alt="" class="line">
                            <img class="close" src="img/close.svg" alt="">
                        </div>
                        <ul class="menu_phone"><li><a href="tel:0671010313" onclick="ga('send', 'event', 'phone', 'call')"> <img src="./img/kyivstar.png"></a></li>           
<li><a href="tel:0500350403" onclick="ga('send', 'event', 'phone', 'call')"> <img src="./img/vodaphone.png">     </a></li> 
<li><a href="tel:0639192223" onclick="ga('send', 'event', 'phone', 'call')">  <img src="./img/lifecell.png">        </a></li> 
<li><a href="tel:0442213653" onclick="ga('send', 'event', 'phone', 'call')">   <img src="./img/homephone.png">    </a></li> </ul>
            <div class="container container_rel">
                <div class="decor decor_5"><img src="img/SP_2000_aluplast.png" alt="" /></div>
                <div class="decor decor_33"><img src="img/lines/lines22.png" alt="" /></div>
                <div class="footer__header">Подпишитесь на нас в соцсетях, <br>чтобы следить за акциями и новостями!</div>

                <div class="socs"><a class="socs__item" href="https://www.instagram.com/stekloplast_kyiv" target="_blank">
                        <div class="socs__lines"><span></span><span></span></div><svg class="svgspr" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#svg_instagram"></use>
                        </svg>
                    </a><a class="socs__item" href="">
                        <div class="socs__lines"><span></span><span></span></div><svg class="svgspr" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#svg_viber"></use>
                        </svg>
                    </a><a class="socs__item" href="https://www.facebook.com/stekloplastkyiv" target="_blank">
                        <div class="socs__lines"><span></span><span></span></div><svg class="svgspr" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#svg_facebook"></use>
                        </svg>
                    </a><a class="socs__item" href="">
                        <div class="socs__lines"><span></span><span></span></div><svg class="svgspr" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#svg_whatsapp"></use>
                        </svg>
                    </a><a class="socs__item" href="">
                        <div class="socs__lines"><span></span><span></span></div><svg class="svgspr" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="#svg_telegram"></use>
                        </svg>
                    </a></div>
                <div class="footer__copy">© 2020. Stekloplast Киев 
                    | Разработка: <a href="https://tkachuk.pro" class="tkachuk"  target="_blank">tkachuk.pro</a></div>
            </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
</body>

</html>