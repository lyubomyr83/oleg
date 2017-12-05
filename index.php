<?php
session_start();

$page_name = "Главная";
require_once "header.php";

$query = "SELECT * FROM pages";

$res = sql($connection_id,$query);

$pages = mysqli_fetch_assoc($res);

var_export($pages);


require_once "footer.php";