<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/14
 * Time: 18:40
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $user = DB::table('baidu_user')->Paginate(3);
        return view('jjp',['users'=>$user]);
    }
}