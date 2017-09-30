    <form method = "post">
    <table>
<tr><td>ваше имя</td><td><input type="text" name = "imja"></td></tr><br>
    <tr><td>ваша фамилия</td><td><input type="text" name="surname"></td></tr><br>
    <tr><td>ваш возраст</td><td><input type="text" name="age"></td></tr><br>
    <input type="submit" value="войти">
    </table>
</form>
    <?php
    $_POST["imja"];
    $_POST["surname"];
    $_POST["age"];
    ?>
<?php

$name = "олег";
$surname = "назаренко";
$age = 11;

if ($name == "олег"&&$surname == "назаренко"&&$age == 11)
{
    echo "добро пожаловать КОРОЛЬ";
}
else
{
echo "вы раб КОРОЛЯ Олега";
}
?>