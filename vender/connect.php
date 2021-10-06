<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'test32');
if(!$connect){
    die('Ошибка подключения к БД');
}