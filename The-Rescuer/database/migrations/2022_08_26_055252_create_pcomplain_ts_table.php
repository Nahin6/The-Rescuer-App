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
        Schema::create('pcomplain_ts', function (Blueprint $table) {
            $table->id();            
            $table->float('lon');
            $table->float('lat');
            $table->bigInteger('userid');
            $table->bigInteger('psid')->nullable();
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
        Schema::dropIfExists('pcomplain_ts');
    }
};
