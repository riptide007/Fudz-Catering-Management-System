<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('workdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catering_id');
            $table->foreign('catering_id')->references('id')->on('catering');
            $table->string('ProductionLead');
            $table->multiLineString('ProductionTeam');
            $table->string('ServiceLead');
            $table->multiLineString('ServiceTeam');
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
        Schema::dropIfExists('workdetail');
        Schema::table('workdetail', function (Blueprint $table){
            $table->dropForeign('catering_id');
        });
    }
}
