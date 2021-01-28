<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('Surname');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('Telephone');
            $table->string('email')->unique();
            $table->string('Address');
            $table->string('Speciality');
            $table->string('Average_Pay');
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
        Schema::dropIfExists('employee');
    }
}
