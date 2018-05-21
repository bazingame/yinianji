<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('用户名');
            $table->string('sex')->comment('性别');
            $table->string('email')->comment('邮箱');
            $table->string('phone')->comment('手机');
            $table->string('qq')->comment('');
            $table->date('birthday')->commentQQ('生日');
            $table->string('introduction')->comment('简介');
            $table->string('location_privince')->comment('省份');
            $table->string('location_city')->comment('地级');
            $table->string('location_area')->comment('县级');
            $table->string('location_detail')->comment('详细地址');
            $table->string('school_name')->comment('学校名称');
            $table->integer('province_id')->comment('省份id');
            $table->string('password')->comment('密码');
            $table->integer('work_num')->comment('作品数量');
            $table->integer('fans_num')->comment('粉丝数量');
            $table->string('head_img')->comment('头像地址');
            $table->string('tag')->comment('标签');
            $table->string('assessment')->comment('评价');
            $table->timestamps();
            $table->index('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designer');
    }
}
