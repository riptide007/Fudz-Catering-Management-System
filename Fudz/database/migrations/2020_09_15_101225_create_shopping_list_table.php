<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('shopping_list', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('catering_id');
           $table->unsignedBigInteger('item_id');
            $table->string('Productname');
            $table->string('Quantity');
            $table->string('PurchaseLocation');
            $table->string('CostperUnit');

            $table->string('Unit');
           $table->foreign('catering_id')->references('id')->on('catering');
            $table->foreign('item_id')->references('id')->on('items');
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
        Schema::dropIfExists('shopping_list');
        Schema::table('shopping_list', function (Blueprint $table){
            $table->dropForeign('catering_id');
            $table->dropForeign('item_id');

        });
    }
}
