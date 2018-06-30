<?php
session_start();

// отображение ошибок
ini_set('display_errors', '0');

// автозагрузка классов
function __autoload($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
}

// библиотека функций
require_once "lib/functions.php";

// Создаём нужные объекты
$menuobj = new \app\classes\Cmenu(); // для работы с меню
$contentobj = new \app\classes\Ccontent(); // для работы с контентом
//$teacher = new \app\classes\Cclass();
//echo $teacher->getInfo(5)."<br>";
//echo $teacher->getInfo2(8)."<br>";
//$AHome = new \app\classes\Cclass();
//echo $AHome->getInfo3(3);