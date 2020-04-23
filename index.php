<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Представництво заводу Stekloplast у Києві та області</title><!-- ===============-->
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

            var req=new XMLHttpRequest();

            req.onload=function(e) {
                var svg=document.implementation.createHTMLDocument('');
                svg.body.innerHTML=e.target.response.replace('<svg ', '<svg style="display: none"');
                document.body.appendChild(svg.body.firstElementChild);
                svg=null;
            };

            req.open('GET', './img/sprite.defs.svg', true);

            req.responseType='text';

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
                <div class="win__header"> Заповніть форму </div>
                    <div class="win__subheader"> Ми передзвонимо, відповімо на всі питання, допоможемо з вибором і розрахуємо остаточну вартість </div>
                    <Form class="win__form modal-form-simple" action="" name="Розрахувати вартість">
                    <div class="input-text"> <img src="img/icons8-male_user.png" alt="" /> <input type="text" name="name" placeholder="Ваше ім'я" /> </div>
                    <div class="input-text"> <img src="img/icons8-phonelink_ring.png" alt="" /> <input class="phone-input" type="text" name="phone" placeholder="Ваше ім'я" /> </div> <button class="button button_a" type="submit"> Розрахувати вартість </button>
                    </Form>
                    <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /> <span> Спасибі! </Span> <br> Ми вам передзвонимо. </div>
                    </div>
                    <div class="formcomplete formcomplete_error"> Неможливо відправити. </div>
                    <P> Або напишіть в зручний месенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div><!-- ============================-->
    <!-- ФОРМА "ПОДОБРАТЬ ПРОФИЛЬ"-->
    <!-- ============================-->
    <div class="modal" id="modal-2">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="win">
                <button class="win__close"></button>
                <div class="win__header"> Заповніть форму </div>
                    <div class="win__subheader"> Ми передзвонимо, відповімо на всі питання, допоможемо з вибором і розрахуємо остаточну вартість </div>
                    <Form class="win__form modal-form-simple" action="" name="Підібрати профіль">
                    <div class="input-text"> <img src="img/icons8-male_user.png" alt="" /> <input type="text" name="name" placeholder="Ваше ім'я" /> </div>
                    <div class="input-text"> <img src="img/icons8-phonelink_ring.png" alt="" /> <input class="phone-input" type="text" name="phone" placeholder="Ваше ім'я" /> </div> <button class="button button_a" type="submit"> Розрахувати вартість </button>
                    </Form>
                    <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /> <span> Спасибі! </Span> <br> Ми вам передзвонимо. </div>
                    </div>
                    <div class="formcomplete formcomplete_error"> Неможливо відправити. </div>
                    <P> Або напишіть в зручний месенджер
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
                <div class="win__header"> Заповніть форму </div>
                    <div class="win__subheader"> Ми передзвонимо, відповімо на всі питання і розповімо докладніше про умови </div>
                    <Form class="win__form modal-form-simple" action="" name="Оформити розстрочку">
                    <div class="input-text"> <img src="img/icons8-male_user.png" alt="" /> <input type="text" name="name" placeholder="Ваше ім'я" /> </div>
                    <div class="input-text"> <img src="img/icons8-phonelink_ring.png" alt="" /> <input class="phone-input" type="text" name="phone" placeholder="Ваше ім'я" /> </div> <button class="button button_a" type="submit"> Розрахувати вартість </button>
                    </Form>
                    <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /> <span> Спасибі! </Span> <br> Ми вам передзвонимо. </div>
                    </div>
                    <div class="formcomplete formcomplete_error"> Неможливо відправити. </div>
                    <P> Або напишіть в зручний месенджер
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
                <div class="win__header"> Заповніть форму </div>
                    <div class="win__subheader"> Ми передзвонимо, відповімо на всі питання і призначимо час приїзду </div>
                    <Form class="win__form modal-form-simple" action="" name="Замовити послугу">
                    <div class="input-text"> <img src="img/icons8-male_user.png" alt="" /> <input type="text" name="name" placeholder="Ваше ім'я" /> </div>
                    <div class="input-text"> <img src="img/icons8-phonelink_ring.png" alt="" /> <input class="phone-input" type="text" name="phone" placeholder="Ваше ім'я" /> </div> <button class="button button_a" type="submit"> Розрахувати вартість </button>
                    </Form>
                    <div class="formcomplete formcomplete_ok">
                    <div> <img src="img/support.svg" alt="" /> <span> Спасибі! </Span> <br> Ми вам передзвонимо. </div>
                    </div>
                    <div class="formcomplete formcomplete_error"> Неможливо відправити. </div>
                    <P> Або напишіть в зручний месенджер
                        <div class="messengers"><a href="viber://chat?number=380500350403" class="viber" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/viber.png"><span>Viber</span></a><br>
                            <a href="tg://resolve?domain=SPlast_Kyiv" class="telegram" onclick="ga('send', 'event', 'contact', 'make')"><img src="img/telegram.png"><span>Telegram</span></a></div>
            </div>
        </div>
    </div><!-- ============-->
    <!-- КНОПКА ВВЕРХ-->
    <!-- ============-->
    <div class="pageup"><span>Піднятися вгору</span><img src="img/up.png" alt="" /></div><!-- =========-->
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
                    <div class="mobcontacts"><a class="mobcontacts__item" href="tel:0671010313"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(067) <b>10-10-313</b></span></a><a class="mobcontacts__item" href="tel:0500350403"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(050) <b>035-04-03</b></span></a><a class="mobcontacts__item" href="tel:0639192223"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(063) <b>919-22-23</b></span></a><a class="mobcontacts__item" href="tel:0442213653"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(044) <b>221-36-53</b></span></a></div>
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
                            <div class="logo__text">Представництво заводу Stekloplast <br>у Києві та області. Вікна за правилами з 1997 року</div>
                            <div class="logo__social"><a href="https://www.facebook.com/stekloplastkyiv"><img src="img/icons8_facebook_old_26px.png" target="_blank" alt="" /></a><a href="https://www.instagram.com/stekloplast_kyiv"><img src="img/icons8_instagram_26px.png"  target="_blank"  alt="" /></a><a href="ru.php">RU</a></div>
                        </div>
                    </div>
                    <div class="header__contacts">
                        <div class="contacts"><a class="contacts__item" href="tel:0671010313"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(067) <b>10-10-313</b></span></a><a class="contacts__item" href="tel:0500350403"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(050) <b>035-04-03</b></span></a><a class="contacts__item" href="tel:0639192223"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(063) <b>919-22-23</b></span></a><a class="contacts__item" href="tel:0442213653"><img src="img/icons8_iphone_x_30px.png" alt="" /><span>(044) <b>221-36-53</b></span></a></div>
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
                        <h1 class="intro__header wow fadeInUp"> Металопластикові вікна від виробника </h1>
                            <div class="intro__promo wow fadeInUp" data-wow-delay="0.2s"> <img src="img/icons8_discount_50px.png" alt="" />
                            <div> Тільки <b> до <?php echo date('t.m'); ?> </b> акція: <br> 5-камерний профіль за ціною 3-камерного! </div>
                            </div>
                            <div class="intro__act wow fadeInUp" data-wow-delay="0.4s"> <button class="button button_a" data-modal="modal-1"> Розрахувати вартість </button> </div>
                            </div>
                            <div class="intro__decor"> <img class="wow fadeInRight" src="img/profile.png" alt="" data-wow-delay="0.4s" />
                            <div class="intro__badge intro__badge_1 badge wow zoomIn" style="background-image:url(img/Badge05.png)" data-wow-delay="0.8s">
                            <div class="badge__percent"> 0 <span>% </span> </div>
                            <div class="badge__name"> Розстрочка </div>
                            </div>
                            <div class="intro__badge intro__badge_2 badge wow zoomIn" style="background-image:url(img/Badge06.png)" data-wow-delay="1.2s">
                            <div class="badge__image"> <img src="img/badge_icon.png" alt="" /> </div>
                            <div class="badge__name"> Ощадний <br> дім <div class="badge__icon"> <img src="img/logo_b.png" alt="" /> </div>
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
                        <div class="section-header"> Виберіть, <br> що вас цікавить </div>
                            </div>
                            <div class="header-wadd__add" id="countries-list"> <button class="button button_b" data-counrty="germany"> Німеччина </button> <button class="button button_c" data-counrty="ukrainer"> Україна </button> </div>
                            </div>
                            <div class="select-linelist">
                            <Button with-countries class="button button_d button_d_active wow zoomIn" data-wow-delay="0.2s" data-prodtype="products-windows"> Вікна </button>
                            <Button class="button button_d wow zoomIn" data-wow-delay="0.3s" data-prodtype="products-balconies"> Балкони </button>
                            <Button class="button button_d wow zoomIn" data-wow-delay="0.4s" data-prodtype="products-door"> Двері </button>
                            <Button class="button button_d wow zoomIn" data-wow-delay="0.5s" data-prodtype="products-partitions"> Перегородки </button>
                            <Button class="button button_d wow zoomIn" data-wow-delay="0.6s" data-prodtype="products-sills"> Підвіконня </button>
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
                                            <div class="product-header__title wow fadeInUp"> Вікно SP 8000</div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product wow fadeInLeft"><img src="img/products/sp8000.png" alt="" /></div>
                                            </div>
                                            <div class="product__text wow fadeInRight">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class = "props__name"> Призначення </div>
                                                            <div class = "props__value"> Для сучасних котеджів, приватних будинків і елітних житлових комплексів </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Профіль </div>
                                                            <div class = "props__value"> Німецький Aluplast Ideal 8000 (6 повітряних камер /
                                                            3 контури ущільнення / папірусно білий ущільнювач) </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Склопакет </div>
                                                            <div class = "props__value"> Мультифункціональний склопакет Guardian Clima Guard Solar (48 мм + Argon) </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                            <div class = "props__value"> 1,22 c * м2 / Вт </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Шумоізоляція </div>
                                                            <div class = "props__value"> 34 дБ </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Товщина профілю </div>
                                                            <div class = "props__value"> 85 мм </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Гарантія </div>
                                                            <div class = "props__value"> 5 років </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.2s">
                                                <div class="params__name">Збереження тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.4s">
                                                <div class="params__name">Захист від сонця</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.6s">
                                                <div class="params__name">Захист від шуму</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.8s">
                                                <div class="params__name">Захист від взлому</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header wow fadeInUp">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
