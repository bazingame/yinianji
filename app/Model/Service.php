<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service'; // 指定表
    public $timestamps = false;  // 是否自动维护时间戳
}
