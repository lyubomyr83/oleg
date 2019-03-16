<?php
namespace app\classes;
// если пользователь не залогинен
if(!$_SESSION['loged'])
{

    if ($_POST)
    {
        /**
         * @var $login Clogin
         */
        $login = Factory::build('Clogin');
        $login->checkLogin($_POST);
    }
    else
    {
        require_once "views/VLoginForm.php";
    }

}
else
{
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
        // выход
        if($_GET["page"]=="exit")
        {
            unset($_SESSION['loged']);
            header('Refresh: 0; URL=index.php');
        }
    }

    // если данные пришли c формы
    if($_POST)
    {
        // авторизация

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
}