<?php
session_start();

$page_name = "Игра в кости";
require_once "header.php";
require_once "body.php";

kosti();
require_once "footer.php";