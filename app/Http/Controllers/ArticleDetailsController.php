<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/26
 * Time: 14:57
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use cebe\markdown\GithubMarkdown;


class ArticleDetailsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('ad_ck')->except('show');
    }

    public function show($symble)
    {
        $g = DB::table('article')->select('articlecontent')->where('symble',$symble)->first();
        $str =$g->articlecontent;
        $parser = new GithubMarkdown();
        $test = $parser->parse($str);
        return view('articleDetails',["test"=>$test]);
    }

    public function delate($symble)
    {
        DB::table('users')->where('symble', $symble)->delete();
        //echo $symble;
    }

    public function update($symble)
    {

    }
}