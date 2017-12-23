<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" />


<?php
// подключаемся к БД
require_once "db.php";

// подключаем библиотеку с функциями
require_once "lib/functions.php";

if (!isset($_SESSION['login']) && !isset($_SESSION['pass']))
{
    echo "Войти";
}
else
{

    if($_GET['page'])
    {
        $page = info_from_db($connection_id, "page",$_GET['page']);
    }
?>
    <title><?php echo $page['title'];?></title>
    </head>
    <body>
    <?php
    echo "Олег|вход выполнен";
    // выводим меню
    info_from_db($connection_id, "menu");

?>

<div class="row">
    <div class="col-md-3">
        <?php

        require_once "login.php";
        ?>
    </div>
    <div class="col-md-9">