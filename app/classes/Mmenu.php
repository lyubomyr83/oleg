<?php
namespace app\classes;


class Mmenu
{
    public function prepareMenu()
    {
        $sql = "SELECT  id, menu_name, menu_icon FROM pages";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}