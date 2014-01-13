{% extends 'views/_layout.php' %}
{% block section_top %}
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
{% endblock %}
{% block breadcrumbs %}
<div class="breadcrumbs">
    <ul class="line-list-left">
        <li><a href="/">Главная</a><span class="devider">/</span></li>
        <li><a href="#">Косметика</a><span class="devider">/</span></li>
        <li><a href="#">Для лица</a><span class="devider">/</span></li>
        <li><a href="#">Глина</a><span class="devider">/</span></li>
        <li><span>Желтая косметическая глина 100 гр</span><span class="active-arrow-item"></span></li>
    </ul>
</div>
{% endblock %}

{% block content %}

<div class="page pie">
    <section class="section content-padding">
        <div class="card-item clear-fix">
            <div class="img-wrapper w33 left">
            <!-- Slider with carousel -->
                <div id="slider-item" class="flexslider item-slider t-center">
                    <ul class="slides">
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
                <div id="carousel-item" class="flexslider item-slider">
                    <ul class="slides">
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <li>
                            <img src="pic/slider_product_pic.jpg" />
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </div>
            <div class="card-item-description w62 right">
                <h2 class="card-item-title">Желтая косметическая глина 100 гр</h2>
                <div class="card-item-short-description">
                    <div class="row">
                        <span class="label">Артикул:</span>
                        <a href="#">1м9309</a>
                    </div>
                    <div class="row">
                        <span class="label">Бренд:</span>
                        <a href="#">Planeta organica</a>
                    </div>
                    <div class="row">
                        <span class="label">Серия:</span>
                        <a href="#">Органические масла для тела, лица и волос</a>
                    </div>
                </div>
                <h2 class="card-item-title">Выберите цвет</h2>
                <div class="card-item-color-variant">
                    <form action="" method="post">
                        <div class="row">
                            <ul class="card-product-list line-list-left">
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic1.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic2.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic3.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic4.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic5.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic6.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic7.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic8.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic9.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic10.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic11.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic13.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic15.png" alt=""/></a></li>
                                <li><a class="choose_btn" href="#"><img width="52px" src="pic/item_color_select_pic16.png" alt=""/></a></li>
                            </ul>
                        </div>
                        <div class="row row-btn">
                            <span class="product-price old">228 р</span>
                            <a class="btn btn-green btn-cart wide t-shadow round-15 tooltip_link" href="#">
                                <span>1 221 р</span>
                                <span>В корзину</span>
                            </a>
                            <div class="tooltiptext hidden">
                               <span>В корзине</span>
                                <input type="text" class="item_spinner line-list"/>
                                <a class="btn btn-green round-15 t-shadow t-center wide line-list" href="cart.html">Перейти в корзину</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <div class="tabs-container card-tabs" id="checkout-container">
            <ul class="line-list-left clear-fix">
                <li><a href="#item-1"><span>Описание</span></a></li>
                <li><a href="#item-2"><span>Состав</span></a></li>
                <li><a href="#item-3"><span>Доставка</span></a></li>
            </ul>
            <div class="panel-container">
                <!--First Tab container-->
                <section class="panel-container-section" id="item-1">
                    <article>
                        <p>Предназначен для ежедневного ухода за зрелой кожей вокруг глаз. Инновационная формула эффективно осветляет темные круги под глазами и уменьшает опухлости мееи отеки. Глубоко увлажняет, разглаживает и придает упругость. Уменьшает морщины, скрывает признаки усталости и стресса. Охлаждающий эффект мгновенно освежает и успокаивает кожу.</p>
                        <p>
                            <strong>МАСЛО АРГАНА</strong> стимулирует клетки кожи к интенсивному обновлению, возвращает коже плотность и упругость,  видимо омолаживает и разглаживает.
                        </p>
                        <p>
                            <strong>MATRIXYL® SYNTHE6™</strong>, пептид новейшей генерации, усиливает синтез шести основных компонентов, восстанавливающих кожу, в том числе гиалуроновой кислоты. Ускоряет продуцирование коллагена I, II и IVтипов.
                        </p>
                        <p>
                            <strong>bio HYALURON COMPLEX™</strong> оказывает мощное лифтинговое действие, заполняет морщины изнутри, глубоко увлажняет и разглаживает, возвращает коже упругость и эластичность.
                        </p>
                        <p>
                            <strong>ЭКСТРАКТ ОЧАНКИ</strong>  оказывает успокаивающее действие, уменьшает признаки усталости, тени и «мешки» под глазами.
                        </p>
                        <p>
                            <strong>КОФЕИН</strong> регулирует микроциркуляцию.
                        </p>
                        <p>
                            <strong>ПРОТЕИНЫ ПШЕНИЦЫ</strong> мгновенно разглаживаю, усиливают и придают эластичность.
                        </p>
                    </article>
                </section>
                <!--End Tab container-->
                <!--Second Tab container-->
                <section class="panel-container-section" id="item-2">
                    <article>
                        <p>Предназначен для ежедневного ухода за зрелой кожей вокруг глаз. Инновационная формула эффективно осветляет темные круги под глазами и уменьшает опухлости мееи отеки. Глубоко увлажняет, разглаживает и придает упругость. Уменьшает морщины, скрывает признаки усталости и стресса. Охлаждающий эффект мгновенно освежает и успокаивает кожу.</p>
                        <p>
                            <strong>МАСЛО АРГАНА</strong> стимулирует клетки кожи к интенсивному обновлению, возвращает коже плотность и упругость,  видимо омолаживает и разглаживает.
                        </p>
                        <p>
                            <strong>MATRIXYL® SYNTHE6™</strong>, пептид новейшей генерации, усиливает синтез шести основных компонентов, восстанавливающих кожу, в том числе гиалуроновой кислоты. Ускоряет продуцирование коллагена I, II и IVтипов.
                        </p>
                        <p>
                            <strong>bio HYALURON COMPLEX™</strong> оказывает мощное лифтинговое действие, заполняет морщины изнутри, глубоко увлажняет и разглаживает, возвращает коже упругость и эластичность.
                        </p>
                        <p>
                            <strong>ЭКСТРАКТ ОЧАНКИ</strong>  оказывает успокаивающее действие, уменьшает признаки усталости, тени и «мешки» под глазами.
                        </p>
                        <p>
                            <strong>КОФЕИН</strong> регулирует микроциркуляцию.
                        </p>
                        <p>
                            <strong>ПРОТЕИНЫ ПШЕНИЦЫ</strong> мгновенно разглаживаю, усиливают и придают эластичность.
                        </p>
                    </article>
                </section>
                <!--End Tab container-->
                <!--Third Tab container-->
                <section class="panel-container-section" id="item-3">
                    <article>
                        <p>Предназначен для ежедневного ухода за зрелой кожей вокруг глаз. Инновационная формула эффективно осветляет темные круги под глазами и уменьшает опухлости мееи отеки. Глубоко увлажняет, разглаживает и придает упругость. Уменьшает морщины, скрывает признаки усталости и стресса. Охлаждающий эффект мгновенно освежает и успокаивает кожу.</p>
                        <p>
                            <strong>МАСЛО АРГАНА</strong> стимулирует клетки кожи к интенсивному обновлению, возвращает коже плотность и упругость,  видимо омолаживает и разглаживает.
                        </p>
                        <p>
                            <strong>MATRIXYL® SYNTHE6™</strong>, пептид новейшей генерации, усиливает синтез шести основных компонентов, восстанавливающих кожу, в том числе гиалуроновой кислоты. Ускоряет продуцирование коллагена I, II и IVтипов.
                        </p>
                        <p>
                            <strong>bio HYALURON COMPLEX™</strong> оказывает мощное лифтинговое действие, заполняет морщины изнутри, глубоко увлажняет и разглаживает, возвращает коже упругость и эластичность.
                        </p>
                        <p>
                            <strong>ЭКСТРАКТ ОЧАНКИ</strong>  оказывает успокаивающее действие, уменьшает признаки усталости, тени и «мешки» под глазами.
                        </p>
                        <p>
                            <strong>КОФЕИН</strong> регулирует микроциркуляцию.
                        </p>
                        <p>
                            <strong>ПРОТЕИНЫ ПШЕНИЦЫ</strong> мгновенно разглаживаю, усиливают и придают эластичность.
                        </p>
                    </article>
                </section>
                <!--End Tab container-->

            </div>
        </div>
        <p><a href="#">Товары, похожие на органические гели для душа</a></p>
    </section>
    <section class="section section-product content-padding most-popular">

        <h3 class="section-title t-center"><span>Похожие товары</span></h3>
        <div id="sortable-product" class="sortable-product">
            <ul class="section-product-list line-list-left clear-fix">
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
                        <figcaption>
                            <div class="product-name">Helen Seward </div>
                            <a class="product_item" href="#">Маска для всех типов волос</a>
                            <span class="t-center product-price old">2 222 р</span>
                        </figcaption>
                    </figure>
                    <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>


            </ul>
        </div>

    </section>