<!-- ========-->
                                    <!-- SP 7000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title wow fadeInUp"> Вікно SP 7000</div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product wow fadeInLeft"><img src="img/products/sp7000.png" alt="" /></div>
                                                </div>
                                                <div class="product__text wow fadeInRight">
                                                    <div class="props">
                                                        <div class="props__item">
                                                            <div class = "props__name"> Призначення </div>
                                                                <div class = "props__value"> Для сучасних котеджів, приватних будинків і елітних житлових комплексів </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Профіль </div>
                                                                <div class = "props__value"> Німецький Aluplast Ideal 7000 (6 повітряних камер /
                                                                3 контури ущільнення / папірусно білий ущільнювач) </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Склопакет </div>
                                                                <div class = "props__value"> Мультифункціональний склопакет Guardian Clima Guard Solar (48 мм + Argon) </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                                <div class = "props__value"> 1,4 c * м2 / Вт </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Шумоізоляція </div>
                                                                <div class = "props__value"> 46 дБ </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Товщина профілю </div>
                                                                <div class = "props__value"> 85 мм </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Гарантія </div>
                                                                <div class = "props__value"> 5 років </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                            <div class="params">
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.2s">
                                                    <div class="params__name">Збереження тепла</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.4s">
                                                    <div class="params__name">Захист від сонця</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.6s">
                                                    <div class="params__name">Захист від шуму</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 40%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item wow fadeInRight" data-wow-delay="0.8s">
                                                    <div class="params__name">Захист від взлому</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 100%"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="litle-header wow fadeInUp">Додаткові опції</div>
                                            <div class="options">
                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                            </div>
                                            <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div>

