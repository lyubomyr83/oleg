<?php
namespace app\classes;

$editPage = Factory::build("CCRUD");
$page = $editPage->editPage($_GET["id"]);
?>
<h2>
    Редактирование страницы <?="<a target=\"_blank\" href=\"http://localhost/oleg/?page={$_GET["id"]}\">{$page['menu_name']}</a>"?>
</h2>
<form method="post">
    <div class="row">
        <div class="col-md-1">title</div>
        <div class="col-md-11"><input type="text" name="title" value="<?=$page['title']?>"></div>
    </div>
    <div class="row">
        <div class="col-md-1">иконка <a href="https://fontawesome.veliovgroup.com/design.html" target="_blank"> (список)</a> </div>
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



