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
        <li><span>Для лица</span><span class="active-arrow-item"></span></li>
    </ul>
</div>
{% endblock %}

{% block content %}

<div class="page pie">
    <div class="quick-nav content-padding hovered w100 clear-fix">
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
    <section class="section content-padding">
        <hr class="section-title">
        <div class="quick-nav nav-brend clear-fix">
            <span class="cat_link block">Бренды этой категории</span>
            <ul class="line-list-left sub_cat_list">
                <li><a href="#">Bath Care</a></li>
                <li><a href="#">Body</a></li>
                <li><a href="#">Deo</a></li>
                <li><a href="#">Intimo</a></li>
                <li><a href="#">Nivea For Men</a></li>
                <li><a href="#">Nivea For Men After Shave</a></li>
                <li><a href="#">Nivea For Men Shaving</a></li>
                <li><a href="#">Styling</a></li>
                <li><a href="#">Visage Care Visage Cleansing</a></li>
                <li><a href="#">Visage</a></li>
                <li><a href="#">Natural Beauty</a></li>
                <li><a href="#">Visage Oxygen</a></li>
                <li><a href="#">Visage Young</a></li>
            </ul>
        </div>
    </section>
    <section class="section section-product content-padding most-popular">
        <hr class="section-title">
        <div class="filter-block t-center clear-fix">
            <div class="line-list">Сортировать по: </div>
            <ul class="filter-list sortable-btn line-list">
                <li><a class="active" data-option-value=".asc" href="#">Цене <span class="icon i-sort-asc"></span></a></li>
                <li><a href="#" data-option-value=".desc">Цене <span class="icon i-sort-desc"></span></a></li>
                <li><a href="#" data-option-value=".name">Названию </a></li>
            </ul>
        </div>
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
                        <span>1 2р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 selected colored desc">
                    <a class="colored_item_link flipper_link" href="#"><span class="icon i-item-arrow pull-left"></span><span class="text">33 цвета</span></a>
                    <div class="flipper flipper--click">
                        <div class="flipper__stage">
                            <div class="flipper__front">
                                <figure class="t-center">
                                    <img src="pic/item.jpg" alt=""/>
                                    <figcaption>
                                        <div class="product-name">Helen Seward </div>
                                        <a class="product_item" href="#">Маска для всех типов волос с аргановым маслом Argan Elisir Mask</a>
                                        <span class="t-center product-price">2 222 р</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="flipper__back " style="height: 280px;">
                                <div class="back_title t-center">Таинственная черная краска</div>
                                <ul class="back_product_list line-list-left">
                                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="pic/item_color_select_pic1.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic2.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic3.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic4.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic5.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic6.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic7.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic8.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic9.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic10.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic11.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic13.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic15.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic16.png" alt=""/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 selected full_hidden name">
                    <a class="colored_item_link flipper_link" href="#"><span class="icon i-item-arrow pull-left"></span><span class="text">33 цвета</span></a>
                    <div class="flipper flipper--click">
                        <div class="flipper__stage">
                            <div class="flipper__front">
                                <figure class="t-center">
                                    <img src="pic/item.jpg" alt=""/>
                                    <figcaption>
                                        <div class="product-name">Helen Seward </div>
                                        <a class="product_item" href="#">Маска для всех типов волос с аргановым маслом Argan Elisir Mask</a>
                                        <span class="t-center product-price">2 222 р</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="flipper__back " style="height: 280px;">
                                <div class="back_title t-center">Таинственная черная краска</div>
                                <ul class="back_product_list full line-list-left">
                                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="pic/item_color_select_pic1.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic2.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic3.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic4.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic5.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic6.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic7.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic8.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic9.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic10.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic11.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic13.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic15.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic16.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic17.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic18.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic19.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic20.png" alt=""/></a></li>
                                </ul>
                                <a class="all_link t-center block" href="#"><span>Показать все 123 цвета</span></a>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 selected colored desc">
                    <a class="colored_item_link flipper_link" href="#"><span class="icon i-item-arrow pull-left"></span><span class="text">33 цвета</span></a>
                    <div class="flipper flipper--click">
                        <div class="flipper__stage">
                            <div class="flipper__front">
                                <figure class="t-center">
                                    <img src="pic/item.jpg" alt=""/>
                                    <figcaption>
                                        <div class="product-name">Helen Seward </div>
                                        <a class="product_item" href="#">Маска для всех типов волос с аргановым маслом Argan Elisir Mask</a>
                                        <span class="t-center product-price">2 222 р</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="flipper__back " style="height: 280px;">
                                <div class="back_title t-center">Таинственная черная краска</div>
                                <ul class="back_product_list line-list-left">
                                    <li><a id="choose_btn" class="choose_btn" href="#"><img src="pic/item_color_select_pic1.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic2.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic3.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic4.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic5.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic6.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic7.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic8.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic9.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic10.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic11.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic13.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic15.png" alt=""/></a></li>
                                    <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic16.png" alt=""/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
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
                            <span class="t-center product-price">2 222 р</span>
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
                    <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 selected full_hidden name">
                    <div class="back_title  t-center">Таинственная черная краска</div>
                    <ul class="back_product_list full line-list-left">
                        <li><a id="choose_btn" class="choose_btn" href="#"><img src="pic/item_color_select_pic1.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic2.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic3.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic4.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic5.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic6.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic7.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic8.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic9.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic10.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic11.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic13.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic15.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic16.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic17.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic18.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic19.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic20.png" alt=""/></a></li>
                    </ul>
                    <a class="all_link t-center block" href="#"><span>Показать все 123 цвета</span></a>
                    <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 selected colored asc">
                    <a class="colored_item_link" href="#"><span class="icon i-item-colored pull-left"></span><span>33 цвета</span></a>
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
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
                <li class="w25 round-5 asc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
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
                <li class="w25 round-5 desc">
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
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
                <li class="w25 round-5 selected full_hidden name">
                    <div class="back_title  t-center">Таинственная черная краска</div>
                    <ul class="back_product_list full line-list-left">
                        <li><a id="choose_btn" class="choose_btn" href="#"><img src="pic/item_color_select_pic1.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic2.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic3.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic4.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic5.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic6.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic7.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic8.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic9.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic10.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic11.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic12.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic13.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic15.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic16.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic17.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic18.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic19.png" alt=""/></a></li>
                        <li><a class="choose_btn" href="#"><img src="pic/item_color_select_pic20.png" alt=""/></a></li>
                    </ul>
                    <a class="all_link t-center block" href="#"><span>Показать все 123 цвета</span></a>
                    <a class="btn btn-green btn-cart w90 h-center b-small t-shadow round-15" href="#">
                        <span>1 221 р</span>
                        <span>В корзину</span>
                    </a>
                </li>
                <li class="w25 round-5 selected colored desc">
                    <a class="colored_item_link" href="#"><span class="icon i-item-colored pull-left"></span><span>33 цвета</span></a>
                    <figure class="t-center">
                        <img src="pic/item.jpg" alt=""/>
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
        </div>

        <div class="pagination t-center">
            <ul class="pagination-list line-list clear-fix">
                <li class="prev"><a href="#">← Предыдущая  </a></li>
                <li><a href="#">1</a></li>
                <li class="page-btn-hide"><a href="#">...</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="current"><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li class="page-btn-hide"><a href="#">...</a></li>
                <li><a href="#">99</a></li>
                <li class="next"><a href="#">Cледующая  → </a></li>
            </ul>
        </div>
        <hr class="section-title">
        <article>
            <h3>Купить косметику Нивея ( Nivea ) в интернет магазине со скидкой</h3>
            <p>
                Прошло время когда за косметикой Нивея ( Nivea ) приходилось бегать по всему городу, сейчас она лежит на полках многих магазинов, её также можно повстречать в сети. Но везде существует проблема выбора, полки в магазинах , как правило не резиновые. Интернет магазин косметики Nivea (Нивея) решает эту проблему, предоставляя покупателю практически максимальный ассортимент. В нашем интернет магазине, как и в крупных супермаркетах периодически проходят акции Нивея (Nivea), и товары можно приобрести с приличной скидкой. Сидя вечером у монитора можно выяснить состав продукции Нивея и способы её применения, всё взвесить и заказать именно, то что нужно, каталог продукции Нивея (Nivea) позволяет это сделать . В нашем интернет магазине представлены все известные линии этого бренда –это : Nivea Visage ( нивея визаж), Nivea Younge ( Нивея Янг), Nivea Body, Nivea Bath Cаre, Nivea Deo ( Нивея Део) и много других. В нашем магазине Вы можете оставить свои отзывы о продукции Нивея, что бы облегчить выбор другим покупателям. Цены на на всю продукцию являются весьма демократичными. Для того, что бы купить Нивею (Nivea) со скидкой необходимо зарегистрироваться на сайте и следовать программе, которая описана на этой странице.
            </p>
        </article>
    </section>
</div>

{% endblock %}

{% block aside %}
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
<div class="module module-subscribe border-2-color pie round-5 pie">
    <div class="wrap">
        <h3 class="module-title t-center">Подпишитесь на рассылку</h3>
        <form action="" method="post">
            <div class="row">
                <input class="box_sizing w100 round-2" type="email" required="" placeholder="E-mail"/>
            </div>
            <div class="row row-btn">
                <input class="btn round-15 size-14 b-small btn-green t-shadow w100" type="submit" value="Подписаться"/>
            </div>
        </form>
    </div>
</div>
</aside>
{% endblock %}