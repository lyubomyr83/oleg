<?php
namespace app\classes;


class MJournal
{
    public function receiveJournal()
    {
        $sql = "SELECT * FROM journal_list";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}