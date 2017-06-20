<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/26
 * Time: 15:59
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('ad_ck')->only('show');
    }

    public function show(Request $request)
    {
        //$tips = DB::table("article")->select('articletitle', 'symble')->get();
        $tips = DB::table("article")->select('articletitle', 'symble','created_at')->orderBy('created_at', 'desc')->paginate(50);
        return view('admin',["tips"=>$tips]);
    }
}