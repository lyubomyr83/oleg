<?php
require_once "config/ini.php";
$car1 = new app\classes\Auto(180,"BMW","black",2005);
$car2 = new app\classes\Bus(160,"КАМАЗ","yelow",2010,60);
$car3 = new app\classes\Truck(140,"КАМАЗ","white",2014,"20т");

echo "<br><br>Количество автомобилей: ".\app\classes\Auto::$col;
echo "<br>Количество автобусов: ".\app\classes\Bus::$col;
echo "<br>Количество грузовиков: ".\app\classes\Truck::$col;