<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/8
 * Time: 18:13
 * 根据输入获取要访问的用户资源链接
 * 返回链接和来源链接
 */

namespace App\Baidu;
use App\Baidu\GetUrl;

class GetJsonUrl implements GetUrl
{
    public function getUrl($uk,$type,$limit,$start)
    {
        $url = "";
        $Referer = "";
        $mtime = explode(' ',microtime());

        /*获取时间*/
        $startTime = $mtime[1].ceil($mtime[0]*1000);
        if(strlen($startTime)<13){
            while(strlen($startTime)<13){
                $startTime = $startTime."0";
            }
        }
        if(strlen($startTime)>13){
            $startTime = substr($startTime,0,13);
        }


        switch ($type){
            case 'fans':$url = "https://pan.baidu.com/pcloud/friend/getfanslist?query_uk=$uk&limit=$limit&start=$start";
                        $Referer = "https://pan.baidu.com/pcloud/friendpage?type=fans&uk=$uk&self=0";
                        return [$url,$Referer];
                        break;
            case 'follow':$url = "https://pan.baidu.com/pcloud/friend/getfollowlist?query_uk=$uk&limit=$limit&start=$start";
                          $Referer = "https://pan.baidu.com/pcloud/friendpage?type=follow&uk=$uk&self=0";
                          return [$url,$Referer];
                          break;
            case 'Resources':$url = "https://pan.baidu.com/pcloud/feed/getsharelist?t=$startTime&category=0&auth_type=1&request_location=share_home&start=$start&limit=$limit&query_uk=$uk";
                             $Referer = "https://pan.baidu.com/share/home?uk=$uk&view=share";
                             return [$url,$Referer];
                             break;
            default:return [];
            break;
        }
    }
}