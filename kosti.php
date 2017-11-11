<?php
session_start();

$page_name = "Игра в кости";
require_once "header.php";
require_once "body.php";
?>
<div class="row">
    <div class="col-md-5 kosti_table">
        <?php
        echo "<div class='kosti_header'><h3>".$page_name."</h3></div>";
        kosti();
        ?>
        <br><a class="btn btn-default kosti_button" href="kosti.php" role="button">Играть</a>
    </div>
    <div class="col-md-7"></div>
</div>

<?php
require_once "footer.php";
?>

