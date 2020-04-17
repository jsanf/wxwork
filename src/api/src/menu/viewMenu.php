<?php
/**
 * author : abel.tang
 * Date: 2019-09-03  10:05
 */

namespace wxwork\api\src\menu;


use wxwork\utils\Utils;

class viewMenu
{
    public $type = "view";
    public $name = null; // string
    public $url = null; // string

    public function __construct($name = null, $url = null)
    {
        $this->name = $name;
        $this->url = $url;
    }

    public static function Array2Menu($arr)
    {
        $menu = new viewMenu();

        $menu->type = "view";
        $menu->name = Utils::arrayGet($arr, "name");
        $menu->url = Utils::arrayGet($arr, "url");

        return $menu;
    }
}