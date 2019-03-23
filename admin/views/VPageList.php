<?php
namespace app\classes;

$pages = Factory::build("CCRUD");
$all_pages = $pages->getPagesList();
?>

<h2>Список страниц</h2>
<div class="container">
        <div class="row">
            <div class="col-md">Название</div>
            <div class="col-md">Редактировать</div>
            <div class="col-md">Удалить</div>
            <div class="col-md">Изменена</div>
            <div class="col-md">Создана</div>
        </div>


<?php
foreach ($all_pages as $v)
{
    ?>
    <div class="row page_list">
        <div class="col-md page_list_name"><a href='index.php?page=edit&id=<?=$v['id']?>'><?=$v['menu_name']?></a></div>
        <div class="col-md"><a href='index.php?page=edit&id=<?=$v['id']?>'> Редактировать </a></div>
        <div class="col-md"><a href='index.php?page=delete&id=<?=$v['id']?>'> Удалить</a><br></div>
        <div class="col-md"><?=$v['updated_at']?></div>
        <div class="col-md"><?=$v['created_at']?></div>
    </div>




    <?php
}
?>
</div>
