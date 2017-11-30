<?php
session_start();

if (!isset($_SESSION['login']) && !isset($_SESSION['pass']))
{
    echo "Войти";
}
else
{
    echo "Олег|вход выполнен";
}

// подключаем библиотеку с функциями
require_once "lib/functions.php";

// подключаемся к БД
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" />

    <title><?php echo $page_name;?></title>
</head>

<body>
<div class="row">
    <div class="col-md-3">
        <?php
        require_once "menu.php";
        require_once "login.php";
        ?>
    </div>
    <div class="col-md-9">
        <?php
        if (isset($_SESSION['login']) && isset($_SESSION['pass']))
        {
            require_once "body.php";
        }
