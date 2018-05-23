<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPost(){
        if($posts = Post::all(['designer_id','public_time','content','img_url','like_num','unlike_num'])){
            self::response(0,$posts);
        }else{
            self::response(7,null);
        }
    }
}
