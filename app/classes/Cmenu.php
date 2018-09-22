<?php
namespace app\classes;

class Cmenu extends Mmenu
{
    public function getMenu()
    {
        $result = $this->prepareMenu();

        while ($row = $result->fetch())
        {
            $menu[] = $row;
        }

        return $menu;
    }
}