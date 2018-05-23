<?php

namespace App\Http\Controllers;

use App\Model\Service;
use App\Model\Service_Detail;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::all(['id','name']);
        self::response(0,$service);
    }
    public function detailAll(){
        $service_detail = Service_Detail::all('id','service_id','name');
        self::response(0,$service_detail);
    }
    public function detail(Request $request){
        $id =$request->route('id');
        if($service = Service_Detail::where('service_id',$id)->get(['id','service_id','name'])){
            self::response(0,$service);
        }else{
            self::response(1,null);
        }
    }
}


