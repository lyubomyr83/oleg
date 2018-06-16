<?php
namespace app\classes;


class Cclass extends AHome implements ia, uchitel
{
    public function getInfo($id)
    {
        return "Реализация интерфейса Я ".$id;
    }
    public function getInfo2($id)
    {
       return "Реализация интерфейса Учитель ".$id;
    }

    public function getInfo3($id)
    {
        return "Реализация абстрактного метода ".$id;
    }
}