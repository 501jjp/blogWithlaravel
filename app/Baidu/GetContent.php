<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/7
 * Time: 20:30
 * 根据返回的输入的链接获取用户信息
 */

namespace App\Baidu;
use App\Baidu\GetUrl;

class GetContent
{
    public function get($arr)
    {
        $header = [
            'Accept:application/json, text/javascript, */*; q=0.01',
            'Content-Type: text/html;charset:UTF-8;',
            'Connection:keep-alive',
            'Host:pan.baidu.com',
            "Referer:$arr[1]",
            'Upgrade-Insecure-Requests:1',
            'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_URL,$arr[0]);//抓取指定网页
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置heade
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        return $data;
    }
}
