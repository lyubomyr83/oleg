<?php
namespace app\classes;


class CHome implements Myi, Myi2
{
    public function getInfo($id)
    {
        return "Реализация метода getInfo ".$id;
    }

    public function getInfo2($id)
    {
        return "Реализация метода getInfo2 ".$id;
    }
}