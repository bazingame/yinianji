<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->comment('帖子id');
            $table->integer('designer_id')->comment('设计师id');
            $table->string('content')->comment('内容');
            $table->dateTime('reply_time')->comment('回复时间');
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
        Schema::dropIfExists('post_reply');
    }
}
