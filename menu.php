<ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Главная</a></li>
    <li role="presentation" class="active"><a href="pifagor.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Таблица Пифагора</a></li>

    <?php
        if (($_SESSION['login']) && ($_SESSION['pass']))
        {?>
            <li role="presentation" class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Выйти</a></li>
        <?php
        }
    ?>

</ul>