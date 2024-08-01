<?php
    session_start();
    $pageTitle = "Восстановление профиля";
    include('../inc/header.php');
?>

<main class="main register_form">
    <section class="welcome reg_auth">
        <div class="container">
            <div class="welcome_text welcome_text_auth">
            <h1 class="welcome_title">Восстановление профиля</h1>
            </div>

            <div class="filling_form">
                <div class="data_block">
                    <input type="text" class="data_text_input" placeholder="Введите ваш email">
                    <input type="text" class="data_text_input" placeholder="Код подтверждения">
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