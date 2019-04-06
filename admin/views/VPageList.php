<?php
namespace app\classes;

$pages = Factory::build("CCRUD");
$all_pages = $pages->getPagesList();
?>

<h2>Список страниц</h2>
<div class="container">
<?php
foreach ($all_pages as $v)
{
    ?>
    <div class="row page_list">
        <div class="col-md page_list_name"><a href='index.php?page=edit&id=<?=$v['id']?>'><i class="<?=$v['menu_icon']?> icon-large"> </i> <?=$v['menu_name']?></a></div>
        <div class="col-md"><a href='index.php?page=edit&id=<?=$v['id']?>'> Редактировать </a></div>
        <div class="col-md"><a href='index.php?page=delete&id=<?=$v['id']?>'> Удалить</a><br></div>
        <div class="col-md"><i class="icon-pencil icon-large"> </i><?=($v['updated_at'])? date("d.m.Y в H:i:s",$v['updated_at']):"";?></div>
        <div class="col-md"><i class="icon-plus-sign icon-large"></i> <?=($v['created_at'])? date("d.m.Y в H:i:s",$v['created_at']):"";?></div>
    </div>




    <?php
}
?>
</div>
