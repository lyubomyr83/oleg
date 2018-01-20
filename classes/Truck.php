<?php


class Truck extends Car
{
   public $gruzpool;
   public static $name = " грузовика";

   public function __construct($c, $k, $f, $o, $b, $g)
   {
       $this->gruzpool = $g;
       parent::__construct($c, $k, $f, $o, $b);
       echo "Грузоподъемность: ".$this->gruzpool." тонн.";

   }
}