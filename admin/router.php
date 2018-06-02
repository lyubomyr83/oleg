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
