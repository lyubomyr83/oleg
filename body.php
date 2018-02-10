<?php echo $page['content'];

$mycar = new Car("Жёлтый","Автоматическая", "неоновые", "кожаный", "Рено");
echo "У нас фары: ".$mycar->fary;
$mycar->go();
$myfriendcar = new Truck("Красный","Механическая", "обычные", "тканный", "BMW",5);
$myfriendcar1 = new Truck("Красный","Механическая", "обычные", "тканный", "MAN",8);
$schoolbus = new Bus("Белый", "Механическая", "обычные", "тканный","Scania", 60);

echo   "<br>Количество автомобилей: ".Car::$kol;
echo   "<br>Количество грузовиков: ".Truck::$kol;
echo   "<br>Количество автобусов: ".Bus::$kol;

$fruit1 = new Fruits(4, "яблоки", 70);
$veg1 = new Vegetables(6, "картошка", 30);
?>

