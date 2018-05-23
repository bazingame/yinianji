<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user'; // 指定表
    public $timestamps = false;  // 是否自动维护时间戳
}
