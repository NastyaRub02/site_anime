<?php
    session_start();
    $pageTitle = "Аниме";
    include('../inc/header.php');
    include('../inc/welcome.php');
?>

<!-- СЕКЦИЯ ПОИСКА -->
<section class="line_sorting-search">
<div class="line_anime_width-max"></div>
    <div class="container">
    <div class="text_sorting_search">
    <div class="subtitle_sorting-over">
        <h3 class="text_subtitle_sorting-over-h3">
        Сортировать по:
        </h3>
    </div>

    <!-- Дроп. кнопка -->
    <div class="dropdown_sorting-over">
        <div class="dropbtn_sorting-over_text_logo">
            <button class="dropbtn_sorting-over">Еще 
            <i class="fa fa-caret-down-sorting-over"></i>
            <img src="../img/anime/dropdown.svg" alt="dropdown" class="sorting-over_img">
            </button>
        </div>
        <div class="dropdown-content-sorting-over">
        <a href="#">Топ лучшее</a>
        <a href="#">Топ худшее</a>
        </div>
    </div>

    <!-- Поле поиска -->
    <div class="search_sorting-over">
    <form class="search_sorting-over-form">
        <input class="search_sorting-over-input" type="text" placeholder="Искать аниме">
        <button class="search_sorting-over-button" type="submit">
            <a href=""><img src="../img/anime/Search.svg" alt="anime-Search"></a>
        </button>
    </form>
    </div>
</div>
</div>
<div class="line_anime_width-max"></div>
</section>

<!-- СЕКЦИЯ КАРТОЧЕК -->
<section class="section_cards_anime-over">
    <div class="container">
    <div class="card-anime-display_flex">
        <!-- Сама карточка card_anime-over -->
        <a href="#"><div class="card_anime-over">
            <!-- Полоса рейтинга -->
            <div class="card_anime_rating-over">
                <div class="card_anime_rating">
                    <!-- Сюда код полосы -->
                </div>
                <div class="card_anime_rating-text">
                    <!-- Сюда балл рейтинга -->
                    <p>8.1</p>
                </div>
            </div>
            <!-- название,жанр и звездочный рейтинг -->
             <div class="anime_name_genre_rating2-over">
                <!-- название и жанр -->
                 <div class="anime_name_genre-over">
                    <h2 class="anime_rating2_genre_h3">
                        <!-- Название аниме -->
                        Иная
                    </h2>
                    <p class="anime_rating2_genre_p">
                        <!-- Жанр аниме -->
                        хоррор
                    </p>
                 </div>
                 <!-- звездочный рейтинг -->
                  <div class="card_anime_rating2_text-over">
                    <div class="card_anime_rating2">
                        <!-- Сюда код полосы -->
                        <img src="../img/anime/Star.svg" alt="Star">
                    </div>
                    <div class="card_anime_rating2-text">
                        <!-- Сюда балл рейтинга -->
                        <p>8.1</p>
                    </div>
                </div>
             </div>
        </div></a>
        <!-- конец карточки -->
        <a href="#"><div class="card_anime-over">
            <!-- Полоса рейтинга -->
            <div class="card_anime_rating-over">
                <div class="card_anime_rating">
                    <!-- Сюда код полосы -->
                </div>
                <div class="card_anime_rating-text">
                    <!-- Сюда балл рейтинга -->
                    <p>8.1</p>
                </div>
            </div>
            <!-- название,жанр и звездочный рейтинг -->
             <div class="anime_name_genre_rating2-over">
                <!-- название и жанр -->
                 <div class="anime_name_genre-over">
                    <h2 class="anime_rating2_genre_h3">
                        <!-- Название аниме -->
                        Иная
                    </h2>
                    <p class="anime_rating2_genre_p">
                        <!-- Жанр аниме -->
                        хоррор
                    </p>
                 </div>
                 <!-- звездочный рейтинг -->
                  <div class="card_anime_rating2_text-over">
                    <div class="card_anime_rating2">
                        <!-- Сюда код полосы -->
                        <img src="../img/anime/Star.svg" alt="Star">
                    </div>
                    <div class="card_anime_rating2-text">
                        <!-- Сюда балл рейтинга -->
                        <p>8.1</p>
                    </div>
                </div>
             </div>
        </div></a>
        <a href="#"><div class="card_anime-over">
            <!-- Полоса рейтинга -->
            <div class="card_anime_rating-over">
                <div class="card_anime_rating">
                    <!-- Сюда код полосы -->
                </div>
                <div class="card_anime_rating-text">
                    <!-- Сюда балл рейтинга -->
                    <p>8.1</p>
                </div>
            </div>
            <!-- название,жанр и звездочный рейтинг -->
             <div class="anime_name_genre_rating2-over">
                <!-- название и жанр -->
                 <div class="anime_name_genre-over">
                    <h2 class="anime_rating2_genre_h3">
                        <!-- Название аниме -->
                        Иная
                    </h2>
                    <p class="anime_rating2_genre_p">
                        <!-- Жанр аниме -->
                        хоррор
                    </p>
                 </div>
                 <!-- звездочный рейтинг -->
                  <div class="card_anime_rating2_text-over">
                    <div class="card_anime_rating2">
                        <!-- Сюда код полосы -->
                        <img src="../img/anime/Star.svg" alt="Star">
                    </div>
                    <div class="card_anime_rating2-text">
                        <!-- Сюда балл рейтинга -->
                        <p>8.1</p>
                    </div>
                </div>
             </div>
        </div></a>
        </div>
    </div>
</section>

<!-- ПАГИНАЦИЯ -->

<?php
    include('../inc/footer.php');
?>
