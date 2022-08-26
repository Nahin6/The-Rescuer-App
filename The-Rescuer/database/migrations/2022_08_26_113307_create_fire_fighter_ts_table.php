<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_fighter_ts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('FireStationName');
            $table->string('email')->unique();
            $table->string('ContactNumber')->unique();
            $table->string('Address');
            $table->string('Department');
            $table->string('Position');
            $table->string('DOB');
            $table->string('gender');
            $table->string('FireStationID');
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
        Schema::dropIfExists('fire_fighter_ts');
    }
};
