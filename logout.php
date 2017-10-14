<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['pass']);

header('Refresh: 0; URL=index.php');

exit;