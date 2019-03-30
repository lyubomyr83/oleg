<?php
namespace app\classes;
?>

<body>

    <?php
    // если пользователь не залогинен
    if(!$_SESSION['loged'])
    {
        if ($_POST)
        {
            /**
             * @var $login Clogin
             */
            $login = Factory::build('Clogin');
            $login->checkLogin($_POST);
        }
        else
        {
            require_once "views/VLoginForm.php";
        }
    }
    else
    {

        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col header">
                        <?php
                        require_once "menu.php";
                        ?>
                </div>
            </div>
            <div class="row">
                <div class="col content">

                        <?php require_once "router.php"; ?>

                </div>
            </div>
        </div>
        <?php

    }