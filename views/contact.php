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
    <!-- Add fancyBox main JS and CSS files -->
    <script src="js/script.js"></script>
</head>

<body class="bg-white">

<header id="header">
    <div class="header-top-panel clear-fix">
        <section class="inner">
            <nav role="top-panel" class="top-panel left">
                <ul class="line-list-left">
                    <li><a href="#">Доставка</a></li>
                    <li><a href="checkout.html">Оплата</a></li>
                    <li><a href="#">Контакты</a></li>
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
                    <li><a href="#">Бренды</a></li>
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

{% block slider %}{% endblock %}


<div id="wrapper">
    <section id="middle" class="">
        <div id="container" class="visible">
            {% block breadcrumbs %}{% endblock %}
            <div id="content">
                {% block content %}
                <div class="page">
                    <article>
                        <div class="contact-info-block clear-fix">
                            <div class="left w70">
                                <h1>Контакты</h1>
                                <p class="biggest">Телефон 7 495 517-72-24, с 10 до 18 по по московскому времени</p>
                                <p class="biggest">Фактический адрес: г. Москва, ул.Правды д.24 строение 5</p>
                                <p class="biggest">Юридический адрес: г. Москва, ул.Правды д.24 строение 5</p>
                                <p class="biggest">E-mail <a href="mailto:cosmoru@cosmoru.ru">cosmoru@cosmoru.ru</a></p>
                            </div>
                            <div class="right w28">
                                <h2>Напишите нам</h2>
                                <form action="" method="post">
                                    <div class="row">
                                        <label class="block">ФИО</label>
                                        <input type="text" name="fio" class="round-5 w100 big" placeholder=""/>
                                    </div>
                                    <div class="row">
                                        <label class="block">E-mail<span class="required">*</span></label>
                                        <input type="text" name="email" class="round-5 w100 big" placeholder="" required=""/>
                                    </div>
                                    <div class="row">
                                        <label class="block">Сообщение<span class="required">*</span></label>
                                        <textarea class="round-5 w100 big" name="message" id="" cols="30" rows="10" required=""></textarea>
                                    </div>
                                    <div class="row row-btn">
                                        <input type="submit" class="btn btn-green round-15 t-center t-shadow"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h2 class="heading-title">Пункт самовывоза</h2>
                        <p class="biggest">
                            Забрать заказ вы можете по адресу Россия, Москва, Камергерский переулок дом 6
                        </p>
                        <div class="contact-map w100">
<!--                            <img src="/img/map.jpg" alt=""/>-->
                            <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=hilHyPsaHIv-dmZ67Quh2x8IxL2saaan&height=470"></script>
                        </div>
                    </article>
                </div>
                {% endblock %}
            </div><!-- #content-->
        </div><!-- #container-->

    </section>

</div>
<!-- #wrapper -->



<footer id="footer"></footer>
<!-- #footer -->
</body>
</html>