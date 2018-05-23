<?php

namespace App\Http\Controllers;

use App\Model\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function getDesigner(Request $request){
        $id = $request->route('id');
        if($designer = Designer::where('id','=',$id)->get(['id','username','sex','email','phone','qq','birthday','introduction','location_privince','location_city','location_area','location_detail','school_name','province_id','work_num','fans_num','head_img','tag','assessment'])){
            self::response(0,$designer);
        }else{
            self::response(2,null);
        }
    }

    public function getAllDesigner(Request $request){
        if($designers = Designer::all(['id','username','sex','email','phone','qq','birthday','introduction','location_privince','location_city','location_area','location_detail','school_name','province_id','work_num','fans_num','head_img','tag','assessment'])){
            self::response(0,$designers);
        }else{
            self::response(2,null);
        }

    }

    public function getDesignerByProvince(Request $request){
        $province_id = $request->route('province_id');
        if($designers = Designer::where('province_id','=',$province_id)->get(['id','username','sex','email','phone','qq','birthday','introduction','location_privince','location_city','location_area','location_detail','school_name','province_id','work_num','fans_num','head_img','tag','assessment'])){
            self::response(0,$designers);
        }else{
            self::response(2,null);
        }
    }

    public function getDesignerByTag(Request $request){
        $tag = $request->route('tag');
        if($designers = Designer::where('tag','like','%'.$tag.'%')->get(['id','username','sex','email','phone','qq','birthday','introduction','location_privince','location_city','location_area','location_detail','school_name','province_id','work_num','fans_num','head_img','tag','assessment'])){
            self::response(0,$designers);
        }else{
            self::response(2,null);
        }
    }

}
