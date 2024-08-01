<?php
    session_start();
    $pageTitle = "Аниме не найдено";
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

<!-- ТАКОГО АНИМЕ НЕ НАЙДЕНО -->
<section class="anime_not_found-over">
    <div class="container">
        <p class="text_anime_not_found">
        Извините, но поиск не дал результатов. <br> Вы можете <a href="#"><span> добавить </span></a> свое любимое аниме на наш сайт!
        </p>
        <img src="../img/anime/anime_girl.png" alt="anime_girl">
    </div>
</section>

<?php
    include('../inc/footer.php');
?>
