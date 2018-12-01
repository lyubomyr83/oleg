<?php
namespace app\classes;

if($_GET)
{
    if($_GET['page']=="list")
    {
        require_once "views/VPageList.php";
    }
    if($_GET["page"]=="edit")
    {
        require_once "views/VPageEdit.php";
    }
}

/** @var $page \app\classes\CCRUD*/
if($_POST)
{
    if($_GET["page"]=="edit")
    {
        $page = Factory::build("CCRUD");
        $page->updatePage($_GET["id"],$_POST);
    }
}
