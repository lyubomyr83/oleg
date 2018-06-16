<?php
namespace app\classes;


abstract class AHome
{
    abstract public function getInfo3($id);
    public function getInfo4($id)
    {
        return "Реализация обычного метода абстрактного класса ".$id;
    }
}