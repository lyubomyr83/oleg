<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-9">
        <h1> Личный сайт Олега Назаренко</h1>
    </div>
</div>

<div class="row">
        <div id="menu" class="col-md-2">
            <?php
            // выводим меню
            require_once "views/Vmenu.php";
            ?>
        </div>

        <div class="col-md-9">

            <?php

            if ($_GET)
            {
                if ($_GET['page'])
                {
                    require_once "views/Vcontent.php";
                }
            }
            ?>
        </div>

</div>
