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
            <div class="row">
                <div class="col content">

                        <?php require_once "router.php"; ?>

                </div>
            </div>
        </div>

    <?php
    }
    ?>