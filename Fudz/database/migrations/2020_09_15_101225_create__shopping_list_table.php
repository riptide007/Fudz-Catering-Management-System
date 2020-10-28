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
        Schema::create('_shopping_list', function (Blueprint $table) {
            $table->id();
            $table->string('Productname');
            $table->string('Quantity');
            $table->string('PurchaseLocation');
            $table->string('CostperUnit');
         
            $table->string('Unit');
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
        Schema::dropIfExists('_shopping_list');
    }
}
