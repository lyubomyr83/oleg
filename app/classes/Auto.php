<?php
namespace app\classes;

class Auto
{
    public static $type = "<br>Автомобиль:";
    public static $col;
    public $speed;
    public $name;
    public $color;
    public $year;

    public function __construct($s,$n,$c,$y)
    {
        static::$col++;
        $this->speed = $s;
        $this->year = $y;
        $this->color = $c;
        $this->name = $n;

        $this->aboutCar();
    }

    public  function aboutCar()
    {
        echo static::$type;
        echo "<br>".$this->name."<br>";
        echo "скорость: ".$this->speed."<br>";
        echo "цвет: ".$this->color."<br>";
        echo "год выпуска: ".$this->year."<br>";
    }
}