<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!--[if IE]>
    <!--<meta http-equiv="" content="IE=edge,chrome=1" />-->
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
<!--    {#<script src="js/modernizr.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/metro.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/calendar.js"></script>#}-->
<!---->
<!--    {#<script type="text/javascript" src="js/jquery.reveal.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/cusel/jScrollPane.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/cusel/cusel-min-2.5.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/jquery.placeholder.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/jquery.client.js"></script>#}-->
<!--    {#<script type="text/javascript" src="js/script.js"></script>#}-->
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
</head>

<body>

<header id="header">
    <div class="header-top-panel clear-fix">
        <section class="inner">
            <nav role="top-panel" class="top-panel left">
                <ul class="line-list-left">
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Совместная покупка</a></li>
                </ul>
            </nav>
            <div class="top-panel-tel left">8 495 504-91-84</div>
            <div class="top-panel-auth right">
                <a href="#" class="show_link"><span class="icon i-key pull-left"></span>Вход с паролем</a>
                <div class="auth-block clear-fix" style="display: none">
                    <form action="" method="post">
                        <div class="row left">
                            <label>Email</label>
                            <input type="email" required=""/>
                        </div>
                        <div class="row left">
                            <label>Пароль</label>
                            <input type="password" required=""/>
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
                    <li><a href="#">Косметика</a></li>
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
            <div class="cart-block-title"><span class="icon i-cart-blue pull-left"></span>Корзина</div>
            <div class="items-cart">3 товара на 11 222  р</div>
        </div>
    </section>
</section>

<div id="wrapper">
    <section id="middle" class="cr">
        <div id="container">
            <div id="content">
                {% block content %}{% endblock %}
            </div><!-- #content-->
        </div><!-- #container-->

        <!--<aside id="sideLeft">-->
        <!--</aside>-->
        <!-- #sideLeft -->

        <aside id="sideRight">
            <div class="module">
                <h3 class="module-title">Популярные бренды </h3>
                <ul>
                    <li><a href="#">Несколько популярных</a></li>
                    <li><a href="#">Avani</a></li>
                    <li><a href="#">A&D Company Ltd</a></li>
                    <li><a href="#">Always</a></li>
                    <li><a href="#">Abbacino</a></li>
                    <li><a href="#">Artemis Deluxe</a></li>
                    <li class="all_link">
                        <a href="#">Показать все 123</a>
                    </li>
                </ul>
            </div>
            <div class="module">
                <h3 class="module-title">Популярные производители</h3>
                <ul>
                    <li><a href="#">Несколько популярных</a></li>
                    <li><a href="#">Avani</a></li>
                    <li><a href="#">A&D Company Ltd</a></li>
                    <li><a href="#">Always</a></li>
                    <li><a href="#">Abbacino</a></li>
                    <li><a href="#">Artemis Deluxe</a></li>
                    <li class="all_link">
                        <a href="#">Показать все 123</a>
                    </li>
                </ul>
            </div>
            <div class="module module-subscribe border-2-color pie round-5">
                <div class="wrap">
                    <h3 class="module-title t-center">Подпишитесь на рассылку</h3>
                    <form action="" method="post">
                        <div class="row">
                            <input class="box_sizing w100 round-2" type="email" required="" placeholder="E-mail"/>
                        </div>
                        <div class="row row-btn">
                            <input class="btn round-10 btn-green w100" type="submit" value="Подписаться"/>
                        </div>
                    </form>
                </div>
            </div>
        </aside>
        <!-- #sideRight -->
    </section>

</div>
<!-- #wrapper -->

<footer id="footer"></footer>
<!-- #footer -->
</body>
</html>