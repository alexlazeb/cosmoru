{% extends 'views/_layout.php' %}
{% block slider %}
<section class="section section-slider content-width visible">
    <div id="main-slider" class="flexslider">
        <ul class="slides">
            <li>
                <figure>
                    <img src="/pic/slider_pic.jpg" alt=""/>
                    <figcaption>
                        <div class="wrap">
                            <div class="flex-title">Совместная покупка</div>
                            <div class="flex-description">как сэкономить на доставке?</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/pic/slider_pic.jpg" alt=""/>
                    <figcaption>
                        <div class="wrap">
                            <div class="flex-title">Совместная покупка</div>
                            <div class="flex-description">как сэкономить на доставке?</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/pic/slider_pic.jpg" alt=""/>
                    <figcaption>
                        <div class="wrap">
                            <div class="flex-title">Совместная покупка</div>
                            <div class="flex-description">как сэкономить на доставке?</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>
</section>
{% endblock %}
{% block content %}

<div class="page pie">
    <div class="quick-nav content-padding w100 clear-fix">
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Косметика</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Парфюмерия</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Макияж</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Профессионалам</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Для дома</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Гигиена</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>
        <div class="menu-item left w25">
            <a class="cat_link block" href="#">Подарки</a>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Для бритья</a></li>
                <li><a href="#">Детская косметика</a></li>
                <li><a href="#">Мужская косметика</a></li>
                <li>...</li>
            </ul>
        </div>

    </div>
    <div class="blue-stripe clear-fix">
        <div class="action-text line-list">
<!--            Я куплю на <input class="label-price stick" type="text" placeholder="2 200 рублей" />и получу скидку <span class="size-18">22 %</span>-->
            Я куплю на <span class="label-price stick">2 200 рублей</span> и получу скидку <span class="size-16">22 %</span>
        </div>
        <a class="btn btn-blue round-15 line-list shadow t-shadow" href="#">Применить скидку</a>
    </div>
    <section class="section section-product content-padding most-popular">
        <h3 class="section-title t-center"><span>Популярные товары</span></h3>
        <ul class="section-product-list line-list-left clear-fix">
            <li class="w25 round-5">
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
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
            <li class="w25 round-5 selected">
                <div class="back_title t-center">Таинственная черная краска</div>
                <ul class="back_product_list line-list-left">
                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="/pic/item_color_select_pic1.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic2.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic3.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic4.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic5.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic6.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic7.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic8.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic9.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic10.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic11.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic13.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic15.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic16.png" alt=""/></a></li>
                </ul>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5 selected full_hidden">
                <div class="back_title  t-center">Таинственная черная краска</div>
                <ul class="back_product_list full line-list-left">
                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="/pic/item_color_select_pic1.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic2.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic3.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic4.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic5.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic6.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic7.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic8.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic9.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic10.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic11.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic13.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic15.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic16.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic17.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic18.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic19.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic20.png" alt=""/></a></li>
                </ul>
                <a class="all_link t-center block" href="#"><span>Показать все 123 цвета</span></a>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5 selected colored">
                <a class="colored_item_link" href="#"><span class="icon i-item-colored pull-left"></span><span>33 цвета</span></a>
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос с аргановым маслом Argan Elisir Mask</a>
                        <span class="t-center product-price">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5">
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос</a>
                        <span class="t-center product-price">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5">
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос</a>
                        <span class="t-center product-price old">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5 selected full_hidden">
                <div class="back_title  t-center">Таинственная черная краска</div>
                <ul class="back_product_list full line-list-left">
                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="/pic/item_color_select_pic1.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic2.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic3.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic4.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic5.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic6.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic7.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic8.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic9.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic10.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic11.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic13.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic15.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic16.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic17.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic18.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic19.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic20.png" alt=""/></a></li>
                </ul>
                <a class="all_link t-center block" href="#"><span>Показать все 123 цвета</span></a>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5 selected colored">
                <a class="colored_item_link" href="#"><span class="icon i-item-colored pull-left"></span><span>33 цвета</span></a>
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос с аргановым маслом Argan Elisir Mask</a>
                        <span class="t-center product-price">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5">
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос</a>
                        <span class="t-center product-price">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart b-small w90 h-center t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5">
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос</a>
                        <span class="t-center product-price old">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5 selected full_hidden">
                <div class="back_title  t-center">Таинственная черная краска</div>
                <ul class="back_product_list full line-list-left">
                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="/pic/item_color_select_pic1.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic2.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic3.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic4.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic5.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic6.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic7.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic8.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic9.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic10.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic11.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic12.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic13.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic15.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic16.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic17.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic18.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic19.png" alt=""/></a></li>
                    <li><a class="choose_btn" href="#"><img src="/pic/item_color_select_pic20.png" alt=""/></a></li>
                </ul>
                <a class="all_link t-center block" href="#"><span>Показать все 123 цвета</span></a>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
            <li class="w25 round-5 selected colored">
                <a class="colored_item_link" href="#"><span class="icon i-item-colored pull-left"></span><span>33 цвета</span></a>
                <figure class="t-center">
                    <img src="/pic/item.jpg" alt=""/>
                    <figcaption>
                        <div class="product-name">Helen Seward </div>
                        <a class="product_item" href="#">Маска для всех типов волос с аргановым маслом Argan Elisir Mask</a>
                        <span class="t-center product-price">2 222 р</span>
                    </figcaption>
                </figure>
                <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                    <span>1 221 р</span>
                    <span>В корзину</span>
                </a>
            </li>
        </ul>
    </section>
</div>

{% endblock %}
{% block aside %}
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
<div class="module module-subscribe border-2-color pie round-5 pie">
    <div class="wrap">
        <h3 class="module-title t-center">Подпишитесь на рассылку</h3>
        <form action="" method="post">
            <div class="row">
                <input class="box_sizing w100 round-2" type="email" required="" placeholder="E-mail"/>
            </div>
            <div class="row row-btn">
                <input class="btn round-15 size-14 btn-green t-shadow w100" type="submit" value="Подписаться"/>
            </div>
        </form>
    </div>
</div>
{% endblock %}