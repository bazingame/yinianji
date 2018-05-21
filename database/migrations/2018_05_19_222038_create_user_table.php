<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('用户名');
            $table->string('sex')->comment('性别');
            $table->string('email')->comment('邮箱');
            $table->string('phone')->comment('手机');
            $table->string('qq')->comment('');
            $table->date('birthday')->commentQQ('生日');
            $table->string('introduction')->comment('简介');
            $table->string('password')->comment('密码');
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
        Schema::dropIfExists('user');
    }
}
