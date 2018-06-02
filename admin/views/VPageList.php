<h2>Список страниц</h2>
<?php
$pages = new app\classes\CCRUD();
$all_pages = $pages->getPagesList();

foreach ($all_pages as $v)
{
    echo "<a href='index.php?page=edit&id={$v['id']}'>{$v['menu_name']}</a><br>";
}