</div>

{% endblock %}

{% block aside %}
<aside id="sideRight" class="aside-to-top">
<div class="module module-cart">
    <div class="change-discount arrow-2 blue hide">
        <p>До скидки осталось купить на 1 222 р</p>
        <p><a href="#"><span>Изменить скидку</span></a></p>
    </div>
    <div class="choose-discount arrow-2 red hide">
        <p class="size-15"><a href="#">Выбирайте скидку сами!</a></p>
    </div>
    <div class="choose-discount arrow-2 blue">
        <p>Я куплю на </p>
        <div class="slider-amount-wrap">
            <input class="slider_amount shadow w100" type="text" value="2200 рублей"/>
            <div class="slider_amount_range"></div>
        </div>
        <p>и получу скидку</p>
        <p><span class="big">22 %</span></p>
        <a class="btn btn-blue t-shadow shadow w100 round-15" href="#">Применить</a>
    </div>
    <div class="choose-discount arrow-2 blue hide">
        <p>
            Я куплю на
            <input class="shadow w100" type="text" value="2200 рублей"/>
            и получу скидку
            <span class="big">22 %</span>
        </p>
        <a class="btn btn-blue t-shadow shadow w100 round-15" href="#">Применить</a>
    </div>
    <div class="change-discount ends arrow-2 red hide">
        <p>Совместная покупка закончится через два дня!</p>
        <p><a href="#"> Отказаться от совместной покупки</a></p>
    </div>
</div>
<div class="module">
    <h3 class="module-title t-center">Сегодня вы смотрели</h3>
    <div class="module-body">
        <div id="watched-product-slider" class="slider-vertical">
            <div class="slider-wrap">
                <ul class="watched-product-list slides">
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>
                    <li class="round-5 t-center">
                        <figure class="t-center">
                            <img width="35px" src="pic/item.jpg" alt=""/>
                            <figcaption>
                                <div class="product-name">Helen Seward </div>
                                <a class="product_item" href="#">Маска для всех типов волос</a>
                                <span class="t-center product-price old">2 222 р</span>
                            </figcaption>
                        </figure>
                        <a class="btn btn-green btn-cart b-small h-center t-shadow round-15" href="#">
                            <span>1 221 р</span>
                            <span class="icon i-cart-white"></span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="btn-control clear-fix">
                <a class="btn-v-prev disabled" href="#">prev</a>
                <a class="btn-v-next" href="#">next</a>
            </div>
        </div>
    </div>
</div>
</aside>
{% endblock %}