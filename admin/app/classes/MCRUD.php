<?php
namespace app\classes;


class MCRUD
{
    protected function preparePagesList()
    {
        $sql = "SELECT id,menu_name,menu_icon,position,created_at,updated_at FROM pages ORDER BY position";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    protected function setPagePosition($pos)
    {
        $sql = "UPDATE pages SET position = position+1 WHERE position >= {$pos}";
        Db::getInstance()->update("pages",array("position"=>"position+1"),array('position'=>$pos));
    }

    protected function getPageDataForEdit($id)
    {
        $sql = "SELECT menu_name,content,title,menu_icon FROM pages WHERE id ='{$id}'";
        $result = Db::getInstance()->read($sql);
        return $result;
    }

    protected function addPageData($data)
    {
        Db::getInstance()->create("pages",$data,TRUE);
    }

    protected function updatePageData($id,$data)
    {
        Db::getInstance()->update("pages", $data, array('id'=>$id),TRUE);
    }

    protected function deletePageData($id)
    {
        Db::getInstance()->delete("pages",$id);
    }
}