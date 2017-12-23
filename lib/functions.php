<?php

function hello(){
    echo "hello";
}

function diskr($a, $b, $c){
    $d=$b*2-(4*$a*$c);
    echo $d;
}

function kosti(){
    $kost1 = rand(1,6);
    $kost2 = rand(1,6);


    echo "<div class=\"kosti_img\">";
        echo "<img src='img/ris$kost1.gif'>";
        echo "<img src='img/ris$kost2.gif'>";
    echo "</div>";

    $sum = $kost1+$kost2;

    echo "<div class=\"kosti_message\">Вам выпали числа на сумму ".$sum."</div>";
}

// реализация запроса к БД
function sql($connection,$query)
{
    $result = mysqli_query($connection, $query);

    // если запрос не удался, выдаем сообщение об ошибке
    if (!$result)
    {
        die ("Ошибка запроса к базе данных: ". mysqli_error());
    }
    return $result;
}

// вывод информации с БД

function info_from_db($connection_id, $what,$id=NULL)
{
    // формируем меню
    if($what == "menu"){

        $query = "SELECT * FROM pages";

        $res = sql($connection_id,$query);


        while ($page = mysqli_fetch_assoc($res))
        {
            $pages[]=$page;

        }
        // виводим элементы меню
        echo "<ul>";
        foreach ($pages as $value){
            echo "<li role=\"presentation\" class=\"active\"><a href='?page=".$value['id']."'><span class=\"".$value['menu_icon']."\" aria-hidden=\"true\"></span>".$value['menu_name']."</a></li>";
        }
        echo "</ul>";
    }
    // страница
    elseif ($what == "page"){
        $query = "SELECT * FROM pages WHERE id=".$id;
        $res = sql($connection_id,$query);
        $page = mysqli_fetch_assoc($res);
        return $page;
    }

}