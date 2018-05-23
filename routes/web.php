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


Route::get('/', function () {
    return view('welcome');
});

//服务相关
Route::group(['prefix'=>'service'],function (){
    //所有大类服务
    Route::get('/','ServiceController@index');
    //所有小类服务
    Route::get('/all','ServiceController@detailAll');
    //按大类编号获取小类服务
    Route::get('/{id}','ServiceController@detail');
});


//设计师相关
Route::group(['prefix'=>'designer'],function (){
    //获取所有设计师
    Route::get('/all','DesignerController@getAllDesigner');
    //按照id获取设计师详细信息
    Route::get('/{id}','DesignerController@getDesigner');
    //按照省份获取设计师信息
    Route::get('/province/{province_id}','DesignerController@getDesignerByProvince');
    //按照专业定位获取设计师信息
    Route::get('/tag/{tag}','DesignerController@getDesignerByTag');

});


//作品相关
Route::group(['prefix'=>'work'],function (){
    //获取所有作品
    Route::get('/all/time','WorkController@getAllWork');
    //按设计师获取作品
    Route::get('/designer/{id}','WorkController@getWorkByDesignerId');
    //按大类型获取作品
    Route::get('/service/{id}','WorkController@getWorkByServiceId');
    //按小类型获取作品
    Route::get('/service-detail/{id}','WorkController@getWorkByServiceDetailId');
    //搜索作品
    Route::get('/search/{param}','WorkController@getWorkBySearch');
    //获取某一作品
    Route::get('/{id}','WorkController@getWorkById');
    //获取作品评论
    Route::get('/reply/{id}','WorkController@getReply');

});

//需求相关
Route::group(['prefix'=>'demand'],function (){
    //获取所有需求
    Route::get('/all/time','DemandController@getAllDemand');
    //按大类型获取需求
    Route::get('/service/{id}','DemandController@getDemandByServiceId');
    //按小类型获取需求
    Route::get('/service-detail/{id}','DemandController@getDemandByServiceDetailId');
    //搜索需求
    Route::get('/search/{param}','DemandController@getDemandBySearch');
    //获取某一需求
    Route::get('/{id}','DemandController@getDemandById');
    //按进度获取需求
    Route::get('/status/{status}','DemandController@getDemandByStatus');
});


