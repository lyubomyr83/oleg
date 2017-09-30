<?php
require_once "header.php";
?>
<table cellspacing="1"></table>
<form method="post">
    <table>
        <tr><td>Количество строчек</td><td><input type="text" name="tr"></td></tr>
        <tr><td>Количество столбиков</td><td><input type="text" name="td"></td></tr>
        <tr><td><input type="submit" value="Нарисовать таблицу"></td></tr>
    </table>
</form>
<table>
<?php
$tr = $_POST['tr'];
$td = $_POST['td'];

for($i=1;$i<=$tr;$i++)
{
    echo "<tr>";
    if($i == 1)
    {
        for($k=1;$k<=$td;$k++)
        {
            if($k == 1)
            {
                echo "<td class='first_line'></td>";
            }
            else
            {
                echo "<td class='first_line'>".$k."</td>";
            }
        }
    }
    else
    {
        for($k=1;$k<=$td;$k++)
        {
            if($k == 1)
            {
                echo "<td class='first_line'>".$k*$i."</td>";
            }
            else
            {
                echo "<td class='other_lines'>".$k*$i."</td>";
            }
        }
    }

    echo "</tr>";
}

?>
</table>
<?php
require_once "footer.php";
?>

