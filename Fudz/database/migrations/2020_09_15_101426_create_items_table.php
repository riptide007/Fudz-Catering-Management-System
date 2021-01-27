<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('items', function (Blueprint $table) {
           $table->id();

            $table->string('Name');
            $table->integer('quantity');
            $table->integer('priceperunit');
            $table->string('unit');
            $table->unsignedBigInteger('supplier_id');

            $table->string('ItemCondition');
            $table->foreign('supplier_id')->references('id')->on('supplier');

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
        Schema::dropIfExists('items');
        Schema::table('items', function (Blueprint $table){
            $table->dropForeign('supplier_id');
        });
    }
}
