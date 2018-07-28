<?php
namespace app\classes;
class Truck extends Auto
{
    public static $type = "<br>Грузовик:";
    public static $col;
    public $cargo;

    public function __construct($s, $n, $c, $y, $cg)
    {
        $this->cargo = $cg;
        parent::__construct($s, $n, $c, $y);
    }

    public function aboutCar()
    {
        parent::aboutCar();
        echo "грузоподъёмность: ".$this->cargo;
    }
}