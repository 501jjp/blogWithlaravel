<?php
/**
 * Created by PhpStorm.
 * User: jjp
 * Date: 2017/5/26
 * Time: 16:27
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Moontoast\Math\BigNumber;
class DealFilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('ad_ck')->only('show');
    }

    public function show(Request $request)
    {
        $title = $request->input('title');
        $article = $request->input('article');
        $type = $request->input('type');
        $uuid = Uuid::uuid1();
        var_dump($uuid);
        DB::table("article")->insert(['created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),'articletitle'=>$title,'articlecontent'=>$article,'type'=>$type,'symble'=>$uuid]);
        return redirect()->route('adminC');
    }
}