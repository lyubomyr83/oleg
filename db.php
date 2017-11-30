<?php

require_once "db_settings.php";

$connection_id = mysqli_connect($host, $user, $password, $db_name);

if($connection_id){
    echo "Подключились к БД";
}