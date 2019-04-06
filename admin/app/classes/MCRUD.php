<?php
namespace app\classes;


class MCRUD
{
    public function preparePagesList()
    {
        $sql = "SELECT id,menu_name,menu_icon,created_at,updated_at FROM pages";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function getPageDataForEdit($id)
    {
        $sql = "SELECT menu_name,content,title,menu_icon FROM pages WHERE id ='{$id}'";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    public function addPageData($data)
    {
        Db::getInstance()->create("pages",$data,TRUE);
    }

    public function updatePageData($id,$data)
    {
        Db::getInstance()->update("pages", $data, array('id'=>$id),TRUE);
    }

    public function deletePageData($id)
    {
        Db::getInstance()->delete("pages",$id);
    }
}