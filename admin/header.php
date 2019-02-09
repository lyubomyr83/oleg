<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" />
    <title></title>
</head>
<body>

    <?php
    if($_SESSION['loged'])
    {
    ?>
        <div class="container">
            <div class="row">
                <div id="menu" class="col-md">
                    <?php

                    {
                       require_once "menu.php";
                    }
                    ?>
                </div>
                <div class="col-md">
                    <?php require_once "router.php"; ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
