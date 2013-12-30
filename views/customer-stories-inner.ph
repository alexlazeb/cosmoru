{% extends 'views/_layout.php' %}
{% block content %}
<div class="customer-inner inner">
    <h1 class="customer-page_title page_title block">Customer stories</h1>
    <div class="customer-stories-inner">
        <div class="customer-stories_list_head clear-fix">
            <figure>
                <div class="img_block left">
                    <img src="img/castomer_storys_list_inner.jpg" alt="" />
                </div>
                <figcaption>
                    <strong class="customer-stories_author">Александра Виноградова</strong>
                    <span class="block">ТЦ «Олимпийский»</span>
                    <p>Под текстом, за который можно проголосовать, есть кнопка «+» и общее количество проголосовавших, а также комментариев. Один пользователь может голосовать за одну и ту же идею или обещание только один раз. Количество комментариев не ограничено. </p>
                </figcaption>
            </figure>
        </div>
        <div class="customer-stories_article">
            <article>
                <strong>История</strong>
                <p>
                    Уволившись из армии, он решил стать индивидуальным предпринимателем и открыл собственный торговый бизнес.
                </p>
                <strong>Проблема</strong>
                <p>
                    Он не знал с чего начать, т.к. ранее не имел опыта ведения бизнеса.
                </p>
                <strong>Помощь METRO</strong>
                <p>
                    Помогли ему определиться с ассортиментом и типами оборудования для хранения товаров. Мы предложили ему большое количество собственных брендов, но ему потребовалось 2 года, чтобы покупатели к ним привыкли.
                </p>
                <strong>Результат</strong>
                <p>
                    У него три небольших магазина в Дмитрове и Угличе, но он испытывает сильнейшую конкуренцию со стороны сетевых магазинов. Поэтому вынужден искать самые дешевые предложения от поставщиков.
                </p>
                <p>
                <iframe width="640" height="390" src="http://www.youtube.com/embed/hKqG4mdj1iM" frameborder="0" allowfullscreen></iframe>
                </p>
                <div class="article_tags">
                    <span class="arial-bold-gray-14">Теги </span>
                    <ul class="article_tags_list inline-list">
                        <li><a href="#">Текст</a></li>
                        <li><a href="#">Который</a></li>
                        <li><a href="#">Можно</a></li>
                        <li><a href="#">Проголосовать</a></li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</div>
{% endblock %}