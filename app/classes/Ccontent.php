<?php
namespace app\classes;


class Ccontent extends Mcontent
{
    public function getContent($pageid)
    {
        $result = $this->prepareContent($pageid);

        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}