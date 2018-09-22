<?php
namespace app\classes;


class Ccontent extends Mcontent
{
    public function getContent($pageid)
    {
        $result = $this->prepareContent($pageid);

        $row = $result->fetch();
        return $row;
    }
}