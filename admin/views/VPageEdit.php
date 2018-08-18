<?php
$editPage = new app\classes\CCRUD();
$page = $editPage->editPage($_GET["id"]);
?>
<h2>
    Редактирование страницы <?=$page['menu_name']?>
</h2>