<?php
namespace app\classes;


class Mlogin
{
    public function checkUserLogin($user)
    {
        $sql = "SELECT password, name FROM users WHERE login='{$user['login']}'";
        return $res = Db::getInstance()->read($sql);
    }
}