

<form method = "post">
    <table>
        <tr>
            <td>ваше имя</td>
            <td><input type="text" name = "imja"></td>
        </tr>
        <tr>
            <td>ваша фамилия</td>
            <td><input type="text" name="surname"></td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td><input type="text" name="Пароль"></td>
        </tr>
        <tr>
            <td>Пароль2</td>
            <td><input type="text" name="Пароль2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="войти"></td>
        </tr>

    </table>
</form>

<?php

$name = $_POST["imja"];
$surname = $_POST["surname"];
$Пароль = $_POST["Пароль"];
$Пароль2 = $_POST["Пароль2"];

if ($name == "Олег" && $surname == "Назаренко" && $Пароль == 567894321 && $Пароль2 == 987651234)
{
   require_once "DNEVNIK.php";
}
else
{
echo "Вы не зарегистрированы <br>";
}
?>

<a href="index.php">назад</a>
