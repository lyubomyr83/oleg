<?php
namespace app\classes;


class Factory
{
    private static $instances = array();

    public static function build($class_name)
    {
        if (!static::$instances[$class_name])
        {
            $full_name = "app\\classes\\".$class_name;
            static::$instances[$class_name]= new $full_name();
        }

        return static::$instances[$class_name];
    }
}