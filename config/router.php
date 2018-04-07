<?php
// если данные пришли в ссылке
if ($_GET)
{
    if ($_GET['page'])
    {
        require_once "views/Vcontent.php";
    }
}