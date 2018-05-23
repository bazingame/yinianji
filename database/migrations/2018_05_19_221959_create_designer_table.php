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
            $table->string('sex')->comment('性别')->nullable();
            $table->string('email')->comment('邮箱')->nullable();
            $table->string('phone')->comment('手机')->nullable();
            $table->string('qq')->comment('')->nullable();
            $table->date('birthday')->commentQQ('生日')->nullable();
            $table->string('introduction')->comment('简介')->nullable();
            $table->string('location_privince')->comment('省份')->nullable();
            $table->string('location_city')->comment('地级')->nullable();
            $table->string('location_area')->comment('县级')->nullable();
            $table->string('location_detail')->comment('详细地址')->nullable();
            $table->string('school_name')->comment('学校名称')->nullable();
            $table->integer('province_id')->comment('省份id')->nullable();
            $table->string('password')->comment('密码')->nullable();
            $table->integer('work_num')->comment('作品数量')->nullable();
            $table->integer('fans_num')->comment('粉丝数量')->nullable();
            $table->string('head_img')->comment('头像地址')->nullable();
            $table->string('tag')->comment('标签')->nullable();
            $table->string('assessment')->comment('评价')->nullable();
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
