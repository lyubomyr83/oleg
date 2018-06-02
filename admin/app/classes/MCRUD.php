<?php
namespace app\classes;


class MCRUD
{
    public function preparePagesList()
    {
        $sql = "SELECT id,menu_name,menu_icon FROM pages";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}