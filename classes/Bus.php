<?php


class Bus extends Car
{
    public $seats;
    public static $name = " автобуса";

    public function __construct($c, $k, $f, $o, $b, $s)
    {
        $this->seats = $s;
        parent::__construct($c, $k, $f, $o, $b);
        echo "Количество мест: ".$this->seats;
    }
}