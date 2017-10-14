<form method = "post">
    <table>
        <tr>
            <td>Логин</td>
            <td><input type="text" name = "login"></td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Войти"></td>
        </tr>

    </table>
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