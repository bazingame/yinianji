<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designer_id')->comment('设计者id');
            $table->string('images')->comment('图片地址');
            $table->string('name')->comment('作品名称');
            $table->integer('views')->comment('浏览量');
            $table->integer('like')->comment('点赞数量');
            $table->string('description')->comment('描述');
            $table->string('demand_id')->comment('需求id');
            $table->string('time')->comment('周期/day');
            $table->integer('service_id')->comment('服务大类id');
            $table->string('service')->comment('服务大类');
            $table->string('service_detail')->comment('服务项目');
            $table->integer('service_detail_id')->comment('服务项目id');
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
        Schema::dropIfExists('work');
    }
}
