<?php
session_start();

if($_SESSION['user'])
{
    header('Location: ../profile.php');
}
?>
//------------------------------------------------//
//форма авторизации//
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="body">
    <h1>Авторизация</h1>
    //Данные не кодируются. Это значение применяется при отправке файлов. 'enctype = multipart/form-data'
    <form action="login.php" method="post" enctype="multipart/form-data">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a></p>
        //вывод сообщения снизу
        <?php
        if($_SESSION['message'])
        {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
<!--Форма авторизации-->

<script src="assets/script.js"></script>
</body>
</html>