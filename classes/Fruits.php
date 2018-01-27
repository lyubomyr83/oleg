<?php

class Fruits
{
    public $col;
    public $name;
    public $price;
    public static $what ="Фрукты";

    public function __construct($c, $n, $p)
    {
       $this->col = $c;
       $this->name = $n;
       $this->price = $p;

       $this->about();
    }

    public function about()
    {
        $sum = $this->price * $this->col;
        echo " <br>".static::$what.": ".$this->name." ".$this->col." кг. на сумму ".$sum." рублей";
    }
}