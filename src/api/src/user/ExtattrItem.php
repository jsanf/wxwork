<?php
/**
 * author : abel.tang
 * Date: 2019-09-03  10:51
 */

namespace wxwork\api\src\user;


class ExtattrItem
{
    public $name = null;
    public $value = null;

    public function __construct($name = null, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }
}