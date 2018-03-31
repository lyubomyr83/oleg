<?php
$menu = $menuobj->getMenu();

echo "<ul>";
foreach ($menu as $value)
{
    echo "<li><a href=\"page={$value['id']}\">{$value['menu_name']}</a></li>";
}
echo "</ul>";