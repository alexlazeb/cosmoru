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
    <!--<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen, projection" />-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="css/ie/ie-7.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!--<script src="js/jquery-1.9.0.min.js"></script>-->
    <script src="js/jquery.js"></script>
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
                    <li><a href="#">Оплата</a></li>
                    <li><a href="/contact.html">Контакты</a></li>
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
                    <li><a href="/catalog.html">Косметика</a></li>
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
        <div class="w14 right t-right cart-block">
            <div class="cart-block-title"><a href="cart.html"><span class="icon i-cart-blue pull-left"></span>Корзина</a></div>
            <div class="items-cart">3 товара на 11 222  р</div>
        </div>
    </section>
</section>

{% block slider %}{% endblock %}


<div id="wrapper">
    <section id="middle" class="cr">
        <div id="container" class="visible">
            {% block breadcrumbs %}{% endblock %}
            <div id="content">
                {% block content %}
                <div class="page">
                    <article class="text">
                        <h1>Стандартная текстовая страница</h1>
                        <h2>Подзаголовок</h2>
                        <p class="biggest">
                            Для успешного оформления заказа в нашем магазине вам необходимо наполнить «Корзину». Для этого необходимо нажать на изображение корзинки рядом с выбранным товаром.
                        </p>
                        <p class="biggest">
                            Для того чтобы оформить заказ вам необходимо зарегистрироваться. Для этого заполните все обязательные поля отмеченные звездочками и введите цифры подтверждения которые вы видите на картинке после этого нажмите зарегистрироваться. 
                        </p>
                        <h2>Подзаголовок</h2>
                        <p class="big">Для успешного оформления заказа в нашем магазине вам необходимо наполнить «Корзину». Для этого необходимо нажать на изображение корзинки рядом с выбранным товаром.</p>
                        <p class="big">Для того чтобы оформить заказ вам необходимо зарегистрироваться. Для этого заполните все обязательные поля отмеченные звездочками и введите цифры подтверждения которые вы видите на картинке после этого нажмите зарегистрироваться. </p>
                        <ul class="line-disc">
                            <li>Осуществляется по адресу : Москва , 3-й Проезд Марьиной рощи 40 стр 1 </li>
                            <li>Выдачу осуществляет компания "Санвэй"</li>
                            <li>Время выдачи заказов Пн-Чт с 10 до 18, Пт с 10 до 17</li>
                            <li>Телефоны пункта самовывоза 84996851035, 84959729533 ( Внимание!!! по телефонам пункта самовывоза сделать заказ или узнать о наличии товара невозможно, это сторонняя организация, которая только выдаёт заказы)</li>
                            <li>Стоимость услуги самовывоз 0 рублей</li>
                            <li>Минимальный заказ для самовывоза 500 руб.</li>
                            <li>Ыремя хранения заказа в пункте самовывоза 5 суток</li>
                            <li>Приехать за самовывозом можно только после согласования с менеджером нашего магазина</li>
                            <li>При себе иметь документ удостоверяющий личность (здание является режимным объектом)</li>
                        </ul>
                    </article>
                </div>
                {% endblock %}
            </div><!-- #content-->
        </div><!-- #container-->

        <!--<aside id="sideLeft">-->
        <!--</aside>-->
        <!-- #sideLeft -->

        <aside id="sideRight">
            {% block aside %}{% endblock %}
        </aside>
        <!-- #sideRight -->

    </section>

</div>
<!-- #wrapper -->



<footer id="footer"></footer>
<!-- #footer -->
</body>
</html>