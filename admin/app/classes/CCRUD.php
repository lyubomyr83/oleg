<?php
namespace app\classes;


class CCRUD extends MCRUD
{
    // список страниц
    public function getPagesList()
    {
        $result = $this->preparePagesList();
        $pages = $result->fetchAll();

        return $pages;
    }

    // позиция в меню
    protected function pos_inc($pos)
    {
        $this->setPagePosition($pos);
    }

    //добавляем страницу
    public function addPage($data)
    {
        $this->addPageData($data);
    }

    // редактировать страницу
    public function editPage($id)
    {
        $result = $this->getPageDataForEdit($id);
        $page = $result->fetch();
        return $page;
    }

    // обновить страницу
    public function updatePage($id, $data)
    {
        $this->pos_inc($data['position']);
        $result = $this->updatePageData($id, $data);
    }

    // удалить страницу
    public function deletePage($id)
    {
        $this->deletePageData($id);
    }
}