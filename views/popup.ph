{% extends 'views/_layout.php' %}
{% block content %}
<div class="main">
    <div class="main-left">
        <div class="main-left_content">
            <div class="main-left_content_title">Для чего этот сайт</div>
            <p class="main-left_content_text">Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также кнопка «Оставить комментарий» и общее количество комментариев. Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших
            </p>
            <a href="#" class="main-left_content_button">Присоедениться</a>

        </div>
    </div>

    <div class="main-right">
        <article class="main-right_article">
            <span class="main-right_article_title">свежая идея</span>
            <a href="#" class="main-right_article_all">Все идеи</a>
            <div class="main-right_article_author">Александра Виноградова</div>
            <p class="main-right_article_text">
                Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также...
            </p>
            <a href="#" class="round-label"><span class="icon tiny-small like"></span>221</a>
            <a href="#" class="round-label"><span class="icon tiny-small comment"></span>3</a>
            <span class="main-right_article_place">Москва, ТЦ Коширская</span>
        </article>

        <article class="main-right_article">
            <span class="main-right_article_title">новое обещание</span>
            <a href="#" class="main-right_article_all">Все обещания</a>
            <div class="main-right_article_author">Александра Виноградова</div>
            <p class="main-right_article_text">
                Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также...
            </p>
            <a href="#" class="round-label"><span class="icon tiny-small like"></span>221</a>
            <a href="#" class="round-label"><span class="icon tiny-small comment"></span>3</a>
            <span class="main-right_article_place">12 апреля 2013</span>
        </article>
    </div>
</div>
<div class="popup-list-block inner clear">
    <a class="pop_up_link" href="#popup_message">Popup message</a>
    <a class="pop_up_link" href="#popup_recovery_pass">Recovery pass</a>
    <a class="pop_up_link" href="#popup_authorization">authorization</a>
    <a class="pop_up_link" href="#popup_registration">registration</a>

    <div class="pop_up" id="popup_message" style="display: none;">
        <div class="popup_wrap">
            <p class="eurostileblack_darkgray_22">На вашу почту отправлено письмо с восстановлением пароля</p>
        </div>
        <a class="pop_up_close eurostileblack_darkgray_22" href="#">X</a>
    </div>
    <div class="pop_up" id="popup_recovery_pass" style="display: none;">
        <div class="popup_wrap">
            <form class="popup_recovery_pass_form" action="" method="post">
                <h1 class="pop_up_title">Восстановление пароля</h1>
                <div class="row">
                    <input type="email" placeholder="Электронная почта" required=""/>
                </div>
                <div class="row">
                    <input class="btn_gray" type="submit" value="Подтвердить"/>
                </div>
            </form>
        </div>
        <a class="pop_up_close eurostileblack_darkgray_22" href="#">X</a>
    </div>
    <div class="pop_up" id="popup_authorization" style="display: none;">
        <div class="popup_wrap">
            <form class="popup_authorization_form" action="" method="post">
                <h1 class="pop_up_title">
                    <a class="popup_link right" href="#">Регистрация</a>
                    Вход
                </h1>
                <div class="row">
                    <input type="email" placeholder="Электронная почта" required=""/>
                </div>
                <div class="row">
                    <input type="password" placeholder="Пароль" required=""/>
                </div>
                <div class="row row-buttons">
                    <span class="niceCheck"><input type="checkbox" checked="checked"/></span>
                    <label>Запомнить меня</label>
                    <a class="popup_link right" href="#">Забыли пароль?</a>
                </div>
                <div class="row">
                    <input class="btn_blue" type="submit" value="Войти"/>
                </div>
            </form>
        </div>
        <a class="pop_up_close eurostileblack_darkgray_22" href="#">X</a>
    </div>
    <div class="pop_up" id="popup_registration" style="display: none;">
        <div class="popup_wrap">
            <form class="popup_authorization_form" action="" method="post">
                <h1 class="pop_up_title">Регистрация</h1>
                <div class="left">
                    <div class="row row-error">
                        <input class="error-field" type="text" placeholder="Фамилия" required=""/>
                        <label class="error">Заполните поле</label>
                    </div>
                    <div class="row">
                        <input type="text" placeholder="Имя" required=""/>
                    </div>
                    <div class="row">
                        <input type="text" placeholder="Город" required=""/>
                    </div>
                    <div class="row">
                        <select class="popup_select" name="" >
                            <option value="">Выберите ТЦ</option>
                            <option value="">Выберите ТЦ</option>
                            <option value="">Выберите ТЦ</option>
                            <option value="">Выберите ТЦ</option>
                        </select>
                    </div>
                </div>
                <div class="right">
                    <div class="row">
                        <input type="text" placeholder="Должность" required=""/>
                    </div>
                    <div class="row">
                        <input type="email" placeholder="Электронная почта" required=""/>
                    </div>
                    <div class="row">
                        <input type="password" placeholder="Пароль" required=""/>
                    </div>
                    <div class="row">
                        <input type="password" placeholder="Подтвердить пароль" required=""/>
                    </div>
                </div>
                <div class="row clear">
                    <input class="btn_blue" type="submit" value="Зарегистрироваться" required=""/>
                </div>
            </form>
        </div>
        <a class="pop_up_close eurostileblack_darkgray_22" href="#">X</a>
    </div>
</div>
{% endblock %}