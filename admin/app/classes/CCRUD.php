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

    public function editPage($id)
    {
        $result = $this->getPageDataForEdit($id);
        $page = mysqli_fetch_assoc($result);
        return $page;
    }

    public function updatePage($id, $data)
    {
        $result = $this->updatePageData($id, $data);
    }
}