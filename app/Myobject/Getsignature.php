<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/6/5
 * Time: 21:36
 */

namespace App\Myobject;


class Getsignature
{

    public function creat($value,$time)
    {
            $key = "jjp".$time."jjp";
            return md5($value.$key);
    }
}