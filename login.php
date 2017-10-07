

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
            <td>ваш возраст</td>
            <td><input type="text" name="age"></td>
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
$age = $_POST["age"];

if ($name == "Олег" && $surname == "Назаренко" && $age == 11)
{
   require_once "dannye.php";
}
else
{
echo "Вы зарегистрированы <br>";
}
?>

<a href ="index.php">назад</a>
