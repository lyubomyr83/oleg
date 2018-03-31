<?php

// Таблица Пифагора
function pifagor($tr,$td){
    echo "<table>";

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
    echo "</table>";
}