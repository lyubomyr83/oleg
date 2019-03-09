<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" />
    <title>Зона администрирования</title>

</head>
<body>

    <?php
    if($_SESSION['loged'])
    {

    ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                        <?php
                        require_once "menu.php";
                        ?>
                    </div>
                </div>
                <div class="col">
                    <div class="col-">
                        <?php require_once "router.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
