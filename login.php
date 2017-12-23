<form class="form-horizontal login" method="post">

    <div class="form-group">
        <input type="text" class="form-control" name = "login" placeholder="Логин">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name = "pass" placeholder="Логин">
    </div>
    <button type="submit" class="btn btn-default">Войти</button>

</form>

<?php

$login = $_POST["login"];
$password = $_POST["pass"];

$valid_login = "Олег";
$valid_password = 567894321;

if ($login == $valid_login && $password == $valid_password)
{
    $_SESSION['login']=1;
    $_SESSION['pass']=1;

    echo "Вход выполнен успешно";
    header('Refresh: 5; URL=index.php');
}