{% extends 'views/_layout.php' %}
{% block content %}
<div class="promises inner">
    <h1 class="promises-title page_title">5 обещаний бренда </h1>
    <div class="idea-list_block">
        <p class="arial-p">Страница «5 обещаний бренда» статичная, без возможности редактировать контент. </p>
        <ul class="idea-list_promises">
            <li>
                <span>1</span>Мы не останавливаемся в своем поиске понимания нужд клиентов
            </li>
            <li>
                <span>2</span>Мы строим доверительные личные отношения с клиентами
            </li>
            <li>
                <span>3</span>Мы делаем больше, чем требуется
            </li>
            <li>
                <span>4</span>Наша экспертиза и готовые решения вдохновляют клиентов
            </li>
            <li>
                <span>5</span>Успех клиентов – наш успех
            </li>
        </ul>
    </div>
    <div class="idea-head">
        <h2 class="promises-title page_title">база идей (уже 152)</h2>
        <a class="btn_blue right idea" href="#"><span class="icon idea"></span>Есть идея!</a>
    </div>
    <div class="idea-form_wrap">
        <form class="promises-form " action="promises.json" data-ajax="metro.afterIdea" method="post">
            <div class="select-row_bottom">
                <label>Выберите соответствующее обещание бренда</label>
                <select class="idea-select">
                    <option value="">Все обещания</option>
                    <option value="">Мы не останавливаемся в своем поиске понимания нужд клиентов</option>
                    <option value="">Мы строим доверительные личные отношения с клиентами</option>
                    <option value="">Мы делаем больше, чем требуется</option>
                    <option value="">Наша экспертиза и готовые решения вдохновляют клиентов</option>
                    <option value="">Успех клиентов – наш успех</option>
                </select>
            </div>
            <textarea class="w100" name="" cols="30" rows="10" placeholder="Текст идеи"></textarea>
            <input class="btn_gray block" disabled="disabled" type="submit" disabled="disabled" value="Подтвердить" data-nopermission data-nopermission-text="Для выполнения данного действия вам нужно авторизоваться"/>
        </form>
    </div>
    <ul class="idea-tabs_list inline-list">
        <li class="current desc">
            <a class="active" href="#">Новые</a>
        </li>
        <li>
            <a href="#">Популярные</a>
        </li>
    </ul>
    <div class="inline-list select-row">
        <label>Фильтровать идеи по обещанию</label>
        <select class="idea-select filter">
            <option value="" data-url="/">Все обещания Мы не останавливаемся в своем поиске понимания нужд клиентов</option>
            <option value="" data-url="/">Мы не останавливаемся в своем поиске понимания нужд клиентов</option>
            <option value="" data-url="/">Мы строим доверительные личные отношения с клиентами</option>
            <option value="" data-url="/">Мы делаем больше, чем требуется</option>
            <option value="" data-url="/">Наша экспертиза и готовые решения вдохновляют клиентов</option>
            <option value="" data-url="/">Успех клиентов – наш успех</option>
        </select>
    </div>
    <div class="idea-list_wrap">
        <ul class="promises-list">
            <li>
                <div class="promises-list_author">Александра Виноградова</div>
                <div class="promises-list_block">
                    <em>Идея для обещание бренда: Мы не останавливаемся в своем поиске понимания нужд клиентов</em>
                    <p>
                        Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                    </p>
                </div>
                <div class="promises-like_box">
                    <a href="like.json" class="round-label like-block" data-ajax="metro.like" data-nopermission data-nopermission-text="Для выполнения данного действия вам нужно авторизоваться"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                    <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                    <a class="line-list-border first like-link" href="#">Нравиться</a>
                    <a class="line-list-border comment-link" href="#">Комментировать</a>
                    <span class="line-list-border promises-date">Москва, ТЦ Какойнибудь</span>
                </div>
                <ul class="promises-list_level-2"></ul>
                <div class="promises-form_comment_block">
                    <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                        <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                        <input class="btn_gray block" disabled="disabled" type="submit" value="Отправить" disabled="disabled" data-nopermission data-nopermission-text="Для выполнения данного действия вам нужно авторизоваться"/>
                    </form>
                </div>
            </li>
            <li>
                <div class="promises-list_author">Александра Виноградова</div>
                <div class="promises-list_block">
                    <em>Идея для обещание бренда: Мы не останавливаемся в своем поиске понимания нужд клиентов</em>
                    <p>
                        Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                    </p>
                </div>
                <div class="promises-like_box">
                    <a href="like.json" class="round-label like-block" data-ajax="metro.like"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                    <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                    <a class="line-list-border first like-link" href="#">Нравиться</a>
                    <a class="line-list-border comment-link" href="#">Комментировать</a>
                    <span class="line-list-border promises-date">Москва, ТЦ Какойнибудь</span>
                </div>
                <ul class="promises-list_level-2"></ul>
                <div class="promises-form_comment_block">
                    <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                        <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                        <input class="btn_gray block" disabled="disabled" type="submit" value="Отправить"/>
                    </form>
                </div>
            </li>
            <li>
                <div class="promises-list_author">Александра Виноградова</div>
                <div class="promises-list_block">
                    <em>Идея для обещание бренда: Мы не останавливаемся в своем поиске понимания нужд клиентов</em>
                    <p>
                        Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                    </p>
                </div>
                <div class="promises-like_box">
                    <a href="like.json" class="round-label like-block" data-ajax="metro.like"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                    <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                    <a class="line-list-border first like-link" href="#">Нравиться</a>
                    <a class="line-list-border comment-link" href="#">Комментировать</a>
                    <span class="line-list-border promises-date">Москва, ТЦ Какойнибудь</span>
                </div>
                <ul class="promises-list_level-2"></ul>
                <div class="promises-form_comment_block">
                    <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                        <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                        <input class="btn_gray block" disabled="disabled" type="submit" value="Отправить"/>
                    </form>
                </div>
            </li>
            <li>
                <div class="promises-list_author">Александра Виноградова</div>
                <div class="promises-list_block">
                    <em>Идея для обещание бренда: Мы не останавливаемся в своем поиске понимания нужд клиентов</em>
                    <p>
                        Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                    </p>
                </div>
                <div class="promises-like_box">
                    <a href="like.json" class="round-label like-block" data-ajax="metro.like"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                    <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                    <a class="line-list-border first like-link" href="#">Нравиться</a>
                    <a class="line-list-border comment-link" href="#">Комментировать</a>
                    <span class="line-list-border promises-date">Москва, ТЦ Какойнибудь</span>
                </div>
                <ul class="promises-list_level-2"></ul>
                <div class="promises-form_comment_block">
                    <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                        <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                        <input class="btn_gray block" disabled="disabled" type="submit" value="Отправить"/>
                    </form>
                </div>
            </li>
            <li>
                <div class="promises-list_author">Александра Виноградова</div>
                <div class="promises-list_block">
                    <em>Идея для обещание бренда: Мы не останавливаемся в своем поиске понимания нужд клиентов</em>
                    <p>
                        Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                    </p>
                </div>
                <div class="promises-like_box">
                    <a href="like.json" class="round-label like-block" data-ajax="metro.like"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                    <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                    <a class="line-list-border first like-link" href="#">Нравиться</a>
                    <a class="line-list-border comment-link" href="#">Комментировать</a>
                    <span class="line-list-border promises-date">Москва, ТЦ Какойнибудь</span>
                </div>
                <ul class="promises-list_level-2"></ul>
                <div class="promises-form_comment_block">
                    <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                        <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                        <input class="btn_gray block" disabled="disabled" type="submit" value="Отправить"/>
                    </form>
                </div>
            </li>
            <li>
                <div class="promises-list_author">Александра Виноградова</div>
                <div class="promises-list_block">
                    <em>Идея для обещание бренда: Мы не останавливаемся в своем поиске понимания нужд клиентов</em>
                    <p>
                        Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено.
                    </p>
                </div>
                <div class="promises-like_box">
                    <a href="like.json" class="round-label like-block" data-ajax="metro.like"><span class="icon tiny-small like"></span><span class="count">221</span></a>
                    <a href="comments.json" data-ajax="metro.loadComments" class="round-label comment-block"><span class="icon tiny-small comment"></span>3</a>
                    <a class="line-list-border first like-link" href="#">Нравиться</a>
                    <a class="line-list-border comment-link" href="#">Комментировать</a>
                    <span class="line-list-border promises-date">Москва, ТЦ Какойнибудь</span>
                </div>
                <ul class="promises-list_level-2"></ul>
                <div class="promises-form_comment_block">
                    <form class="promises-form_comment" action="postcomment.json" method="post" data-ajax="metro.afterComment">
                        <textarea class="w100" name="message_text" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
                        <input class="btn_gray block" disabled="disabled" type="submit" value="Отправить"/>
                    </form>
                </div>
            </li>
        </ul>
        <a class="btn_blue" data-ajax="metro.loadPromises" href="promises.json">Смотреть еще</a>
    </div>
</div>
{% endblock %}