<?php
$stelazh = array(100=>"бананы",200=>"апельсины",1000=>"яблоки");
//echo $stelazh[1000]."<br>";

$fridge['фрукты']['груши']=5;
$fridge['фрукты']['яблоки']=10;
$fridge['овощи']['картошка']=8;
$fridge['овощи']['морковка']=1;
$fridge['консервы']=5;

echo "<PRE>";
//var_export($fridge);
echo "</PRE>";

foreach ($fridge as $key=>$value){
    if(is_array($value)){
        foreach ($value as $key1=>$value1)
        {
            echo $key1."<br>";
        }
    }
    else{
        echo $key."<br>";
    }

}