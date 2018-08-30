<?php
$editPage = new app\classes\CCRUD();
$page = $editPage->editPage($_GET["id"]);
?>
<h2>
    Редактирование страницы <?=$page['menu_name']?>
</h2>
<form method="post">
    <div class="row">
        <div class="col-md-1">title</div>
        <div class="col-md-11"><input type="text" name="title" value="<?=$page['title']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-1">иконка</div>
        <div class="col-md-11"><input type="text" name="menu_icon" value="<?=$page['menu_icon']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-1">название в меню</div>
        <div class="col-md-11"> <input type="text" name="menu_name" value="<?=$page['menu_name']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-1">контент</div>
        <div class="col-md-11"><textarea rows="5" cols="48" name="content"><?=$page['content']?></textarea></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><input type="submit" value="Сохранить"></div>
    </div>
</form>