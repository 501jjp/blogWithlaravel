<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/6/5
 * Time: 20:12
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminLoginController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->input('name');
        $email =$request->input('email');
        $password = md5($request->input('password').'jjpsdfdfdsee');
        $an = DB::table('users')->where(['name'=>$name,'email'=>$email,'password'=>$password])->first();
        if($an!=null){
            return redirect()->route('log');
        }else{
            $re = resolve('Getsignature');
            $time = time();
            $value = $re->creat($name,$time);
            return redirect()->route('adminC')->cookie('values',$time.",".$name.",".$value,24*60*60);
        }
    }
}