<!-- ========-->
                                    <!-- SP 4000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Вікно SP 4000 </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp4000.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class = "props__name"> Призначення </div>
                                                            <div class = "props__value"> Для квартир і будинків з автономним опаленням </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Профіль </div>
                                                            <div class = "props__value"> Німецький профіль Aluplast Ideal 4000 (5 повітряних камер / папірусно білий ущільнювач) </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Склопакет </div>
                                                            <div class = "props__value"> Енергозберігаючий / Мультифункціональний / с Argon </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                            <div class = "props__value"> 0,75 c * м2 / Вт </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Шумоізоляція </div>
                                                            <div class = "props__value"> 32 дБ </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Товщина профілю </div>
                                                            <div class = "props__value"> 70 мм </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Гарантія </div>
                                                            <div class = "props__value"> 5 років </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Збереження тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від сонця</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від шуму</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від взлому</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                    <!-- ========-->
                                    <!-- SP 2000-->
                                    <!-- ========-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Вікно SP 2000 </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp2000.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class = "props__name"> Призначення </div>
                                                            <div class = "props__value"> Для сучасних котеджів, приватних будинків і елітних житлових комплексів </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Профіль </div>
                                                            <div class = "props__value"> Німецький Aluplast Ideal 2000 New (3 повітряних камери / чорний ущільнювач) </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Склопакет </div>
                                                            <div class = "props__value"> Однокамерний мультифункціональний
                                                            
                                                            Guardian Clima Guard Solar </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                            <div class = "props__value"> 0,6 c * м2 / Вт </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Шумоізоляція </div>
                                                            <div class = "props__value"> 30 дБ </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Товщина профілю </div>
                                                            <div class = "props__value"> 60 мм </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Гарантія </div>
                                                            <div class = "props__value"> 5 років </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Збереження тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від сонця</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від шуму</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від взлому</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                            <div class="product-header__title wow fadeInUp"> Вікно SP 8 SERIES </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product wow fadeInLeft"><img src="img/products/sp8.png" alt="" /></div>
                                            </div>
                                            <div class="product__text wow fadeInRight">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name"> Призначення </div>
                                                            <div class="props__value"> Для сучасних котеджів, приватних будинків і елітних житлових комплексів </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Профіль </div>
                                                            <div class="props__value"> WDS 8 Series (6 повітряних камер, 3 контури ущільнення/сірий ущільнювач) </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Склопакет </div>
                                                            <div class="props__value"> Мультифункціональний Guardian Clima Guard Solar (42 мм + Argon) </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Коефіцієнт опору теплопередачі </div>
                                                            <div class="props__value"> 1,45 c * м2/Вт </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Шумоізоляція </div>
                                                            <div class="props__value"> 34 дБ </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Товщина профілю </div>
                                                            <div class="props__value"> 82 мм </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Гарантія </div>
                                                            <div class="props__value"> 5 років </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.2s">
                                                <div class="params__name">Збереження тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.4s">
                                                <div class="params__name">Захист від сонця</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.6s">
                                                <div class="params__name">Захист від шуму</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item wow fadeInRight" data-wow-delay="0.8s">
                                                <div class="params__name">Захист від взлому</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header wow fadeInUp">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>  <!-- =======-->
                                    <!-- SP7-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Вікно SP 7 SERIES </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp7.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class = "props__name"> Призначення </div>
                                                            <div class = "props__value"> Для квартир і будинків з автономним опаленням </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Профіль </div>
                                                            <div class = "props__value"> WDS 7 Series (6 повітряних камер / сірий ущільнювач) </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Склопакет </div>
                                                            <div class = "props__value"> Двокамерний мультифункціональний
                                                            
                                                            Guardian Clima Guard Solar </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                            <div class = "props__value"> 0,75 c * м2 / Вт </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Шумоізоляція </div>
                                                            <div class = "props__value"> 32 дБ </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Товщина профілю </div>
                                                            <div class = "props__value"> 70 мм </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Гарантія </div>
                                                            <div class = "props__value"> 5 років </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Збереження тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від сонця</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від шуму</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від взлому</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div> 
                                    <!-- =======-->
                                    <!-- SP6-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                            <div class="product-header">
                                                <div class="product-header__title"> Вікно SP 6 Series </div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product"><img src="img/products/sp500.png" alt="" /></div>
                                                </div>
                                                <div class="product__text">
                                                    <div class="props">
                                                        <div class="props__item">
                                                            <div class = "props__name"> Призначення </div>
                                                                <div class = "props__value"> Для квартир і будинків з автономним опаленням, а також приміщень </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Профіль </div>
                                                                <div class = "props__value"> WDS 6 Series (6 повітряних камер) </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Склопакет </div>
                                                                <div class = "props__value"> Двокамерний мультифункціональний енергозберігаючий склопакет Guardian Clima Guard Solar </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                                <div class = "props__value"> 0,75 c * м2 / Вт </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Шумоізоляція </div>
                                                                <div class = "props__value"> 32 дБ </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Товщина профілю </div>
                                                                <div class = "props__value"> 70 мм </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Гарантія </div>
                                                                <div class = "props__value"> 5 років </div>
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                            <div class="params">
                                                <div class="params__item">
                                                    <div class="params__name">Збереження тепла</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item">
                                                    <div class="params__name">Захист від сонця</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 70%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item">
                                                    <div class="params__name">Захист від шуму</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 40%"></span></div>
                                                    </div>
                                                </div>
                                                <div class="params__item">
                                                    <div class="params__name">Захист від взлому</div>
                                                    <div class="params__value">
                                                        <div class="stars"><span style="width: 100%"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="litle-header">Додаткові опції</div>
                                            <div class="options">
                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                            </div>
                                            <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div><!-- =======-->
                                    <!-- SP5-->
                                    <!-- =======-->
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Вікно SP 5 SERIES </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/sp4.png" alt="" /></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class = "props__name"> Призначення </div>
                                                            <div class = "props__value"> Для квартир і будинків з централізованим опаленням </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Профіль </div>
                                                            <div class = "props__value"> WDS 5 Series (5 повітряних камер / сірий ущільнювач) </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Склопакет </div>
                                                            <div class = "props__value"> двокамерний мультифункціональний
                                                            
                                                            Guardian Clima Guard Solar </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Коефіцієнт опору теплопередачі </div>
                                                            <div class = "props__value"> 0,6 c * м2 / Вт </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Шумоізоляція </div>
                                                            <div class = "props__value"> 30 дБ </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Товщина профілю </div>
                                                            <div class = "props__value"> 60 мм </div>
                                                            </div>
                                                            <div class = "props__item">
                                                            <div class = "props__name"> Гарантія </div>
                                                            <div class = "props__value"> 5 років </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="params">
                                            <div class="params__item">
                                                <div class="params__name">Збереження тепла</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від сонця</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 70%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від шуму</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 40%"></span></div>
                                                </div>
                                            </div>
                                            <div class="params__item">
                                                <div class="params__name">Захист від взлому</div>
                                                <div class="params__value">
                                                    <div class="stars"><span style="width: 100%"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="litle-header">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                                <div class="product-header__title wow fadeInUp"> Класичний </div>
                                                <div class="product-header__nav"> </div>
                                            </div>
                                            <div class="product">
                                                <div class="product__image">
                                                    <div class="photo-product wow fadeInLeft"><img src="img/products/b1.jpg" alt="" /></div>
                                                </div>
                                                <div class="product__text wow fadeInRight">
                                                    <div class="props">
                                                        <div class="props__item">
                                                            <div class = "props__name"> Призначення </div>
                                                                <div class = "props__value"> Для людей, які хочуть відремонтувати балкон за мінімальні гроші і в найкоротші терміни </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Опис </div>
                                                                <div class = "props__value"> зовнішня обробка сайдингом (за бажанням замовника);
                                                                <br> установка пластикової рами на балкон (засклення);
                                                                <br> внутрішня обробка балкона. </div>
                                                                </div>
                                                                <div class = "props__item">
                                                                <div class = "props__name"> Переваги </div>
                                                                <div class = "props__value"> Самий бюджетний і швидкий варіант </div>
                                                        </div>
                                            
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                           
                                            <div class="litle-header wow fadeInUp">Додаткові опції</div>
                                            <div class="options">
                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                            </div>
                                            <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                        </div>
                                        <div class="products-list__item">
                                                <div class="product-header">
                                                    <div class="product-header__title"> З виносом по підвіконню </div>
                                                    <div class="product-header__nav"> </div>
                                                </div>
                                                <div class="product">
                                                    <div class="product__image">
                                                        <div class="photo-product"><img src="img/products/b2.jpg" alt="" /></div>
                                                    </div>
                                                    <div class="product__text">
                                                        <div class="props">
                                                            <div class="props__item">
                                                                <div class = "props__name"> Призначення </div>
                                                                    <div class = "props__value"> Для людей, які хочуть отримати додатковий простір за невелику плату. </div>
                                                                    </div>
                                                                    <div class = "props__item">
                                                                    <div class = "props__name"> Опис </div>
                                                                    <div class = "props__value"> За допомогою зварювальних робіт металеві трикутники кріпляться до існуючого парапету. На край конструкції монтується пластикова рама, а по всьому периметру встановлюють збільшене підвіконня 300-400 мм. </div>
                                                                    </div>
                                                                    <div class = "props__item">
                                                                    <div class = "props__name"> Переваги </div>
                                                                    <div class = "props__value"> Збільшується глибина підвіконня, не забираючи простір.
                                                                    Жорстко встановлене підвіконня, яке витримує квіти і розсаду. Візуально збільшується площа балкона. </div>
                                                            </div>
                                                
                                                        </div>
                                                    </div>
                                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                </div>
                                               
                                                <div class="litle-header">Додаткові опції</div>
                                                <div class="options">
                                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                                </div>
                                                <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                            </div>
                                            <div class="products-list__item">
                                                    <div class="product-header">
                                                        <div class="product-header__title"> З виносом по підлозі </div>
                                                        <div class="product-header__nav"> </div>
                                                    </div>
                                                    <div class="product">
                                                        <div class="product__image">
                                                            <div class="photo-product"><img src="img/products/b3.jpg" alt="" /></div>
                                                        </div>
                                                        <div class="product__text">
                                                            <div class="props">
                                                                <div class="props__item">
                                                                    <div class="props__name"> Призначення </div>
                                                                        <div class="props__value"> Для тих, хто хоче збільшити площу балкона до 50% </div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                        <div class="props__name"> Опис </div>
                                                                        <div class="props__value"> Після демонтажу
                                                                        виконуються зварювальні роботи по збільшенню площі балкона по підлозі.
                                                                        Після установки нового парапету балкон зовні обшивається сайдингом з утепленням.
                                                                        Далі монтаж пластикової рами і внутрішнє оздоблення. </div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                        <div class="props__name"> Переваги </div>
                                                                        <div class="props__value"> Площа конструкції збільшується в 1,5 рази, можливо облаштувати спальне місце або встановити шафу, використовувати балкон для відпочинку </div>
                                                                </div>
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                        <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                    </div>
                                                   
                                                    <div class="litle-header">Додаткові опції</div>
                                                    <div class="options">
                                                        <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                                    </div>
                                                    <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                                    <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                </div>
                                                <div class="products-list__item">
                                                        <div class="product-header">
                                                            <div class="product-header__title"> З виносом по підлозі та підвіконню </div>
                                                            <div class="product-header__nav"> </div>
                                                        </div>
                                                        <div class="product">
                                                            <div class="product__image">
                                                                <div class="photo-product"><img src="img/products/b4.jpg" alt="" /></div>
                                                            </div>
                                                            <div class="product__text">
                                                                <div class="props">
                                                                    <div class="props__item">
                                                                        <div class="props__name"> Призначення </div>
                                                                            <div class="props__value"> Для тих, кому потрібен максимально просторий балкон з надійним дахом, утепленим і обезшумленим. </div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                            <div class="props__name"> Опис </div>
                                                                            <div class="props__value"> Встановлюється металевий каркас для майбутнього даху.
                                                                            Стелиться OSB плита і руберойд.
                                                                            Поверх цього монтується бітумна черепиця.
                                                                            Дах утеплюється пінопластом і закривається гідробар'єром. </div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                            <div class="props__name"> Переваги </div>
                                                                            <div class="props__value"> Максимально використовується площа балкона, а також захист від опадів і протікань </div>
                                                                    </div>
                                                        
                                                                </div>
                                                            </div>
                                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                        </div>
                                                       
                                                        <div class="litle-header">Додаткові опції</div>
                                                        <div class="options">
                                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                                        </div>
                                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                    </div>
                                                    <div class="products-list__item">
                                                            <div class="product-header">
                                                                <div class="product-header__title"> Французький </div>
                                                                <div class="product-header__nav"> </div>
                                                            </div>
                                                            <div class="product">
                                                                <div class="product__image">
                                                                    <div class="photo-product"><img src="img/products/b5.jpg" alt="" /></div>
                                                                </div>
                                                                <div class="product__text">
                                                                    <div class="props">
                                                                        <div class="props__item">
                                                                            <div class="props__name"> Призначення </div>
                                                                                <div class="props__value"> Для тих, хто хоче мати гарний стильний балкон з чудовим краєвидом </div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                <div class="props__name"> Опис </div>
                                                                                <div class="props__value"> Існує два варіанти французького балкона:
                                                                                
                                                                                <br> огорожа з красивими кованими гратами;
                                                                                <br> панорамне вікно. </div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                <div class="props__name"> Переваги </div>
                                                                                <div class="props__value"> Сучасний вигляд, швидкість монтажу.
                                                                                Низ балкона можна зробити тонованими склопакетами, використовувати скло сатин, або ж закрити термопанелями. </div>
                                                                        </div>
                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                            </div>
                                                           
                                                            <div class="litle-header">Додаткові опції</div>
                                                            <div class="options">
                                                                <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                                            </div>
                                                            <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                                            <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                        </div>
                                                        <div class="products-list__item">
                                                                <div class="product-header">
                                                                    <div class="product-header__title"> Французький з виносом по підлозі</div>
                                                                    <div class="product-header__nav"> </div>
                                                                </div>
                                                                <div class="product">
                                                                    <div class="product__image">
                                                                        <div class="photo-product"><img src="img/products/b6.jpg" alt="" /></div>
                                                                    </div>
                                                                    <div class="product__text">
                                                                        <div class="props">
                                                                            <div class="props__item">
                                                                                <div class="props__name"> Призначення </div>
                                                                                    <div class="props__value"> Для людей, яких не влаштовує ширина балкона </div>
                                                                                    </div>
                                                                                    <div class="props__item">
                                                                                    <div class="props__name"> Опис </div>
                                                                                    <div class="props__value"> Після демонтажних робіт виконуються зварювальні роботи з виносу скління.
                                                                                    Підшивається низ балкона, далі монтаж панорамного скління, тепло- і шумоізоляція козирка. Останній крок - внутрішнє оздоблення. </div>
                                                                                    </div>
                                                                                    <div class="props__item">
                                                                                    <div class="props__name"> Переваги </div>
                                                                                    <div class="props__value"> Відмінний зовнішній вигляд плюс функціональність </div>
                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                                </div>
                                                               
                                                                <div class="litle-header">Додаткові опції</div>
                                                                <div class="options">
                                                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                                                </div>
                                                                <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                                            </div>
                                                            <div class="products-list__item">
                                                                    <div class="product-header">
                                                                        <div class="product-header__title"> Відкритий </div>
                                                                        <div class="product-header__nav"> </div>
                                                                    </div>
                                                                    <div class="product">
                                                                        <div class="product__image">
                                                                            <div class="photo-product"><img src="img/products/b7.jpg" alt="" /></div>
                                                                        </div>
                                                                        <div class="product__text">
                                                                            <div class="props">
                                                                                <div class="props__item">
                                                                                    <div class="props__name"> Призначення </div>
                                                                                        <div class="props__value"> Для тих, хто хоче насолоджуватися відкритим видом і чистим повітрям </div>
                                                                                        </div>
                                                                                        <div class="props__item">
                                                                                        <div class="props__name"> Опис </div>
                                                                                        <div class="props__value"> Проводиться повний демонтаж на балконі, включаючи стяжку. Встановлюється нова кована огорожа. Укладання плитки, фарбування задньої стінки фасадною фарбою, установка кріплення для квітів - за бажанням замовника. </div>
                                                                                        </div>
                                                                                        <div class="props__item">
                                                                                        <div class="props__name"> Переваги </div>
                                                                                        <div class="props__value"> Відчуття простору, чисте повітря, якщо балкон виходить на тиху вулицю або ліс. </div>
                                                                                </div>
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                        <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                                    </div>
                                                                   
                                                                    <div class="litle-header">Додаткові опції</div>
                                                                    <div class="options">
                                                                        <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                                                    </div>
                                                                    <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                            <div class="product-header__title wow fadeInUp"> Вхідні двері </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product wow fadeInLeft"><img src="img/products/d1.png" alt="" /><a class="door_types" href="img/doors.jpg"  data-fancybox="gallery-2"><img src="img/doors.jpg"></a></div>
                                            </div>
                                            <div class="product__text wow fadeInRight">
                                                <div class="props">
                                                    <div class="props__item">
                                                        <div class="props__name"> Призначення </div>
                                                            <div class="props__value"> Для використання в котеджах і приватних будинках </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Опис </div>
                                                            <div class="props__value"> Вхідні двері, з огляду на якість та надійність, на рівень вище ніж інші види дверей. </div>
                                                            </div>
                                                            <div class="props__item">
                                                            <div class="props__name"> Переваги </div>
                                                            <div class="props__value"> Протизломна фурнітура роблять ці двері надійними, а багатоточковий механізм гарантує відмінне притиснення по всій довжині двері. </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                       
                                        <div class="litle-header wow fadeInUp">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e wow zoomIn" data-wow-delay="0.2"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.3s"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.4s"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.5s"><img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.6s"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.7s"><img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e wow zoomIn" data-wow-delay="0.8s"><img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="0.9s"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig wow zoomIn" data-wow-delay="1s"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Балконні двері </div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/d2.png" alt="" /><a class="door_types" href="img/doors.jpg"  data-fancybox="gallery-2"><img src="img/doors.jpg"></a></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                        <div class="props__item">
                                                            <div class="props__name"> Призначення </div>
                                                                <div class="props__value"> Для використання в квартирах і приватних будинках </div>
                                                                </div>
                                                                <div class="props__item">
                                                                <div class="props__name"> Опис </div>
                                                                <div class="props__value"> Балконні двері ПВХ набули поширення за зовнішній вигляд і неймовірно легкий догляд </div>
                                                                </div>
                                                                <div class="props__item">
                                                                <div class="props__name"> Переваги </div>
                                                                <div class="props__value"> Практичність, висока теплоізоляція і відмінно підходять під будь-який інтер'єр </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        
                                        <div class="litle-header">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                        <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                                    </div>
                                    <div class="products-list__item">
                                        <div class="product-header">
                                            <div class="product-header__title"> Двері міжкімнатні</div>
                                            <div class="product-header__nav"> </div>
                                        </div>
                                        <div class="product">
                                            <div class="product__image">
                                                <div class="photo-product"><img src="img/products/d3.png" alt="" /><a class="door_types" href="img/doors.jpg"  data-fancybox="gallery-2"><img src="img/doors.jpg"></a></div>
                                            </div>
                                            <div class="product__text">
                                                <div class="props">
                                                        <div class="props__item">
                                                            <div class="props__name"> Призначення </div>
                                                                <div class="props__value"> Для офісів, квартир і приватних будинків </div>
                                                                </div>
                                                                <div class="props__item">
                                                                <div class="props__name"> Опис </div>
                                                                <div class="props__value"> Металопластикові міжкімнатні двері набирають популярність навіть в житлових приміщеннях </div>
                                                                </div>
                                                                <div class="props__item">
                                                                <div class="props__name"> Переваги </div>
                                                                <div class="props__value"> Мінімальний догляд, висока тепло- і шумоізоляція, відсутність деформації </div>
                                                            </div>
                                                </div>
                                            </div>
                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                        </div>
                                        <div class="litle-header">Додаткові опції</div>
                                        <div class="options">
                                            <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                        </div>
                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                    <div class="product-header__title"> Офісні перегородки </div>
                                    <div class="product-header__nav"> </div>
                                </div>
                                <div class="product">
                                    <div class="product__image">
                                        <div class="photo-product"><img src="img/products/p1.png" alt="" /></div>
                                    </div>
                                    <div class="product__text">
                                        <div class="props">
                                                <div class="props__item">
                                                    <div class="props__name"> Призначення </div>
                                                        <div class="props__value"> Для офісів, торгових приміщень </div>
                                                        </div>
                                                        <div class="props__item">
                                                        <div class="props__name"> Опис </div>
                                                        <div class="props__value"> Офісні перегородки ПВХ - кращий вибір для будь-якого комерційного приміщення </div>
                                                        </div>
                                                        <div class="props__item">
                                                        <div class="props__name"> Переваги </div>
                                                        <div class="props__value"> Практичність, висока теплоізоляція, сучасний зовнішній вигляд </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                </div>
                                
                                <div class="litle-header">Додаткові опції</div>
                                <div class="options">
                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                </div>
                                <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                                <div class="decor decor_1"><img src="img/measure_tape_PNG32.png" alt="" /></div>
                            </div>
                            <div class="products-list__item">
                                <div class="product-header">
                                    <div class="product-header__title"> Перегородки міжкімнатні</div>
                                    <div class="product-header__nav"> </div>
                                </div>
                                <div class="product">
                                    <div class="product__image">
                                        <div class="photo-product"><img src="img/products/p2.png" alt="" /></div>
                                    </div>
                                    <div class="product__text">
                                        <div class="props">
                                                  <div class="props__item">
                                                    <div class="props__name"> Призначення </div>
                                                        <div class="props__value"> Для квартир, приватних будинків </div>
                                                        </div>
                                                        <div class="props__item">
                                                        <div class="props__name"> Опис </div>
                                                        <div class="props__value"> Металопластикові перегородки це відмінна альтернатива повноцінним перегородок з каменю </div>
                                                        </div>
                                                        <div class="props__item">
                                                        <div class="props__name"> Переваги </div>
                                                        <div class="props__value"> Швидкість монтажу, мінімальний догляд, тепло- і шумоізоляція </div>
                                                        </div>
                                                        
                                        </div>
                                    </div>
                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                </div>
                                <div class="litle-header">Додаткові опції</div>
                                <div class="options">
                                    <div class="decor decor_14"><img src="img/lines/lines8.png" alt="" /></div><span class="button button_e"><img src="img/options/icons8_snow_40px.png" alt="" /><span>Тепла <br>зима</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_snowflake_40px.png" alt="" /><span>Захист від <br>промерзання</span></span><span class="button button_e"><img src="img/options/icons8_partly_cloudy_day_40px.png" alt="" /><span>Прохолодне літо</span></span><span class="button button_e"> <img src="img/options/icons8_rain_cloud_40px.png" alt="" /><span>Тихий дощ</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_dry_30px.png" alt="" /><span>Покрокове провітрювання</span></span><span class="button button_e"> <img src="img/options/icons8_open_window_40px.png" alt="" /><span>Фіксація стулки</span></span><span class="button button_e"> <img src="img/options/icons8_baby_40px.png" alt="" /><span>Baby <br>control</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_wind_40px.png" alt="" /><span>Стійкість до вітру</span></span><span class="button button_e button_ebig"><img src="img/options/icons8_closed_window_30px.png" alt="" /><span>Ідеальне підвіконня</span></span>
                                </div>
                                <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                                                <div class="props__name"> Опис </div>
                                                                    <div class="props__value"> Komfort - красиве і міцне економ рішення, завдяки якому ви забудете про дешеві шорсткі підвіконня. </div>
                                                                    </div>
                                                                    <div class="props__item">
                                                                    <div class="props__name"> Покриття </div>
                                                                    <div class="props__value"> Декоративна плівка з гарними малюнками дерева і мармуру. У колекції є текстурні і абсолютно гладкі рішення. </div>
                                                                    </div>
                                                                    <div class="props__item">
                                                                    <div class="props__name"> Основа </div>
                                                                    <div class="props__value"> Оригінальна фірмова конструкція ребер жорсткості забезпечує високу міцність. Бездоганна надійність і безпечне екологічно чиста сировина роблять Komfort найміцнішим серед підвіконь економ класу. </div>
                                                                </div>
                                                                
                                                    </div>
                                                </div>
                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                            </div>
                                        
                                            <div class="litle-header wow fadeInUp">Кольори</div>
                                            <div class="options windowsills">
                                                            <div>			<img src="./img/danke-komfort/1.jpg">Komfort Сірий</div>
                                                            <div>			<img src="./img/danke-komfort/2.jpg">Komfort Горіх</div>
                                                            <div>			<img src="./img/danke-komfort/3.jpg">Komfort Білий</div>
                                                            <div>			<img src="./img/danke-komfort/4.jpg">Komfort Дуб</div>
                                                            <div>			<img src="./img/danke-komfort/5.jpg">Komfort Бежевий</div>
                                                            <div>			<img src="./img/danke-komfort/6.jpg">Komfort Білий дуб</div>
    
                                            </div>
                                            <div class="toact wow fadeIn" data-wow-delay="1s"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                                                    <div class="props__name"> Опис </div>
                                                                        <div class="props__value"> "Недорого" не означає "неякісно"! Підвіконня економ-класу може служити довго, якщо це - STANDARD. </div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                        <div class="props__name"> Покриття </div>
                                                                        <div class="props__value"> Зносостійка плівка Elesgo створена з урахуванням всіх вимог українських споживачів: гладка акрилова поверхня. </div>
                                                                        </div>
                                                                        <div class="props__item">
                                                                        <div class="props__name"> Основа </div>
                                                                        <div class="props__value"> Для створення підвіконня використовується виключно первинне екологічно безпечну сировину. </div>
                                                                    </div>
                                                                    
                                                        </div>
                                                    </div>
                                                    <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                    <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                </div>
                                            
                                                <div class="litle-header">Кольори</div>
                                                <div class="options windowsills">
                                                        <div>			<img src="./img/danke-standard/1.jpg">Білий матовий Standard</div>
                                                        <div>			<img src="./img/danke-standard/2.jpg">Золотий дуб Standard</div>
                                                        <div>			<img src="./img/danke-standard/3.jpg">Мармур Standard</div>
        
                                                </div>
                                            <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                                                        <div class="props__name"> Опис </div>
                                                                            <div class="props__value"> Підвіконня WDS збережуть свій первозданний вигляд довгі роки і витримають будь-які побутові навантаження. Ідеально поєднуються з вікнами WDS </div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                            <div class="props__name"> Покриття </div>
                                                                            <div class="props__value"> Надійне покриття, стійке до високих температур, вологи і подряпин </div>
                                                                            </div>
                                                                            <div class="props__item">
                                                                            <div class="props__name"> Основа </div>
                                                                            <div class="props__value"> Внутрішня будова забезпечує високу міцність конструкції </div>
                                                                        </div>
                                                                        
                                                            </div>
                                                        </div>
                                                        <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                        <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                    </div>
                                                
                                                    <div class="litle-header">Цвета</div>
                                                    <div class="options windowsills">
                                                        <div> <img src="./img/wds/1.jpg"> Античний мармур </div>
                                                             <div> <img src="./img/wds/2.jpg"> Темна вишня </div>
                                                             <div> <img src="./img/wds/3.jpg"> Золотий дуб </div>
                                                             <div> <img src="./img/wds/4.jpg"> Димчастий граніт </div>
                                                             <div> <img src="./img/wds/5.jpg"> Дуб Монтана </div>
                                                             <div> <img src="./img/wds/6.jpg"> Горіх </div>
            
                                                    </div>
                                                <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                                                            <div class="props__name"> Опис </div>
                                                                                <div class="props__value"> Сучасний дизайн - 13 декорів в глянсовому і матовому виконанні. Потовщені стінки підвіконня.
                                                                                Презентабельний зовнішній вигляд - округлений "Капінос".
                                                                                Оптимальне співвідношення ціни і якості. </div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                <div class="props__name"> Покриття </div>
                                                                                <div class="props__value"> Зносостійка плівка не боїться прямих сонячних променів, механічних навантажень. </div>
                                                                                </div>
                                                                                <div class="props__item">
                                                                                <div class="props__name"> Основа </div>
                                                                                <div class="props__value"> Додаткові ребра жорсткості роблять підвіконня Sauberg неймовірно міцними. </div>
                                                                                </div>
                                                                            
                                                                </div>
                                                            </div>
                                                            <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                            <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                        </div>
                                                    
                                                        <div class="litle-header"> Кольори </div>
                                                            <div class="options windowsills">
                                                            <div> <img src="./img/sauberg/01.jpg"> Білий глянець </div>
                                                            <div> <img src="./img/sauberg/02.jpg"> Білий дуб глянець </div>
                                                            <div> <img src="./img/sauberg/03.jpg"> Мармур глянець </div>
                                                            <div> <img src="./img/sauberg/04.jpg"> Золотий дуб глянець </div>
                                                            <div> <img src="./img/sauberg/05.jpg"> Горіх глянець </div>
                                                            <div> <img src="./img/sauberg/06.jpg"> Темний дуб глянець </div> </div>
                                                            <P> <div class="options windowsills"> <div> <img src="./img/sauberg/07.jpg"> Білий матовий </div>
                                                            <div> <img src="./img/sauberg/08.jpg"> Мармур матовий </div>
                                                            <div> <img src="./img/sauberg/09.jpg"> Вінчестер матовий </div>
                                                            <div> <img src="./img/sauberg/10.jpg"> Золотий дуб матовий </div>
                                                            <div> <img src="./img/sauberg/11.jpg"> Горіх матовий </div>
                                                            <div> <img src="./img/sauberg/12.jpg"> Антрацит матовий </div>
                                                            </div>
                                                    <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                                                                                <div class="props__name"> Опис </div>
                                                                                    <div class="props__value"> Компанія Plastolit випускає ультрасучасні, надміцні підвіконня </div>
                                                                                    </div>
                                                                                    <div class="props__item">
                                                                                    <div class="props__name"> Покриття </div>
                                                                                    <div class="props__value"> Ламинация Elesgo стійка до подряпин, не вигоряє на сонці, не боїться вологи і підвищених температур. </div>
                                                                                    </div>
                                                                                    <div class="props__item">
                                                                                    <div class="props__name"> Основа </div>
                                                                                    <div class="props__value"> Неймовірна стійкість до різноманітних механічних впливів </div>
                                                                                </div>
                                                                                
                                                                    </div>
                                                                </div>
                                                                <div class="decor decor_12"><img src="img/lines/lines7.png" alt="" /></div>
                                                                <div class="decor decor_13"><img src="img/lines/lines7.png" alt="" /></div>
                                                            </div>
                                                        
                                                            <div class="litle-header"> Кольори </div>
                                                                 <div class="options windowsills">
                                                                 <div> <img src="./img/plastolit/01.png"> Білий </div>
                                                                 <div> <img src="./img/plastolit/02.png"> Мармур </div>
                                                                 <div> <img src="./img/plastolit/03.png"> Бежевий мармур </div>
                                                                 <div> <img src="./img/plastolit/04.png"> Золотий дуб </div>
                                                                 <div> <img src="./img/plastolit/05.png"> Рустикальний дуб </div>
                                                                 <div> <img src="./img/plastolit/06.png"> Венге </div>
                                                            </div>
                                                        <div class="toact"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
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
                <div class="section-header section-header_center wow fadeInUp">Кольорові рішення з захистом від деформації та вигорання </div>
                     <div class="section-subheader wow fadeInUp" data-wow-delay="0.2s"> Для вікон Stekloplast використовуються німецькі плівки "Сool colors" від компанії Hornschuch. Спеціальні колірні пігменти в їх складі відбивають більшість теплових променів. Так Stekloplast захищає свої ламіновані вікна від нагрівання і подальшої деформації профілю і всієї віконної конструкції. Так Stekloplast захистив свої ламіновані вікна від проблеми, з якою стикається більшість виробників ламінованих конструкцій </div>
                <div class="trees">
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="tree">
                            <div class="tree__img"><img src="img/colors/01.png" alt="" /></div>
                            <div class="tree__name">Золотий дуб</div>
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
                                    <div class="tree__name">Морений дуб</div>
                                </div>
                    </div>
                    <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tree">
                                <div class="tree__img"><img src="img/colors/05.png" alt="" /></div>
                                <div class="tree__name">Грецький горіх</div>
                            </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/06.png" alt="" /></div>
                                        <div class="tree__name">Світлий дуб</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/07.png" alt="" /></div>
                                        <div class="tree__name">Гірська сосна</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/08.png" alt="" /></div>
                                        <div class="tree__name">Смугастий дуглас</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tree">
                                        <div class="tree__img"><img src="img/colors/09.png" alt="" /></div>
                                        <div class="tree__name">Натуральний дуб</div>
                                    </div>
                        </div>
                        <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tree">
                                    <div class="tree__img"><img src="img/colors/010.png" alt="" /></div>
                                    <div class="tree__name">Сірий</div>
                                </div>
                            </div>
                            <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="tree">
                                            <div class="tree__img"><img src="img/colors/011.png" alt="" /></div>
                                            <div class="tree__name">Зелений мох</div>
                                        </div>
                            </div>
                            <div class="trees__item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="tree">
                                            <div class="tree__img"><img src="img/colors/012.png" alt="" /></div>
                                            <div class="tree__name">Винно-червоний</div>
                                        </div>
                            </div>
                            <div class="trees__item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="tree">
                                            <div class="tree__img"><img src="img/colors/013.png" alt="" /></div>
                                            <div class="tree__name">Коричневий шоколадний</div>
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
                        <div class="section-header">Інноваційні склопакети</div>
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
                                <div class="types__name"> Мультифункціональні </div>
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                    <div class="types__item wow fadeInUp">
                                    <div class="types__img"> <img src="img/pack2.png" alt="" /> </div>
                                    <div class="types__name"> Енергозберігаючі </div>
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                    <div class="types__item">
                                    <div class="types__img"> <img src="img/pack3.png" alt="" /> </div>
                                    <div class="types__name"> Дзеркальні </div>
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                    <div class="types__item">
                                    <div class="types__img"> <img src="img/pack4.png" alt="" /> </div>
                                    <div class="types__name"> Протиударні </div>
                                    </div>
                                    </div>
                                    <div class="swiper-slide">
                                    <div class="types__item">
                                    <div class="types__img"> <img src="img/pack5.png" alt="" /> </div>
                                    <div class="types__name"> Зі шпросами </div>
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
                        <div class="section-header wow fadeInUp">Конструкції будь-яких видів</div>
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
                                    <div class="forms__name">Розсувні</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="forms__item wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="forms__img"><img src="img/vzlom.jpg" alt="" /></div>
                                    <div class="forms__name">Протизламні</div>
                                </div>
                            </div>
                        <div class="swiper-slide">
                            <div class="forms__item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="forms__img"><img src="img/654.png" alt="" /></div>
                                <div class="forms__name">Круглі</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="forms__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="forms__img"><img src="img/655.png" alt="" /></div>
                                <div class="forms__name">Трикутні</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="forms__item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="forms__img"><img src="img/wt05.png" alt="" /></div>
                                <div class="forms__name">Трапецієвидні</div>
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
                        <div class="section-header wow fadeInUp">Не знаєте, <br> як вибрати? </div>
                             <div class="article-subheader article-subheader_m wow fadeInUp" data-wow-delay="0.2s"> Опишіть менеджеру завдання і ми допоможемо вам підібрати оптимальний профіль: </div>
                             <ul class="listcheck">
                             <li class="listcheck__item wow fadeInUp" data-wow-delay="0.3s"> Розрахуємо тепловтрати і допоможемо їх скоротити </li>
                             <li class="listcheck__item wow fadeInUp" data-wow-delay="0.4s"> Обчислимо навантаження і проведемо підбір по міцності </li>
                             <li class="listcheck__item wow fadeInUp" data-wow-delay="0.5s"> Врахуємо вимоги по шумоізоляції і особливості експлуатації </li>
                        </ul>
                        <div class="article-act wow fadeInUp" data-wow-delay="1s"><button class="button button_f" data-modal="modal-2">Підібрати профіль</button></div>
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
                        <div class="section-header section-header_article wow fadeInUp">Скористайтесь <br> розстрочкою від Stekloplast - <br> <span> до 2 років під 0%! </span> </div>
                             <ul class="listcheck">
                             <li class="listcheck__item wow fadeInUp" data-wow-delay="0.2s"> Без довідок про доходи </li>
                             <li class="listcheck__item wow fadeInUp" data-wow-delay="0.3s"> Без черг в банках </li>
                             <li class="listcheck__item wow fadeInUp" data-wow-delay="0.4s"> Без поручителів </li>
                             </ul>
                             <div class="article-comment wow fadeInUp" data-wow-delay="0.5s"> Який сенс заощаджувати, якщо ви ставите вікна на 50 років, вірно? </div>
                             <div class="article-act wow fadeInUp" data-wow-delay="1s"> <button class="button button_f" data-modal="modal-3"> Оформити розстрочку </button> </div>
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
                        <div class="section-header wow fadeInUp">Stekloplast - <br>вікна за правилами <br> з 1997 року </div>
                             <div class="article-subheader article-subheader_m article-subheader_auto wow fadeInUp" data-wow-delay="0.2s"> В особі Stekloplast ви знайшли надійного партнера, з яким не доведеться хвилюватися про якість. Вся продукція йде на експорт, тому проходить суворий контроль. </div>
                             <div class="accent">
                             <div class="accent__img"> <img src="img/icons8_licence_32px.png" alt="" /> </div>
                             <div class="accent__text wow fadeInUp" data-wow-delay="1s"> Ваші вікна мають міжнародні сертифікати якості, адже використовуються навіть за кордоном! </div>
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
                        <div class="section-header section-header_rev wow fadeInUp"> Ви здивуєтесь, на яких об'єктах встановлені вікна Stekloplast</div>
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
                                <div class="object__name">ТРЦ Lavina Mall, <span>Київ</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.3s">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/2.png" alt="" /></div>
                                <div class="object__name">КВЦ «Парковий», <span>Київ</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.4s">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/3.png" alt="" /></div>
                                <div class="object__name">ЦУМ, <span>Київ</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/4.jpg" alt="" /></div>
                                <div class="object__name">ТРЦ Донецьк City, <span>Донецьк</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/5.jpg" alt="" /></div>
                                <div class="object__name">Готель Аксельхоф, <span>Дніпро</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/6.jpg" alt="" /></div>
                                <div class="object__name">Бізнес-центр, <span>Донецьк</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/7.jpg" alt="" /></div>
                                <div class="object__name">ЖК Амстердам, <span>Дніпро</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/8.jpg" alt="" /></div>
                                <div class="object__name">ЖК Палермо, <span>Дніпро</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="object">
                                <div class="object__img"><img src="img/objects/9.jpg" alt="" /></div>
                                <div class="object__name">Автосалон Mazda, <span>Дніпро</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="object">
                                    <div class="object__img"><img src="img/objects/10.jpg" alt="" /></div>
                                    <div class="object__name">ТЦ Пассаж, <span>Дніпро</span></div>
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
                <div class="mheader wow fadeInLeft">Додаткові послуги</div>
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
                                    <div class="service__act"><button class="button button_f" data-modal="modal-4">Замовити</button></div>
                                </div>
                            </div>
                            <div class="services__item">
                                <div class="service wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="service__content">
                                        <div class="service__img">
                                            <div class="service__lines"><span></span><span></span></div><img src="img/507.png" alt="" />
                                        </div>
                                        <div class="service__name">Установка відкосів</div>
                                    </div>
                                    <div class="service__act"><button class="button button_f" data-modal="modal-4">Замовити</button></div>
                                </div>
                            </div>
                            <div class="services__item">
                                <div class="service wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="service__content">
                                        <div class="service__img">
                                            <div class="service__lines"><span></span><span></span></div><img src="img/1514926121_remontokon.png" alt="" />
                                        </div>
                                        <div class="service__name">Ремонт та регулювання вікон</div>
                                    </div>
                                    <div class="service__act"><button class="button button_f" data-modal="modal-4">Замовити</button></div>
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
                        <div class="promo__header wow jackInTheBox">Акція! </div>
                             <div class="promo__text wow jackInTheBox"> Тільки <b> до <?php echo date('t.m'); ?> </b> акція: <br> 5-камерний профіль за ціною 3-камерного! </div>
                        <div class="promo__img"><img class="wow fadeInRight" src="img/profile2.png" alt="" /></div>
                        <div class="promo__act wow jackInTheBox"><button class="button button_f" data-modal="modal-1">Розрахувати вартість</button></div>
                    </div>
                   
                </div>
            </div>
        </section><!-- =============-->
        <!-- НАШИ ПАРТНЕРЫ-->
        <!-- =============-->
        <section class="section section_light">
            <div class="container">
                <div class="section-header fadeInUp">Наші партнери</div>
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
                        <div class="mheader">Приходьте до нас в офіс!</div>
                        <div class="contacts-header">Представництво в Києві:</div>
                        <div class="contacts-item"><span> <img src="img/icons8_marker_20px.png" alt="" /><span>Тверський тупик 5а</span></span></div>
                        <div class="contacts-item"><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(067) 10-10-313</span></span><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(063) 919-22-23</span></span></div>
                        <div class="contacts-item"><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(050) 035-04-03</span></span><span> <img src="img/icons8_iphone_x_20px_1.png" alt="" /><span>(044) 221-36-53</span></span></div>
                        <div class="contacts-header">Завод в Дніпрі:</div>
                        <div class="contacts-item"><span> <img src="img/icons8_marker_20px.png" alt="" /><span>проспект Богдана Хмельницького 148</span></span></div>
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
                        <ul class="menu_phone"><li><a href="tel:0671010313"> <img src="./img/kyivstar.png"></a></li>           
<li><a href="tel:0500350403"> <img src="./img/vodaphone.png">     </a></li> 
<li><a href="tel:0639192223">  <img src="./img/lifecell.png">        </a></li> 
<li><a href="tel:0442213653">   <img src="./img/homephone.png">    </a></li> </ul>
            <div class="container container_rel">
                <div class="decor decor_5"><img src="img/SP_2000_aluplast.png" alt="" /></div>
                <div class="decor decor_33"><img src="img/lines/lines22.png" alt="" /></div>
                <div class="footer__header">Підпишіться на нас у соцмережах, <br> щоб стежити за акціями та новинами!</div>
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
                <div class="footer__copy">© 2020. Stekloplast Київ 
                    | Розробка: <a href="https://tkachuk.pro" class="tkachuk"  target="_blank">tkachuk.pro</a></div>
            </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
</body>

</html>