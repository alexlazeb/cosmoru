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
{% block content %}

<div class="page pie">
    <section class="section content-padding-aside">
        <article>
            <h1>Бренды</h1>
            <div class="brend_letter">A</div>
            <ul class="brend-letter-list">
                <li><a href="#">A&D Company Ltd</a></li>
                <li><a href="#">Abahna</a></li>
                <li><a href="#">Abbacino</a></li>
                <li><a href="#">Abchic</a></li>
                <li><a href="#">Aboca</a></li>
                <li><a href="#">Academie</a></li>
                <li><a href="#">Acai</a></li>
                <li><a href="#">Accessori Di Natalia</a></li>
                <li><a href="#">Acqua di Genova</a></li>
                <li><a href="#">ActiWave</a></li>
                <li><a href="#">Adidas</a></li>
            </ul>
            <div class="brend_letter">B</div>
            <ul class="brend-letter-list">
                <li><a href="#">B.U.</a></li>
                <li><a href="#">B.Well Limited</a></li>
                <li><a href="#">Baby Cucciolo</a></li>
                <li><a href="#">Baby Foot</a></li>
                <li><a href="#">BabyCoccole</a></li>
            </ul>
            <div class="brend_letter">A</div>
            <ul class="brend-letter-list">
                <li><a href="#">A&D Company Ltd</a></li>
                <li><a href="#">Abahna</a></li>
                <li><a href="#">Abbacino</a></li>
                <li><a href="#">Abchic</a></li>
                <li><a href="#">Aboca</a></li>
                <li><a href="#">Academie</a></li>
                <li><a href="#">Acai</a></li>
                <li><a href="#">Accessori Di Natalia</a></li>
                <li><a href="#">Acqua di Genova</a></li>
                <li><a href="#">ActiWave</a></li>
                <li><a href="#">Adidas</a></li>
            </ul>
            <div class="brend_letter">B</div>
            <ul class="brend-letter-list">
                <li><a href="#">B.U.</a></li>
                <li><a href="#">B.Well Limited</a></li>
                <li><a href="#">Baby Cucciolo</a></li>
                <li><a href="#">Baby Foot</a></li>
                <li><a href="#">BabyCoccole</a></li>
            </ul>
        </article>
    </section>
</div>

{% endblock %}

{% block aside %}
<aside id="sideRight">
<div class="module module-sortable">
    <ul class="line-list-left clear-fix">
        <li class="w25"><a class="active" href="#">A</a></li>
        <li class="w25"><a href="#">B</a></li>
        <li class="w25"><a href="#">C</a></li>
        <li class="w25"><a href="#">D</a></li>
        <li class="w25"><a href="#">E</a></li>
        <li class="w25"><a href="#">F</a></li>
        <li class="w25"><a href="#">G</a></li>
        <li class="w25"><a href="#">H</a></li>
        <li class="w25"><a href="#">I</a></li>
        <li class="w25"><a href="#">J</a></li>
        <li class="w25"><a href="#">K</a></li>
        <li class="w25"><a href="#">L</a></li>
        <li class="w25"><a href="#">M</a></li>
        <li class="w25"><a href="#">N</a></li>
        <li class="w25"><a href="#">O</a></li>
        <li class="w25"><a href="#">P</a></li>
        <li class="w25"><a href="#">Q</a></li>
        <li class="w25"><a href="#">R</a></li>
        <li class="w25"><a href="#">S</a></li>
        <li class="w25"><a href="#">T</a></li>
        <li class="w25"><a href="#">U</a></li>
        <li class="w25"><a href="#">V</a></li>
        <li class="w25"><a href="#">W</a></li>
        <li class="w25"><a href="#">X</a></li>
        <li class="w25"><a href="#">Y</a></li>
        <li class="w25"><a href="#">Z</a></li>
    </ul>
    <ul class="line-list-left clear-fix">
        <li class="w30">
            <a href="#">А-Я</a>
        </li>
    </ul>
    <ul class="line-list-left clear-fix">
        <li class="w30 t-left">
            <a href="#">1-9</a>
        </li>
    </ul>
</div>
</aside>
{% endblock %}