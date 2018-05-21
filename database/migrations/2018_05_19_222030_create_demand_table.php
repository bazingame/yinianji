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
            $table->string('type')->comment('类型');
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
