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

    public function getPageDataForEdit($id)
    {
        $sql = "SELECT menu_name,content,title,menu_icon FROM pages WHERE id ='{$id}'";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}