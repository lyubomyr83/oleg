<?php
namespace app\classes;
/** @var $page \app\classes\CCRUD*/

// если данные пришли в ссылке
if($_GET)
{
    // список страниц
    if($_GET['page']=="list")
    {
        require_once "views/VPageList.php";
    }
    // добавление страницы
    if($_GET["page"]=="add")
    {
        require_once "views/VPageAdd.php";
    }
    // редактирование страницы
    if($_GET["page"]=="edit")
    {
        require_once "views/VPageEdit.php";
    }
    // удаление страницы
    if($_GET["page"]=="delete")
    {
        $page = Factory::build("CCRUD");
        $page->deletePage($_GET["id"]);
    }
}

// если данные пришли c формы
if($_POST)
{
    // добавление страницы
    if($_GET["page"]=="add")
    {
        $page = Factory::build("CCRUD");
        $page->addPage($_POST);
    }

    // редактирование страницы
    if($_GET["page"]=="edit")
    {
        $page = Factory::build("CCRUD");
        $page->updatePage($_GET["id"],$_POST);
    }
}
