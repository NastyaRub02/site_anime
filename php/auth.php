<?php
    session_start();
    $pageTitle = "Форма авторизации";
    include('../inc/header.php');
?>

<main class="main register_form">
    <section class="welcome reg_auth">
        <div class="container">
            <div class="welcome_text welcome_text_auth">
            <h1 class="welcome_title">форма авторизации</h1>
            </div>

            <div class="filling_form">
                <div class="data_block">
                    <input type="text" class="data_text_input" placeholder="Логин">
                    <input type="text" class="data_text_input" placeholder="Пароль">
                </div>
                <div class="send_filling_form">
                    <button class="btn_send_filling_form">Отправить</button>
                </div>
            </div>

            <h2 class="subtitle_filling_form"><a href="../php/register.php">еще не авторизованы ?</a></h2>
            <h2 class="subtitle_filling_form subtitle_filling_form_password_login"><a href="../php/forgot_password.php">Забыли логин или пароль?</a></h2>
        </div>
    </section>
</main>
<script src="../../js/home.js"></script>
