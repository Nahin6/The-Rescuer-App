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
        Schema::create('doctor_responce_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('MedicineName');
            $table->string('AddtionalMedicine')->nullable();
            $table->string('GuideLine');
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
        Schema::dropIfExists('doctor_responce_t_s');
    }
};
