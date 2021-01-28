<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('catering', function (Blueprint $table) {
           $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client');
            $table->string('Event_type');
            $table->string('Location');
            $table->integer('GuestNo');
            $table->string('Location_Details');

            $table->Date('Date');
            $table->Time('Time');
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
        Schema::dropIfExists('catering');
        Schema::table('catering', function (Blueprint $table){
            $table->dropForeign('client_id');
        });
    }
}
