<?php


class Car
{
    public $color;
    public $kpp;
    public $fary;
    public $otdelka;
    public $brand;
    public static $kol;
    public static $name = " автомобиля";

    public function go()
    {
        echo "я еду";
    }

    public function __construct($c,$k,$f,$o,$b)
    {
        $this->color = $c;
        $this->kpp = $k;
        $this->fary = $f;
        $this->otdelka = $o;
        $this->brand = $b;
        echo "<br><br>";
        $this->aboutcar();
        static::$kol++;
    }



    public function aboutcar()
    {
        echo "Марка".static::$name.": ".$this->brand."<br>";
        echo "Цвет автомобиля: ".$this->color."<br>";
        echo "Коробка передач: ".$this->kpp."<br>";
        echo "Тип фар: ".$this->fary."<br>";
        echo "Отделка: ".$this->otdelka."<br>";

    }
}