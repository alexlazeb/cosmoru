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

{% endblock %}