<?php
    session_start();
    $pageTitle = "Регистрация";
    include('../inc/header.php');
?>

<main class="main register_form">
    <section class="welcome reg_auth">
        <div class="container">
            <div class="welcome_text welcome_text_auth">
            <h1 class="welcome_title">форма регистрации</h1>
            </div>

            <div class="filling_form">
                <div class="data_block">
                    <input type="text" class="data_text_input" placeholder="Логин">
                    <input type="text" class="data_text_input" placeholder="Эл.Почта">
                    <input type="text" class="data_text_input" placeholder="Пароль">
                    <input type="text" class="data_text_input" placeholder="Повторите пароль">
                </div>
                <div class="send_filling_form">
                    <button class="btn_send_filling_form">Отправить</button>
                </div>
            </div>

            <h2 class="subtitle_filling_form"><a href="../php/auth.php">Уже авторизованы ?</a></h2>
        </div>
    </section>
</main>
<script src="../../js/home.js"></script>