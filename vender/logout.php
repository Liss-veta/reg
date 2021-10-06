<?php
session_start();
//грохаем данные пользователя
unset($_SESSION['user']);
header('Location: ../index.php');
