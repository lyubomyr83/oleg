<?php
namespace app\classes;


class Mcontent
{
    public function prepareContent($id)
    {
        $param = ['id'=>$id];
        $sql = "SELECT  id, content, title FROM pages WHERE id = :id";
        $result = Db::getInstance()->sql($sql,$param);
        return $result;
    }
}