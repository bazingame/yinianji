<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post_Reply extends Model
{
    protected $table = 'post_reply'; // 指定表
    public $timestamps = false;  // 是否自动维护时间戳
}
