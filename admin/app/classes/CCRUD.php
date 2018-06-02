<?php
namespace app\classes;


class CCRUD extends MCRUD
{
    public function getPagesList()
    {
        $result = $this->preparePagesList();
        while ($row = mysqli_fetch_assoc($result))
        {
            $pages[$row['id']]= $row;
        }
        return $pages;
    }
}