<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function response($code,$data){
    echo json_encode(array('code'=>$code,'msg'=>self::setCode($code),'data'=>$data),JSON_UNESCAPED_UNICODE);
    }

    public static function setCode($errCode){
        $codeArr = array(
            '0'=>'Success',
            '1'=>'Get service detail fail',
            '2'=>'Get designer detail fail',
            '3'=>'Invalid order',
            '4'=>'Get work detail fail',
            '5'=>'Get demand detail fail',
            '6'=>'Get user detail fail',
            '7'=>'Get post detail fail',
        );
        return $codeArr[$errCode];
    }
}
