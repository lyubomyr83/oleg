<?php echo $page['content'];

require_once "classes/Car.php";
require_once "classes/Truck.php";
require_once "classes/Bus.php";
$mycar = new Car("Жёлтый","Автоматическая", "неоновые", "кожаный", "Рено");
$myfriendcar = new Truck("Красный","Механическая", "обычные", "тканный", "BMW",5);
$schoolbus = new Bus("Белый", "Механическая", "обычные", "тканный","Scania", 60);


?>

