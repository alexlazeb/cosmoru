<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9,chrome=1" />
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
    <![endif]-->
    <title>COSMORU - косметика рунета</title>
    <!--<meta http-equiv="" content="IE=edge,chrome=1" />-->
    <meta name="keywords" content="косметика рунета, COSMORU " />
    <meta name="description" content="COSMORU - косметика рунета" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
    <link href="http://fnt.webink.com/wfs/webink.css/?project=85797F87-DC42-4117-8FB5-653DD6EF7A26&fonts=73E6C83D-7F13-A8AE-4770-C315AE5061C3:f=MyriadPro-Regular,1421BCAA-4D56-EF9D-A008-8F0EFD21830C:f=MyriadPro-Bold,73FEA18A-033F-AE20-4C65-461CA87E3CF3:f=MyriadPro-It,F7BFE656-C078-45C2-FE87-230C4CB9A997:f=MyriadPro-SemiboldIt,050FBD0F-5D55-410F-DC57-586D49D25BCB:f=MyriadPro-Semibold,929B8C2C-C67C-8345-92BA-BFA9AFEEDF57:f=MyriadPro-BoldIt" rel="stylesheet" type="text/css"/>
    <!--<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen, projection" />-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="css/ie/ie-7.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <script src="js/jquery-1.9.0.min.js"></script>
<!--    <script src="js/jquery.js"></script>-->
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <script src="js/modernizr.js"></script>
    <script src="js/script.js"></script>
</head>

<body class="bg-white">

<header id="header">
    <div class="header-top-panel clear-fix">
        <section class="inner">
            <nav role="top-panel" class="top-panel left">
                <ul class="line-list-left">
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="contact.html">Контакты</a></li>
                    <li><a href="#">Совместная покупка</a></li>
                </ul>
            </nav>
            <div class="top-panel-tel left">8 495 504-91-84</div>
            <div class="top-panel-auth right">
                <a href="#" class="show_link"><span class="icon i-key pull-left"></span>Вход с паролем</a>
                <div class="auth-block clear-fix hide" >
                    <form action="" method="post">
                        <div class="row left">
                            <label>Email</label>
                            <input type="email" required=""/>
                        </div>
                        <div class="row left">
                            <label>Пароль</label>
                            <input type="password" required=""/>
                        </div>
                        <div class="row row-btn left">
                            <input class="btn btn-blue b-smallest round-15 t-shadow" type="submit" value="Войти"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div class="header-bottom">
        <section class="inner">
            <nav role="main" class="nav-primary clear-fix">
                <ul class="line-list-left left">
                    <li><a href="catalog.html">Косметика</a></li>
                    <li><a href="#">Парфюмерия</a></li>
                    <li><a href="#">Макияж</a></li>
                    <li><a href="#">Профессионалам</a></li>
                    <li><a href="#">Для дома</a></li>
                    <li><a href="#">Гигиена</a></li>
                    <li><a href="#">Подарки</a></li>
                </ul>
                <ul class="line-list-left right">
                    <li><a href="brends.html">Бренды</a></li>
                    <li><a href="#">Производители</a></li>
                </ul>
            </nav>
        </section>
    </div>
</header>
<!-- #header-->

<section class="section section-top">
    <section class="inner visible clear-fix">
        <div class="logo left">
            <a id="logo" href="/">COSMORU - косметика рунета</a>
        </div>
        <div class="left main-search">
            <form action="" method="post">
                <div class="row row-btn">
                    <input type="text" placeholder="Поиск по товарам, артикулам, брендам и производителям"/>
                    <input type="submit" value="Найти"/>
                </div>
            </form>
        </div>
        <div class="w14 v-center t-right cart-block">
            <div class="cart-block-title"><a href="cart.html"><span class="icon i-cart-blue pull-left"></span>Корзина</a></div>
            <div class="items-cart">3 товара на 11 222  р</div>
        </div>
    </section>
</section>


