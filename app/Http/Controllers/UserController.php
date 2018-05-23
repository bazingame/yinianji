<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser(){
        if($users = User::all(['id','username','sex','email','phone','qq','birthday','introduction'])){
            self::response(0,$users);
        }else{
            self::response(6,null);
        }
    }

    public function getUserById(Request $request){
        $id = $request->route('id');
        if($user = User::where('id','=',$id)->get(['id','username','sex','email','phone','qq','birthday','introduction'])){
            self::response(0,$user);
        }else{
            self::response(6,null);
        }
    }

}
