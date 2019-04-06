<?php
$menu = $menuobj->getMenu();

echo "<ul>";
foreach ($menu as $value)
{
    echo "<li><a href=\"?page={$value['id']}\"><i class='{$value['menu_icon']} icon-large'</i> {$value['menu_name']}</a></li>";
}
echo "</ul>";