{% extends 'views/_layout.php' %}
{% block content %}
<div class="promises inner">
    <div class="promises-head">
        <h1 class="promises-title page_title">Личные обещания</h1>
        <ul class="promises-tabs_list inline-list">
            <li class="current desc">
                <a class="active" href="#">Новые</a>
            </li>
            <li>
                <a href="#">Популярные</a>
            </li>
        </ul>
        <a class="btn_blue right promise" href="#"><span class="icon promises"></span>Пообещать</a>
    </div>

    <div class="promises-form_wrap">
        <form class="promises-form " action="test.php" method="post" data-ajax="metro.afterPromise">
            <textarea class="w100" name="message" cols="30" rows="10" placeholder="Текст обещания"></textarea>
            <input class="btn_gray block" disabled="disabled" type="submit" value="Подтвердить" disabled="disabled" value="Отправить"/>
        </form>
    </div>
    <div class="promises-list_wrap">
        <ul class="promises-list">
            {% for i in 0..10 %}
                <li>
                    <div class="promises-list_author">Александра Виноградова</div>
                    <div class="promises-list_block">
                        <p>
                            Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                        </p>
                    </div>
                    <div class="promises-like_box">
                        <a href="like.json" class="round-label like-block" data-ajax="metro.like"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                        <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                        <a class="line-list-border first like-link" href="#">Нравиться</a>
                        <a class="line-list-border comment-link" href="#">Комментировать</a>
                        <span class="line-list-border promises-date">12 апреля 2013</span>
                    </div>
                    <ul class="promises-list_level-2"></ul>
                    <div class="promises-form_comment_block">
                        <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                            <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                            <input class="btn_gray block" disabled="disabled" type="submit"/>
                        </form>
                    </div>
                </li>
            {% endfor %}
        </ul>
        <a class="btn_blue promises-more" data-ajax="metro.loadPromises" href="promises.json">Смотреть еще</a>
    </div>
</div>
{% endblock %}