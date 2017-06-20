<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/24
 * Time: 16:12
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class ArticleContentController extends Controller
{
    public function show(Request $request)
    {
        $ars = DB::table('article')->orderBy("created_at","desc")->simplePaginate(7);
        $type = DB::table('article')->select(DB::raw('count(*) as counts, type'))->groupBy('type')->get();
        echo "sdfsdlf";
        return view("jjp",["pas"=>$ars,"type"=>$type]);
    }
}