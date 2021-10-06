<?php session_start();
if($_SESSION['user'])
{
    header('Location: ../profile.php');
}?>


//форма регистрации//


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="int">
<!--Форма авторизации-->
<h1>Регистрация</h1>
//регистрация
<form action="vender/signup.php" method="post" enctype="multipart/form-data">
    <label for="">ФИО</label>
    <input type="text" name="full_name" placeholder="Введите своё полное имя" >
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label for="">Почта</label>
    <input type="email" name="email" placeholder="Введите свой E-mail">
    <label for="">Изображение профиля</label>
    <input type="file" name="avatar">
    <label for="">Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label for="">Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Зарегистрироваться</button>
    <p class="voiti">Уже есть аккаунт? - <a href="index.php">Войти</a></p>

    //вывод сообщения снизу
        <?php
        if($_SESSION['message'])
        {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
</form>
<script src="assets/script.js"></script>
</body>
</html>
