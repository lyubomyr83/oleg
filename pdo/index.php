<?php
// автозагрузка классов
function __autoload($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
}

$host = \app\classes\Config::DB_HOST;
$name = \app\classes\Config::DB_NAME;
$user = \app\classes\Config::DB_USER;
$pass = \app\classes\Config::DB_PASS;

try{
    $DBH = new PDO("mysql:host={$host};dbname={$name}",$user,$pass);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Подключение к БД установлено";

    //$STH = $DBH->prepare
}
catch
(PDOException $e)
{
    echo "Извините, но операция подключения к БД не может быть выполнена";
    file_put_contents('log.txt',$e->getMessage()."\n",FILE_APPEND);
}
