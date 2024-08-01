<?php
    session_start();
    $pageTitle = "Оставить рецензию";
    include('../inc/header.php');
    include('../inc/welcome.php');
?>

<section class="anime_not_found-over">
    <div class="container">
        <h2 class="title">Оставить рецензию</h2>
        <img src="../img/review/girl1.png" alt="anime_girl">
        <p class="text_anime_not_found_review">
        Напиши нам на <a href="#"><span>ПОЧТУ</span></a>, <a href="#"><span>ВК</span></a> или в <a href="#"><span>TELEGRAM</span></a> <br> и мы обязательно добавим твое любимое аниме !
        </p>
    </div>
</section>

<section class="contacts-over">
    <div class="container">
    <h2 class="title">контактная информация</h2>
    <div class="footer_icons_over">
                <div class="logo_over mail_over">
                    <a href="">
                    <div class="logo_logo_footer">
                        <img src="../img/footer/logo_mail.svg" alt="">
                    </div>
                    <p class="text_logo">
                    *********************<br>@mail.com
                    </p>
                    </a>
                </div>
                <div class="logo_over vk_over">
                    <a href="">
                    <div class="logo_logo_footer">
                        <img src="../img/footer/logo_vk.svg" alt="">
                    </div>
                    <p class="text_logo">
                    http://vk.com/<br>****************
                    </p>
                    </a>
                </div>
                <div class="logo_over tg_over">
                    <a href="">
                    <div class="logo_logo_footer">
                        <img src="../img/footer/logo_tg.svg" alt="">
                    </div>
                    <p class="text_logo">
                    https://<br>web.telegram.org/a/<br>*******
                    </p>
                    </a>
                </div>
            </div>
    </div>
</section>

<section class="author-review-over">
    <div class="container">
    <h2 class="title">для авторов рецензий</h2>
    <img src="../img/review/girl2.png" alt="anime_girl">
    <p class="text_anime_not_found_review"><a href="#">
        <span>Уважаемые авторы рецензий,</span></a>
        <p class="text_anime_not_found_review">
        Просим вас писать рецензии, следуя предложенному шаблону, чтобы <br> упростить процесс проверки и публикации на нашем сайте. Использование <br> единого шаблона обеспечивает структурированность и удобочитаемость <br> ваших текстов.
        </p>
    </div>
</section>

<section class="sample-review_anime-over">
    <div class="container">
    <h2 class="title">шаблон рецензии</h2>
    <p class="text_anime_not_found_review">Постарайтесь следовать предложенному шаблону</p>

    <!-- шаблон -->
     <div class="section-sample-review-steps-over">
        <!-- 1 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>ЗАГОЛОВОК</h2>
            </div>
            <div class="section-sample-circle">1</div>
            <div class="section-sample-content-right">
                <p>Название произведения</p>
            </div>
        </div>
        <!-- 2 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>Жанр</h2>
            </div>
            <div class="section-sample-circle">2</div>
            <div class="section-sample-content-right">
                <p>Тут вы должны написать жанр произведения</p>
            </div>
        </div>
        <!-- 3 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>Введение</h2>
            </div>
            <div class="section-sample-circle">3</div>
            <div class="section-sample-content-right">
                <p>В введении дайте краткое описание произведения и упомяните, почему вы решили его прочитать или рецензировать. Например:
                "Роман 'Название' автора 'Имя Автора' привлек мое внимание благодаря своему необычному сюжету и положительным отзывам критиков. Этот роман относится к жанру 'Жанр' и был опубликован в 'Год'."</p>
            </div>
        </div>
        <!-- 4 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>сюжет произведения</h2>
            </div>
            <div class="section-sample-circle">4</div>
            <div class="section-sample-content-right">
                <p>Сюжет: Кратко изложите сюжет, избегая спойлеров. Опишите завязку, ключевые события и кульминацию.
                Персонажи: Рассмотрите главных персонажей, их развитие и взаимодействие между собой. Отметьте, насколько они были проработаны и интересны.</p>
            </div>
        </div>
        <!-- 5 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>Тема и посыл:</h2>
            </div>
            <div class="section-sample-circle">5</div>
            <div class="section-sample-content-right">
                <p>Опишите главные темы произведения и его основной посыл. Что хотел донести автор до читателей?
Стиль и язык: Оцените стиль письма автора, использование языка, метафор и других литературных приемов.
Анализ</p>
            </div>
        </div>
        <!-- 6 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>оценка произведения:</h2>
            </div>
            <div class="section-sample-circle">6</div>
            <div class="section-sample-content-right">
                <p>Положительные стороны:
Что вам особенно понравилось?
Какие моменты вас зацепили или оставили сильное впечатление?
Отрицательные стороны:
Что, по вашему мнению, можно было бы улучшить?
Были ли моменты, которые вам не понравились или показались скучными?</p>
            </div>
        </div>
        <!-- 7 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>Заключение</h2>
            </div>
            <div class="section-sample-circle">7</div>
            <div class="section-sample-content-right">
                <p>Подведите итоги рецензии. Поделитесь, кому бы вы порекомендовали это произведение и почему. Например:
                "В целом, роман 'Название' — это захватывающее и глубокое произведение, которое стоит прочитать всем любителям 'Жанр'. Несмотря на некоторые недостатки, книга оставляет сильное впечатление и заставляет задуматься о 'Тема'."</p>
            </div>
        </div>
        <!-- 8 -->
        <div class="section-sample-item">
            <div class="section-sample-content-left">
                <h2>Оценка</h2>
            </div>
            <div class="section-sample-circle">8</div>
            <div class="section-sample-content-right">
                <p>Напишите оценку от 1 до 10</p>
            </div>
        </div>
    </div>
    </div>
</section>

<?php
    include('../inc/footer.php');
?>
