<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignerAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer_assessment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('designer_id')->comment('设计师id');
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
        Schema::dropIfExists('designer_assessment');
    }
}
