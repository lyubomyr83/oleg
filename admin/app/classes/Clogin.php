<?php
namespace app\classes;


class Clogin extends Mlogin
{
    public function checkLogin($user)
    {
        $result = ($this->checkUserLogin($user));
        $loged = $result->fetch();
        $_SESSION['loged'] = $loged['name'];

    }
}