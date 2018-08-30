<?php
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

if($_POST)
{
    if($_GET["page"]=="edit")
    {
        $page = new \app\classes\CCRUD();
        $page->updatePage($_GET["id"],$_POST);
    }
}
