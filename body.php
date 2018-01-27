<?php echo $page['content'];

require_once "classes/Car.php";
require_once "classes/Truck.php";
require_once "classes/Bus.php";
require_once "classes/Fruits.php";
require_once "classes/Vegetables.php";
$mycar = new Car("Жёлтый","Автоматическая", "неоновые", "кожаный", "Рено");
$mycar->go();
$myfriendcar = new Truck("Красный","Механическая", "обычные", "тканный", "BMW",5);
$schoolbus = new Bus("Белый", "Механическая", "обычные", "тканный","Scania", 60);

$fruit1 = new Fruits(4, "яблоки", 70);
$veg1 = new Vegetables(6, "картошка", 30);
?>

