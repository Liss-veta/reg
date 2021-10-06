<?php
session_start();
if(!$_SESSION['user'])
{
    header('Location: /');
}
?>

//вход выполнен успешно, авторизация прошла////

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Моя страница</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<form>

    <img src="<?= $_SESSION['user']['avatar']?>" width="200" alt="">
    <h2 style="margin: 10px 0"><?= $_SESSION['user']['full_name']?></h2>
    <a href="#"> <?= $_SESSION['user']['email'] ?></a>
    <a href="vender/logout.php" class="logout">Выход</a>
</form>
</body>
</html>

