<?php
namespace app\classes;
?>

<h2>Список страниц</h2>
<?php

$pages = Factory::build("CCRUD");
$all_pages = $pages->getPagesList();

foreach ($all_pages as $v)
{
    echo "<a href='index.php?page=edit&id={$v['id']}'>{$v['menu_name']}</a>|";
    echo "<a href='index.php?page=edit&id={$v['id']}'> Редактировать </a>|";
    echo "<a href='index.php?page=delete&id={$v['id']}'> Удалить</a><br>";
}
