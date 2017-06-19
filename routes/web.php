<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \Illuminate\Http\Request;


Route::get('/',['as'=>'root','uses'=>'ArticleContentController@show']);

Route::get('article-details/{symble}','ArticleDetailsController@show');

Route::get('article-details/delate/{symble}',['as'=>'delate_a','uses'=>'ArticleDetailsController@delate']);

Route::post('article-details/update/{symble}',['as'=>'update_a','uses'=>'ArticleDetailsController@update']);

Route::get('jjp/admin',['as'=>'adminC','uses'=>'AdminController@show']);

Route::post('jjp/dealfiles','DealFilesController@show');

Route::get('jjp/log',['as'=>'log',function (Request $request){
   return view('login');
}]);

Route::post('jjp/login',['as'=>'login','uses'=>'AdminLoginController@show']);


Route::get('shoturl','ShotUrlController@show');




