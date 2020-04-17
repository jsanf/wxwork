<?php
/**
 * author : abel.tang
 * Date: 2019-09-03  9:56
 */

namespace wxwork\api\src;

use wxwork\api\src\user\User;
use wxwork\utils\Utils;

class UserDetailByUserTicket
{
    public $userid = null; // string
    public $name = null; // string
    public $department = null; // uint array
    public $position = null; // string
    public $mobile = null; // string, 成员手机号，仅在用户同意snsapi_privateinfo授权时返回
    public $gender = null; // uint, 性别。0表示未定义，1表示男性，2表示女性
    public $email = null; // string
    public $avatar = null; // string, 头像url。注：如果要获取小图将url最后的”/0”改成”/100”即可

    static public function Array2UserDetailByUserTicket($arr)
    {
        $info = new User();

        $info->userid = Utils::arrayGet($arr, "userid");
        $info->name = Utils::arrayGet($arr, "name");
        $info->department = Utils::arrayGet($arr, "department");
        $info->position = Utils::arrayGet($arr, "position");
        $info->mobile = Utils::arrayGet($arr, "mobile");
        $info->gender = Utils::arrayGet($arr, "gender");
        $info->email = Utils::arrayGet($arr, "email");
        $info->avatar = Utils::arrayGet($arr, "avatar");
        $info->qr_code = Utils::arrayGet($arr, "qr_code");

        return $info;
    }
}