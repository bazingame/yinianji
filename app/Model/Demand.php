<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $table = 'demand'; // 指定表
    public $timestamps = false;  // 是否自动维护时间戳
}
