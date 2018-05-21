<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_assessment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id')->comment('作品id');
            $table->integer('user_id')->comment('用户id');
            $table->string('content')->comment('内容');
            $table->dateTime('time')->comment('时间');
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
        Schema::dropIfExists('work_assessment');
    }
}
