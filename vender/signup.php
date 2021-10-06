<?php
session_start();
require 'connect.php';

//проверка регистрации//

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);


if($password === $password_confirm)
{
    //путь куда загружается картинка
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    //путь айла на сервере
    if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path))
    {
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('Location: ../registr.php');
    }
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.php');
    //добавление в бд
    mysqli_query($connect, "INSERT INTO `users` (`id_user`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

}
else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registr.php');
}





