<?php
namespace app\classes;


class Mlogin
{
    public function checkUserLogin($user)
    {
        $sql = "SELECT name FROM users WHERE login='{$user['login']}' AND password='{$user['password']}'";
        return $res = Db::getInstance()->read($sql);
    }
}