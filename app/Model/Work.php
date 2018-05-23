<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'work'; // 指定表
    public $timestamps = false;  // 是否自动维护时间戳
}
