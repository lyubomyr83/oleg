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

    public function updatePageData($id,$data)
    {
        $sql = "UPDATE pages SET ";
        foreach ($data as $k=>$v)
        {
            $sql.= "{$k}='{$v}',";
        }

        $sql = substr($sql,0,-1);

        $sql.= " WHERE id='{$id}'";

        echo $sql;
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}