<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/7
 * Time: 20:28
 */

namespace App\Baidu;


interface GetUrl
{
    public function getUrl($uk,$type,$limit,$start);
}