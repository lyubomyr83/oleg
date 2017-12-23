<?php

require_once "db_settings.php";

$connection_id = mysqli_connect($host, $user, $password, $db_name);
// установка принудительной кодировки UTF-8
mysqli_query($connection_id, "set names utf8") or die ("set names utf8 failed");

if($connection_id){
    //echo "Подключились к БД";
}