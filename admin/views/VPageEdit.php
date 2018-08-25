<?php
$editPage = new app\classes\CCRUD();
$page = $editPage->editPage($_GET["id"]);
?>
<h2>
    Редактирование страницы <?=$page['menu_name']?>
</h2>
<form method="post">
    title<input type="text" name="title" value="<?=$page['title']?>">
    иконка<input type="text" name="menu_icon" value="<?=$page['menu_icon']?>">
    название в меню<input type="text" name="menu_name" value="<?=$page['menu_name']?>">
    контент
</form>