<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('info');
            $table->string('addr');
            $table->string('tel');
            $table->string('image');
            $table->string('piccode')->unique();//user_id
            $table->string('score');
            $table->string('hot');
            $table->string('type');
            $table->string('x');
            $table->string('y');
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
        Schema::drop('cloths');
    }
}
