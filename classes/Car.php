<?php


class Car
{
    public $color;
    public $kpp;
    public $fary;
    public $otdelka;
    public $brand;

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

    }



    public function aboutcar()
    {
        echo "Марка автомобиля: ".$this->brand."<br>";
        echo "Цвет автомобиля: ".$this->color."<br>";
        echo "Коробка передач: ".$this->kpp."<br>";
        echo "Тип фар: ".$this->fary."<br>";
        echo "Отделка: ".$this->otdelka."<br>";

    }
}