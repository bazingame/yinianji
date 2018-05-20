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
            $table->string('username')->comment();
            $table->string('sex')->comment();
            $table->string('email')->comment();
            $table->string('phone')->comment();
            $table->string('qq')->comment();
            $table->string('birthday')->comment();
            $table->string('introduction')->comment();
            $table->string('location_privince')->comment();
            $table->string('location_city')->comment();
            $table->string('location_area')->comment();
            $table->string('location_detail')->comment();
            $table->string('')->comment();
            $table->string('')->comment();
            $table->string('')->comment();
            $table->string('')->comment();
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
        Schema::dropIfExists('designer');
    }
}