<div id="wrapper">
    <section id="middle" class="cr-wide">
        <div id="container" class="visible">
            {% block breadcrumbs %}{% endblock %}
            <div id="content">
                {% block content %}
                <div class="page">
                    <article>
                        <h1>Оформление заказа</h1>
                        <section class="section-cart section-checkout w90">
                            <div class="tabs-container" id="checkout-container">
                                <ul class="line-list-left clear-fix">
                                    <li><a href="#first-checkout"><span>Я здесь впервые</span></a></li>
                                    <li><a href="#auth-checkout"><span>Я уже зарегистрирован</span></a></li>
                                </ul>
                                <div class="panel-container">
                                    <!--First Tab container-->
                                    <section class="panel-container-section" id="first-checkout">
                                        <form class="w85" action="" method="post">
                                            <h3>Адрес доставки</h3>
                                            <div class="row-group">
                                                <div class="row">
                                                    <label>Индекс<span class="required">*</span></label>
                                                    <input class="big round-5 w12" type="text" required=""/>
                                                </div>
                                                <div class="row clear-fix">
                                                    <label class="left">Регион<span class="required">*</span></label>
                                                    <div class="styled-select round-5 w45 left">
                                                        <select>
                                                            <option value="1">Регион</option>
                                                            <option value="1">Регион1</option>
                                                            <option value="1">Регион2</option>
                                                            <option value="1">Регион3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label>Город<span class="required">*</span></label>
                                                    <input id="checkout-city" class="big round-5 w45" type="text" required=""/>
                                                </div>
                                                <div class="row">
                                                    <label>Улица<span class="required">*</span></label>
                                                    <input class="big round-5 w45" type="text" required=""/>
                                                </div>
                                                <div class="row">
                                                    <label>Дом<span class="required">*</span></label>
                                                    <input class="big round-5 w12" type="text" required=""/>
                                                </div>
                                                <div class="row">
                                                    <label>Корпус</label>
                                                    <input class="big round-5 w12" type="text"/>
                                                </div>
                                                <div class="row">
                                                    <label>Квартира</label>
                                                    <input class="big round-5 w12" type="text"/>
                                                </div>
                                            </div>
                                            <h3>Способ доставки</h3>
                                            <div class="row-group group-checked">
                                                <div class="row">
                                                    <input class="styled-radio" id="del-r1" type="radio" checked name="delivery" value="1"/>
                                                    <label class="styled-radio-label" for="del-r1">Самовывоз в Москве <p>Бесплатно</p> </label>

                                                </div>
                                                <div class="row">
                                                    <input class="styled-radio" id="del-r2" type="radio"  name="delivery" value="1"/>
                                                    <label class="styled-radio-label" for="del-r2">Курьером в Москве <p>250 р, бесплатно для заказов от  2 500 р</p></label>
                                                    <a href="#">Подробнее о курьерской доставке</a>
                                                </div>
                                                <div class="row">
                                                    <input class="styled-radio" id="del-r3" type="radio"  name="delivery" value="1"/>
                                                    <label class="styled-radio-label" for="del-r3">Курьером за Мкад   <p>от 300 р</p></label>
                                                    <a href="#">Подробнее о доставке за Мкад</a>
                                                </div>
                                                <div class="row">
                                                    <input class="styled-radio" id="del-r4" type="radio"  name="delivery" value="1"/>
                                                    <label class="styled-radio-label" for="del-r4">Курьером в Санкт-Петербург <p>330 р</p></label>
                                                    <a href="#">Подробнее о доставке в Санкт-Петербург</a>
                                                </div>
                                                <div class="row">
                                                    <input class="styled-radio" id="del-r5" type="radio"  name="delivery" value="1"/>
                                                    <label class="styled-radio-label" for="del-r5">Почтой России <p>от 300 р только заказы от 1 000 р</p></label>
                                                    <a href="#">Подробнее о доставке почтой России</a>
                                                </div>
                                            </div>
                                            <h3>Оплата</h3>
                                            <div class="row-group group-checked">
                                                <div class="row">
                                                    <input class="styled-radio" id="pay-r1" type="radio" checked name="pay" value="1"/>
                                                    <label class="styled-radio-label" for="pay-r1">Наличными</label>
                                                </div>
                                                <div class="row">
                                                    <input class="styled-radio" id="pay-r2" type="radio"  name="pay" value="1"/>
                                                    <label class="styled-radio-label" for="pay-r2">Карточкой <p>Принимаем Visa и Vastercard</p></label>
                                                </div>
                                                <div class="row">
                                                    <input class="styled-radio" id="pay-r3" type="radio"  name="pay" value="1"/>
                                                    <label class="styled-radio-label" for="pay-r3">Банковским переводом <p>Комиссия банка 4%</p></label>
                                                </div>
                                            </div>
                                            <h3>Контактная информация </h3>
                                            <div class="row-group clear-fix">
                                                <div class="row clear-fix">
                                                    <label class="left">ФИО<span class="required">*</span></label>
                                                    <input class="big round-5 w45 left" type="text" required=""/>
                                                </div>
                                                <div class="row clear-fix">
                                                    <label class="left">E-mail<span class="required">*</span></label>
                                                    <input class="big round-5 w45 left" type="email" required=""/>
                                                    <span class="row-notice w25 left">
                                                         E-mail необходим
                                                    для подтверждения заказа
                                                    </span>
                                                </div>
                                                <div class="row clear-fix">
                                                    <label class="left">Телефон</label>
                                                    <input class="big round-5 w20 left" type="tel"/>
                                                    <span class="row-notice w25 left">Мы свяжемся с вами в течение 3 рабочих дней</span>
                                                </div>
                                                <div class="row clear-fix">
                                                    <textarea class="round-5" name="message" id="" cols="30" rows="10" placeholder="Дополнительные комментарии"></textarea>
                                                </div>
                                            </div>
                                            <div class="row row-group round-5 row-btn green clear-fix">
                                                <input class="btn btn-green round-15 t-shadow t-center" type="submit" value="Оформить заказ"/>
                                                <div class="arrow flag arrow-notice red line-list right">
                                                    <p>Заполните поля «ФИО», «Телефон» и «Адрес»</p>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                    <!--End Tab container-->
                                    <!--Second Tab container-->
                                    <section class="panel-container-section" id="auth-checkout">
                                        <form action="#" method="get">
                                            <div class="row clear-fix">
                                                <label class="w10">E-mail</label>
                                                <input class="round-5 big w45" type="email" required=""/>
                                            </div>
                                            <div class="row clear-fix">
                                                <label class="w10">Пароль</label>
                                                <input class="round-5 big w45" type="password" required=""/>
                                            </div>
                                            <div class="row row-btn">
                                                <input class="btn btn-green t-shadow t-center round-15 wide" type="submit" value="Войти"/>
                                            </div>
                                        </form>
                                    </section>
                                    <!--End Tab container-->
                                </div>
                            </div>

                        </section>
                    </article>
                </div>
                {% endblock %}
            </div><!-- #content-->
        </div><!-- #container-->

        {% block aside %}
        <aside id="sideRight">
            <div class="module module-discount grey mt70 pie">
                <div class="arrow red pie t-center">
                    <p class="notice">До выбранной скидки не хватает 1 300 р.</p>
                    <p><a href="#">Купите что-нибудь еще</a> или <a href="#">уменьшите скидку до 18,8 %</a></p>
                </div>
                <div class="module-body t-center">
                    <p>Итого, с учетом скидки:</p>
                    <span class="price block"> 2 222 р</span>

                </div>
            </div>
            <div class="module module-discount green pie">
                <div class="module-body t-center">
                    <p>Итого, с учетом скидки:</p>
                    <span class="price block"> 2 222 р</span>
                    <a class="btn btn-green t-shadow t-center round-15" href="#">К формлению</a>
                </div>
            </div>
            <div class="module module-discount green pie">
                <div class="arrow narrow blue pie">
                    <p class="notice">Вы оформляете совместную покупку  у Имяорганизатора</p>
                    <p>Заказ нужно оформить до 11.11</p>
                    <p><a href="#">Отказаться от совместной покупки</a></p>
                </div>
                <div class="module-body t-center">
                    <p>Итого, с учетом скидки:</p>
                    <span class="price block"> 2 222 р</span>
                    <a class="btn btn-green t-shadow t-center round-15" href="#">К формлению</a>
                </div>
            </div>
        </aside>
        {% endblock %}
        <!-- #sideRight -->

    </section>

</div>
<!-- #wrapper -->

<footer id="footer"></footer>
<!-- #footer -->
</body>
</html>