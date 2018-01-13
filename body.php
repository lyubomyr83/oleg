<?php echo $page['content'];

require_once "classes/Car.php";
$mycar = new Car("Жёлтый","Автоматическая", "неоновые", "кожаный", "Рено");
$myfriendcar = new Car("Красный","Механическая", "обычные", "тканный", "BMW");



?>

