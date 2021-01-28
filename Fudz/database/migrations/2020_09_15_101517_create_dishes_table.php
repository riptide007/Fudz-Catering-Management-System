<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catering_id');
            $table->foreign('catering_id')->references('id')->on('catering');
            $table->string('Starters');
            $table->string('Accompaniments');
            $table->string('Proteins');
            $table->string('Dessert');
            $table->string('Beverage');
            $table->string('Snacks');
            $table->boolean('isActive')->default(true);
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
        Schema::table('dishes', function (Blueprint $table){
            $table->dropForeign('catering_id');
        });
        Schema::dropIfExists('dishes');

    }
}
