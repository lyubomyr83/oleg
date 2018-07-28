<?php
namespace app\classes;

class Bus extends Auto
{
    public static $type = "<br>Автобус:";
    public static $col;
    public $seats;

    public function __construct($s, $n, $c, $y, $st)
    {
        $this->seats = $st;
        parent::__construct($s, $n, $c, $y);
    }

    public function aboutCar()
    {
        parent::aboutCar();
        echo "кол-во мест: ".$this->seats;
    }
}