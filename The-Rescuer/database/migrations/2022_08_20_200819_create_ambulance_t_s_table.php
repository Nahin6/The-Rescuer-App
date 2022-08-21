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
        Schema::create('ambulance_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('AmbulanceRegNo')->unique();
            $table->string('DriverName');
            $table->string('DriverNumber')->unique();;
            $table->string('HospitalName');
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
        Schema::dropIfExists('ambulance_t_s');
    }
};
