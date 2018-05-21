<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designer_id')->comment('设计师id');
            $table->dateTime('public_time')->comment('发布时间');
            $table->string('content')->comment('内容');
            $table->string('img_url')->comment('图片地址');
            $table->integer('like_num')->comment('点赞数量');
            $table->integer('unlick_num')->comment('踩数量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
