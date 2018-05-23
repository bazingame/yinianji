<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('需求名称');
            $table->string('time')->comment('周期');
            $table->string('money')->comment('赏金');
            $table->integer('service_id')->comment('服务大类id');
            $table->string('service')->comment('服务大类');
            $table->integer('service_detail_id')->comment('服务项目id');
            $table->string('service_detail')->comment('服务项目');
            $table->string('description')->comment('描述');
            $table->string('status')->comment('状态');
            $table->date('public_time')->comment('发布时间');
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
        Schema::dropIfExists('demand');
    }
}
