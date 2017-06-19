<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShotUrlController extends Controller
{
    public function show(Request $request)
    {
        $url = resolve('GetJsonUrl');
        $arr = $url->geturl('1112219283','Resources',60,0);
        $content = resolve('GetContent');
        $cont = $content->get($arr);
        $cont = json_decode($cont,true);
        var_dump($cont);
    }
}
