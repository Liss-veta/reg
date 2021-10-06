<?php
session_start();
require '../connect.php';

//проверка авторизации//


//логин и пароль которые ввел пользователь для входа
$login = $_POST['login'];
$password = md5($_POST['password']);
//вытаскиваем из бд эти же данные
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");


if (mysqli_num_rows($check_user) > 0) {
    //добавляем в виде массива в переменную данные пользователя
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" =>$user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];
    $_SESSION['message'] = 'Вход выполнен успешно!';
    header('Location: ../profile.php');
}
else {
    $_SESSION['message'] = 'Вход не выполнен, несовпадение данных!';
    header('Location: ../index.php');
}
